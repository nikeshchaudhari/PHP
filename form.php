<?php
include ("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD FORM</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <main>
        <form action="#" method="POST">

            <h1>Registration Form</h1>
            <label for="name" id="fname">First_Name :</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last_Name : </label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="pass">Password :</label>
            <input type="password" id="pass" name="password"><br><br>
            <label for="conpass">Confirm_Password :</label>
            <input type="password" id="conpass" name="conpassword"><br><br>
            <label for="gen">Gender :</label>
            <select name="gender" id="select">
                <option value="notselect">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>
            <label for="email">Email :</label>
            <input type="mail" id="mail" name="email"><br><br>
            <label for="phone">Phone :</label>
            <input type="number" id="num" name="number"><br><br>
            <label for="add">Address :</label>
            <input type="text" id="address" name="add"><br><br>
            <div class="input_field">
                <input type="submit" value="Register" name="register">
            </div>




        </form>
    </main>

    <?php

    if ($_POST['register']) {

        $f_name = $_POST['fname'];
        $l_name = $_POST['lname'];
        $pass = $_POST['password'];
        $conpass = $_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $num = $_POST['number'];
        $address = $_POST['add'];

      $info = " INSERT INTO FORM VALUES('$f_name','$l_name','$pass','$conpass','$gender','$email','$num','$address')";
        $data = mysqli_query($conn, $info);

        if ($data) {
            echo "Insert Data";
        } else {
            echo " Not Insert Data";
        }
    }

    ?>

</body>

</html>