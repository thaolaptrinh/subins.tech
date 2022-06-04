<?php
extract($_POST);
include "./connect.php";


if (isset($_POST['signup'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $passwd = $_POST['password'];
    $repasswd = $_POST['repassword'];

    $query = "INSERT INTO users (email,username,passwd,repasswd)
    Values ('$email','$username','$passwd','$repasswd')";
    $sql = mysqli_query($conn, $query);
}
