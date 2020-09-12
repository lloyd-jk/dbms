<?php

$conn = mysqli_connect('localhost','root','','ass1');

    if(!$conn){
        echo 'Connection error'.mysqli_connect_error();
    }

if (isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_REQUEST['name']);
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

    if(!(mysqli_query($conn,$sql))){
        echo mysqli_error($conn);
    }

}
?>

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
