<?php
$target_dir = "./storage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;

if(in_array($fileType, ["php", "html", "css", "js"])) {
    echo "不允许上传此类型文件。‌";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "抱歉，‌您的文件未被上传。‌";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "统一资源定位符:<input type=" . '"text "' . "value=" . '"' . "storage/" . htmlspecialchars( basename( $target_file) . '"' . ">";

    } else {
        echo "抱歉，‌上传文件时出现错误。‌";
    }
}
?>

