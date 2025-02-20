<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Генератор паролів</title>
</head>
<body>
    <h1>Генератор паролів</h1>
    <form method="post">
        <label for="length">Довжина паролю:</label><br>
        <input type="number" id="length" name="length" min="8" required><br><br>
        <input type="submit" name="generate" value="Згенерувати пароль">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['generate'])) {
        $length = $_POST['length'];
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = substr(str_shuffle($chars), 0, $length);

        echo "<h2>Згенерований пароль:</h2>";
        echo "<p>$password</p>";
    }
    ?>

    <h1>Перевірка міцності паролю</h1>
    <form method="post">
        <label for="password">Введіть пароль:</label><br>
        <input type="text" id="password" name="password" required><br><br>
        <input type="submit" name="check" value="Перевірити">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check'])) {
        $password = $_POST['password'];
        $strong = (strlen($password) >= 8 &&
                  preg_match('/[A-Z]/', $password) &&
                  preg_match('/[a-z]/', $password) &&
                  preg_match('/[0-9]/', $password) &&
                  preg_match('/[!@#$%^&*()]/', $password));

        echo "<h2>Результат перевірки:</h2>";
        echo $strong ? "<p>Пароль міцний.</p>" : "<p>Пароль слабкий.</p>";
    }
    ?>
</body>
</html>