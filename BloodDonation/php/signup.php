<?php
    $connection = mysqli_connect('localhost', 'root', '', 'blooddonation');
    $id = $_POST['id'];
    $email = $_POST['email']
    $age = $POST['age']
    $password = $_POST['password'];

    $checkdata = mysqli_query($connection, "SELECT * FROM userdata WHERE email = '$email'");
    $check = mysqli_num_rows($checkdata);

    if($check > 0) {
        echo "Email already exists";
        header("Location:localhost/blooddonation/mainpage.html/");
    }
    else {
        $input = mysqli_query($connection, "INSERT INTO userdata(id, email, age, password) VALUES ('$id', '$email', '$age', '$password')");
        header("Location:localhost/blooddonation/mainpage.html/");
?>