<?php
if(!isset($_POST["file_name"]) || $_FILES['content']['error']===UPLOAD_ERR_NO_FILE) {
    header("Location: /");
}

$uploadDir = __DIR__.'/upload';
$uploadFile = $uploadDir . "/" . $_POST["file_name"];

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}
if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadFile)) {
    echo "Файл успешно загружен:<br>$uploadFile<br>";
    echo "Размер: " . $_FILES['content']['size'] . " bytes";
} else {
    echo "Что-то пошло не так";
}