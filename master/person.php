<meta charset="utf-8">
<h1>个人主页<h1/>
<?php
$cookie = $_COOKIE['loginuser'];
echo $cookie . "，你好<br>";
echo "<a href="changep.php">更改密码</a>";
?>
