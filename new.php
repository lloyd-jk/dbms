<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Biodata</title>
    </head>    
    <body>
        <main>
            <p>INSERT</p>
            <form action="contact-form.php" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="rollno" placeholder="Roll No">
                <!-- <input type="text" name="dob" required pattern="\d{4}-\d{2}-\d{2}"> -->
                <!-- <input type="text" name="dob" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Enter a date in this format YYYY/MM/DD"/> -->
                <input type="date" name="dob" placeholder="DOB">
                <!-- <input type="text" name="dob" placeholder="DOB"> -->
                <button type="submit" name="submit">SUBMIT</button>
            </form>

        </main>

    </body>

</html>

<!-- 
<?php

    // $conn = mysqli_connect('localhost','root','','ass1');

    // if(!$conn){
    //     echo 'Connection error'.mysqli_connect_error();
    // }
    // $sql='SELECT * FROM biodata';

    // $output=mysqli_query($conn,$sql);

    // $output1=mysqli_fetch_all($output,MYSQLI_ASSOC);

    // // print_r($output1)
    // // foreach($output1 as $key=>$value) {
    // //     if ($value['roll no']==2439) {
    // //         echo 'pooh';
    // //     }
    // //     // print_r($value['roll no']);
    // //     // echo '<br>';
    // // }
?>  -->

