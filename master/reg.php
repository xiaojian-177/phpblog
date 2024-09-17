<?php
include 'includes/db.php';
$username = $_POST['user'];
$password = hash('sha256', $_POST['pass']);
$sql = "insert into users (username, password) values ('$username','$password')";
$result = $conn->query($sql);
header("Location:index.html");
?>
