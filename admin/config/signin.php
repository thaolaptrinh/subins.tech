
<?php

include "./connect.php";

$username = $_POST['username'];
$passwd = $_POST['password'];


$query = "SELECT * FROM users WHERE username  = '$username' AND passwd = '$passwd'";

$sql = mysqli_query($conn, $query);


if ($sql->num_rows > 0) {
    header("Location: ../../dashboard");
} else {
    die('Login error!');
}

?>