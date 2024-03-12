<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2: обрабатываем HTML-форму
</title>
</head>
<body>
    <h1>Задание 2: обрабатываем HTML-форму</h1>
    <form action="./upload.php" method="POST" enctype="multipart/form-data">
        <label for="file_name">Укажите имя файла:</label><br>
        <input type="text" name="file_name"><br>
        <br>
        <label for="content">Ваш файл</label><br>
        <input type="file" name="content"><br>
        <br>
        <input type="submit" value="SEND">
    </form>
</body>
</html>