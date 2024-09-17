<?php
include 'includes/db.php'
if (isset($_POST['pass'])) {
    $sql = "update users set password = " . hash('sha256', $_POST['pass']) . "where username = " . $_COOKIE['loginuser'];
    $conn->query($sql);
    header("Location:in.php")
}
?>
<meta charset="utf-8">
<h1>更改你的密码</h1>
<form method="post">
    <input type="password" name="pass">
    <input type="submit" name="submit value="更改">
</form>