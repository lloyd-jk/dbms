<?php

// this the backend part of the file...



$conn = mysqli_connect('localhost','root','','ass1');

    if(!$conn){
        echo 'Connection error'.mysqli_connect_error();     // lines 7 to 11 is used to connect the the database...in my case the username is 'root'that is why  have passed 'root' ,
        //  mysqli_connect(name of the server ours is local server, username of the database, password my case i have none, then the main database name ) 
    }

//dont worry if you are wondering dafuq is sql and what username and how to access all of that...i'll teach you that shortly..
// $conn is where we store the so called "connection" we got the from passing the query. connection has the info on database we have asked to connect
// and line 9 that is the if statement is for debuggin purpoes , is suppose connection has failed.

if (isset($_POST['submit'])){     //here this isset() variable checks if we have pressed the submit button or not....
    //$_POST is a global varibale that basically retrieves data from html that we have jst now submitted
    $name=mysqli_real_escape_string($conn,$_REQUEST['name']);  //in this mysqli_real_escape_string...idk what is the purpose of it, but still the person in the video told to put it as safety or something like that, 
    //You may also think what is the diff betwenn $POST and $REquest....idk that also.....
    // in the above function we pass the connection and the input that we gave and i store in a varibale named $name
    $rollno=mysqli_real_escape_string($conn,$_REQUEST['rollno']);
    $dob=$_POST['dob'];
    $address=mysqli_real_escape_string($conn,$_REQUEST['address']);
    $mobile=mysqli_real_escape_string($conn,$_REQUEST['mobile']);
    $email=mysqli_real_escape_string($conn,$_REQUEST['email']);
    $s1=mysqli_real_escape_string($conn,$_REQUEST['s1']);
    $s2=mysqli_real_escape_string($conn,$_REQUEST['s2']);
    $s3=mysqli_real_escape_string($conn,$_REQUEST['s3']);
    $s4=mysqli_real_escape_string($conn,$_REQUEST['s4']);
    $s5=mysqli_real_escape_string($conn,$_REQUEST['s5']);
    $s6=mysqli_real_escape_string($conn,$_REQUEST['s6']);
    $s7=mysqli_real_escape_string($conn,$_REQUEST['s7']);
    $s8=mysqli_real_escape_string($conn,$_REQUEST['s8']);
    $cgpa=mysqli_real_escape_string($conn,$_REQUEST['cgpa']);
    $hobbies=mysqli_real_escape_string($conn,$_REQUEST['hobbies']);
    $h_or_d=mysqli_real_escape_string($conn,$_REQUEST['h_or_d']);
    $ref=mysqli_real_escape_string($conn,$_REQUEST['ref']);


    $sql = "INSERT INTO biodata (name,rollno,dob,address,mobile,email,s1,s2,s3,s4,s5,s6,s7,s8,cgpa,hobbies,h_or_d,ref) VALUES('$name','$rollno',STR_TO_DATE('$dob', '%Y-%m-%d'),'$address','$mobile','$email',$s1,'$s2','$s3','$s4','$s5','$s6','$s7','$s8','$cgpa','$hobbies','$h_or_d','$ref')";


    //this is where we make our string of sql querie....like we make up the querie that we want to pass into the db...basically this php admin thingy il thanne we can run these sql queries like "gcc q1.c" more like a command...

    // so the command tht we are gonna pass to DB and ultimately executing it to store the value is all about line 42......dont worry about the STR_TO_DATE part.....i'll explain it after you understand the basics...ellam kooode paranja ninakk poga avvum...

    // in short the sql query syntax can be minimalised as "INSERT INTO biodata(name of the varibale defined in DB) VALUES(varibale that we want to pass ie above variables that we retrieved from the html)

    if(!(mysqli_query($conn,$sql))){
        echo mysqli_error($conn);
    }

    //above line is just to execute the thing....`like in varible sql, ie $sql we have stored the command and now we have to simply pass the varibale...that is what sqli_query() does.. mysqil_query(connection,command)
    //the thing that is inside the if statement is to check if the command is succesfully executed, if not then the error will be printed..

}
?>

<!-- ignore the below html code, what it basically does is print whatever data we have entered, for now lets concentrate on php and sql... -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Biodata</title>
    <div style= "text-align:center">
        <p style="font-size:30px">Name: <?php echo $name; ?></p> <br>
        <p style="font-size:30px">Roll Number: <?php echo $rollno; ?></p><br>
        <p style="font-size:30px">D.O.B: <?php echo $dob; ?></p><br>
        <p style="font-size:30px">Address: <?php echo $address; ?></p><br>
        <p style="font-size:30px">Mobile Number: <?php echo $mobile; ?></p><br>
        <p style="font-size:30px">Email ID: <?php echo $email; ?></p><br>
        <p style="font-size:30px">Semester Wise SGPA's:</p><br>
        <p style="font-size:25px">Semester 1: <?php echo $s1; ?></p><br>
        <p style="font-size:25px">Semester 2: <?php echo $s2; ?></p><br>
        <p style="font-size:25px">Semester 3: <?php echo $s3; ?></p><br>
        <p style="font-size:25px">Semester 4: <?php echo $s4; ?></p><br>
        <p style="font-size:25px">Semester 5: <?php echo $s5; ?></p><br>
        <p style="font-size:25px">Semester 6: <?php echo $s6; ?></p><br>
        <p style="font-size:25px">Semester 7: <?php echo $s7; ?></p><br>
        <p style="font-size:25px">Semester 8: <?php echo $s8; ?></p><br>
        <p style="font-size:30px">CGPA: <?php echo $cgpa; ?></p><br>
        <p style="font-size:30px">Hobbies: <?php echo $hobbies; ?></p><br>
        <p style="font-size:30px">I am a  <?php echo $h_or_d; ?></p><br>
        <p style="font-size:30px">References: <?php echo $ref; ?></p><br> 

        <button onclick="document.location='q1.php'">Enter Again</button>       
            
    </div>
    
</head>
<body>
    
</body>
</html>
