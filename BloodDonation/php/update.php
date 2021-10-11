<?php
$connection = mysqli_connect('localhost', 'root', '', 'blooddonation');
$email = $_POST['email']
$password = $_POST['password'];

$checkdata = mysqli_query($connection, "SELECT * FROM userdata WHERE email = '$email' AND password = '$password'");

if($check > 0) {
    header("Location:localhost/blooddonation/signin.html/");
    