<!DOCTYPE html>
<html>
    <head>
        <title>Biodata</title>
    </head>    
    <body>
        <main>
            <h1 style="text-align:center">Biodata</h1>
            <form action="q1-redirect.php" method="post" style="text-align:center">
                <label>Name:</label><br>
                <input type="text" name="name" placeholder="Name"><br><br>

                <label>Roll Number:</label><br>
                <input type="text" name="rollno" placeholder="Roll No"><br><br>

                <label>Date Of Birth:</label><br>
                <input type="date" name="dob" placeholder="DOB"><br><br>

                <label>Address:</label><br>
                <textarea type="text" name="address" placeholder="Address" rows="4" cols="50"></textarea><br><br>

                <label>Mobile Number:</label><br>
                <input type="text" name="mobile" placeholder="Mobile Number"><br><br>

                <label>Email ID:</label><br>
                <input type="text" name="email" placeholder="Email ID"><br><br>

                <label>Semester Wise SGPA's:</label><br>

                <label>Semester 1:</label><br>
                <input type="text" name="s1" placeholder="sgpa"><br><br>

                <label>Semester 2:</label><br>
                <input type="text" name="s2" placeholder="sgpa"><br><br>

                <label>Semester 3:</label><br>
                <input type="text" name="s3" placeholder="sgpa"><br><br>


                <label>Semester 4:</label><br>
                <input type="text" name="s4" placeholder="sgpa"><br><br>

                <label>Semester 5:</label><br>
                <input type="text" name="s5" placeholder="sgpa"><br><br>

                <label>Semester 6:</label><br>
                <input type="text" name="s6" placeholder="sgpa"><br><br>

                <label>Semester 7:</label><br>
                <input type="text" name="s7" placeholder="sgpa"><br><br>

                <label>Semester 8:</label><br>
                <input type="text" name="s8" placeholder="sgpa"><br><br>

                <label>CGPA:</label><br>
                <input type="text" name="cgpa" placeholder="cgpa"><br><br>

                <label>Hobbies:</label><br>
                <textarea type="text" name="hobbies" placeholder="Enter hobbies row wise" rows="4" cols="50"></textarea><br><br>

                <label>Hosteller or Day scholar?:</label><br>
                <select name="h_or_d">
                    <option value="Hosteller">Hosteller</option>
                    <option value="Day scholar">Day scholar</option>
                </select><br><br>

                <label>References:</label><br>
                <textarea type="text" name="ref" placeholder="References" rows="4" cols="50"></textarea><br><br>

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

