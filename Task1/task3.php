<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Ім'я файлу</title>
</head>
<body>
    <h1>Виділення імені файлу без розширення</h1>
    <form method="post">
        <label for="filepath">Введіть шлях до файлу:</label><br>
        <input type="text" id="filepath" name="filepath" required><br><br>
        <input type="submit" value="Отримати ім'я файлу">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filepath = $_POST['filepath'];
        $filename = pathinfo($filepath, PATHINFO_FILENAME);

        echo "<h2>Ім'я файлу:</h2>";
        echo "<p>$filename</p>";
    }
    ?>
</body>
</html>