<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Кількість днів між датами</title>
</head>
<body>
    <h1>Кількість днів між датами</h1>
    <form method="post">
        <label for="date1">Дата 1 (День-Місяць-Рік):</label><br>
        <input type="text" id="date1" name="date1" required><br><br>

        <label for="date2">Дата 2 (День-Місяць-Рік):</label><br>
        <input type="text" id="date2" name="date2" required><br><br>

        <input type="submit" value="Розрахувати">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date1 = DateTime::createFromFormat('d-m-Y', $_POST['date1']);
        $date2 = DateTime::createFromFormat('d-m-Y', $_POST['date2']);
        $interval = $date1->diff($date2);

        echo "<h2>Результат:</h2>";
        echo "<p>Кількість днів: " . $interval->days . "</p>";
    }
    ?>
</body>
</html>