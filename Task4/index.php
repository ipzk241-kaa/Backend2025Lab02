<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор функцій</title>
</head>
<body>
    <h1>Калькулятор функцій</h1>
    <form action="calculate.php" method="post">
        <label for="x">Введіть x:</label><br>
        <input type="number" step="any" id="x" name="x" required><br><br>

        <label for="y">Введіть y (для x^y):</label><br>
        <input type="number" step="any" id="y" name="y" required><br><br>

        <input type="submit" value="Обчислити">
    </form>
</body>
</html>