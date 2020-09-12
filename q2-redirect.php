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
            echo 'present';
        }
    }

}
?>

