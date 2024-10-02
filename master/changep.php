
<?php
include 'includes/db.php';

if (isset($_POST['pass']) && isset($_COOKIE['loginuser'])) {
    // 使用预处理语句来避免 SQL 注入
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
    $hashedPass = hash('sha256', $_POST['pass']);
    $username = $_COOKIE['loginuser'];

    // 绑定参数
    $stmt->bind_param("ss", $hashedPass, $username);

    // 执行查询
    if ($stmt->execute()) {
        header("Location: in.php");
    } else {
        // 处理查询失败的情况
        echo "Error updating password: " . $stmt->error;
    }

    // 关闭语句
    $stmt->close();
} 
?>
<h1>更改你的密码</h1>
<form method="post">
    <input type="password" name="pass">
    <input type="submit" name="submit value="更改">
</form>
