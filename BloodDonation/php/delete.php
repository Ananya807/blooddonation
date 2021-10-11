<?php 
    $con = mysqli_connect('localhost','root','','blooddonation');
    $phoneoremail = $_POST['email'];

    $check = mysqli_query($con,"DELETE FROM userdata WHERE email = '$email'");

    if($check > 0) {
        header("Location:localhost/blooddonation/mainpage.html/");
    }
?>