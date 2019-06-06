<?php
include_once 'dbh.inc.php';

$user = mysqli_real_escape_string($conn,$_POST['user']);
$password = mysqli_real_escape_string($conn,$_POST['password'];

$sql = "INSERT INTO users (user_user, user_password )
values ('$user','$password');";
mysqli_query($conn, $sql);

header("Location: ../register.html?singup=success");

?>