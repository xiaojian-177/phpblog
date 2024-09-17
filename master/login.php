<meta charset="utf-8">
<?php
include 'includes/db.php';
$user = $_POST['user'];
$pass = hash('sha256',$_POST['pass']);
$sql = "select * from users where username = '$user'";
$result = $conn->query($sql);
setcookie("loginuser","");
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        if ($row['password'] == $pass) {
            setcookie("loginuser",$user);
            header("Location:in.php");
        } else {
            echo "密码错误";
        }
    }
} else {
    
    echo "找不到用户";
}
$conn->close();
?>
