<?php
include 'includes/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM articles WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "记录删除成功";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

// 重定向回首页或其他页面
header("Location: in.php");
exit();
?>
