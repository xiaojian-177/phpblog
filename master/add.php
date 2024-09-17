<?php
include 'includes/db.php';
$cookie = $_COOKIE['loginuser'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $mode = $_POST['mode'];
    $sql = "INSERT INTO articles (title, content, publisher,mode) VALUES ('$title', '$content', '$cookie','$mode')";

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
    <select name="mode">
        <option value="yes">富文本</option>
        <option value="no">普通文本</option>
    </select><br />           
    <input type="submit" value="发布">
    
</form>
<a href"upload.form.html">上传资源</a>
