<?php
$config = parse_ini_file("config.conf");
$host = $config['host'];
$dbname = $config['dbname'];
$username = $config['username'];
$password = $config['password'];

$conn = new mysqli($host, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 设置字符集为 utf8
$conn->set_charset("utf8");
?>
