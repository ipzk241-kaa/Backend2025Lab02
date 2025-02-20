<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Заміна символів</title>
</head>
<body>
    <h1>Заміна символів</h1>
    <form method="post">
        <label for="text">Текст:</label><br>
        <input type="text" id="text" name="text" required><br><br>

        <label for="find">Знайти:</label><br>
        <input type="text" id="find" name="find" required><br><br>

        <label for="replace">Замінити:</label><br>
        <input type="text" id="replace" name="replace" required><br><br>

        <input type="submit" value="Виконати заміну">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];
        $find = $_POST['find'];
        $replace = $_POST['replace'];
        $result = str_replace($find, $replace, $text);

        echo "<h2>Результат:</h2>";
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>