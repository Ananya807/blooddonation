<?php
$connection = mysqli_connect('localhost', 'root', '', 'blooddonation');
$email = $_POST['email']
$password = $_POST['password'];

$checkdata = mysqli_query($connection, "SELECT * FROM userdata WHERE email = '$email' AND password = '$password'");
$check = mysqli_num_rows($checkdata);

if($check > 0) {
    echo "Email not found";
    header("Locationhttp://localhost/blooddonation/mainpage.html");
}
else {
    header("Location:http://localhost/blooddonation/signin.html/");
?>