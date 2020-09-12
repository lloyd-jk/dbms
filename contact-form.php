<?php

$conn = mysqli_connect('localhost','root','','ass1');

    if(!$conn){
        echo 'Connection error'.mysqli_connect_error();
    }

if (isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_REQUEST['name'])  ;
    $rollno=mysqli_real_escape_string($conn,$_REQUEST['rollno'] )  ;
    $dob=mysqli_real_escape_string($conn, $_REQUEST['dob'] );
    // echo var_dump($dob); 

    $sql = "INSERT INTO biodata (name,rollno,dob) VALUES($name,$rollno,STR_TO_DATE($dob, '%Y-%m-%d'))";

    if(mysqli_query($conn,$sql)){
        echo 'success';
        header("Location: new.php");
    }
    else{
        echo 'failed'.mysqli_error($conn);
    }

}




?>
