<?php
$connection = new mysqli('localhost', 'root', '', 'Database Name');

$name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
#encrypt password using BCRYPT / ARGON
$encrypt = password_hash($password, PASSWORD_BCRYPT);

$insert = $connection -> query("INSERT INTO users(name, email, password) 
            VALUES('$name', '$email', '$encrypt')");
if($insert) {
    echo 'Data inserted successfully.';
} else {
    echo 'Failed, Please try again.';
}
