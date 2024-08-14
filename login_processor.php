<?php
$connection = new mysqli('localhost', 'root', '', 'youtube');

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$sql = $connection -> query("SELECT * FROM users WHERE email = '$email'");
$count = mysqli_num_rows($sql);

if($count < 1) {
    die('Invalid username or password');
} else {
    while($rows = $sql -> fetch_assoc()) {
        //used session purposes
        $_SESSION['id'] = $rows['id'];
        $encrypted = $rows['password'];
        //Verify if the password entered by the user is correct

        $verify = password_verify($password, $encrypted);
        //verify if password is correct else die with incorrect password
        if($verify) {
            echo 'Login Successfull';
        } else {
            echo 'Incorrect Password';
        }

    }
}
