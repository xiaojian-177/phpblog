<?php
include 'includes/db.php';

$id = $_GET['id'];
$login = $_COOKIE['loginuser'];
$sql = "SELECT publisher, id, title, content,mode FROM articles WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        
        if ($row['mode'] == "no") {
            echo "<h1>" . htmlspecialchars($row["title"]). "</h1>";
            echo "<p>" . nl2br(htmlspecialchars($row["content"])). "</p>";
        
        }
        if ($row['mode'] == "yes") {
            echo "<h1>" . $row["title"]. "</h1>";
            echo "<p>" . $row["content"] . "</p>";
        
        }
        $pbls = $row['publisher'];
    }
    
    echo "$pbls 发布<br>";
    if ($login == $pbls) {
        echo '<a href=delete.php?id=' . $id . '>删除</a><br>';
        echo '<a href=edit.php?id=' . $id . '>更改</a><br>';
    }
    echo '<a href="in.php">返回</a>'; 
} else {
    echo "0 结果";
}
$conn->close();
?>
