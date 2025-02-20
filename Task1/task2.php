<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сортування міст</title>
</head>
<body>
    <h1>Сортування міст за алфавітом</h1>
    <form method="post">
        <label for="cities">Введіть назви міст через пробіл:</label><br>
        <input type="text" id="cities" name="cities" required><br><br>
        <input type="submit" value="Відсортувати">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cities = $_POST['cities'];
        $citiesArray = explode(" ", $cities);
        sort($citiesArray);

        echo "<h2>Відсортовані міста:</h2>";
        echo "<p>" . implode(", ", $citiesArray) . "</p>";
    }
    ?>
</body>
</html>