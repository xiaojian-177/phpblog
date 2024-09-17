<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $id = $_GET['id'];
    $sql = "update articles set title = '$title', content = '$content' where id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
        header('Location:in.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form action="" method="post">
    标题: <input type="text" name="title"><br>
    内容: <textarea name="content"></textarea><br>
    <input type="submit" value="发布">
</form>
