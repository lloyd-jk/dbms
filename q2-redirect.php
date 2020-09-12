<?php

$conn = mysqli_connect('localhost','root','','ass1');

    if(!$conn){
        echo 'Connection error'.mysqli_connect_error();
    }

if (isset($_POST['search1'])){
    $search=mysqli_real_escape_string($conn,$_REQUEST['search']);


    $sql = "SELECT * FROM biodata";

    $temp=mysqli_query($conn,$sql);
    $output=mysqli_fetch_all($temp,MYSQLI_ASSOC);
    foreach ($output as $key => $value) {
        if ($value['rollno']==$search) {
            $name=$value['name'];
            $rollno=$value['rollno'];
            $dob=$value['dob'];
            $address=$value['address'];
            $mobile=$value['mobile'];
            $email=$value['email'];
            $s1=$value['s1'];
            $s2=$value['s2'];
            $s3=$value['s3'];
            $s4=$value['s4'];
            $s5=$value['s5'];
            $s6=$value['s6'];
            $s7=$value['s7'];
            $s8=$value['s8'];
            $cgpa=$value['cgpa'];
            $hobbies=$value['hobbies'];
            $h_or_d=$value['h_or_d'];
            $ref=$value['ref'];
                }
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

        <button onclick="document.location='q2.php'">Search Again</button>       
            
    </div>
    
</head>
<body>
    
</body>
</html>


