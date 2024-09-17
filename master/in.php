<?php
include 'includes/db.php';

$sql = "SELECT id, title, created_at, publisher FROM articles ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "<div><a href='article.php?id=" . $row["id"]. "'>" . htmlspecialchars($row["title"]). "</a> - " . $row["created_at"]. "</div>";
    }
} else {
    echo "0 结果<br>";
}
$conn->close();
?>
<a href="add.php">添加新文章</a>
<a href="person.php">个人主页</a>
