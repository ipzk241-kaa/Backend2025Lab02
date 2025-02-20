<?php
session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + 180 * 24 * 3600, '/');
    $_SESSION['lang'] = $lang;
    header('Location: index.php');
    exit();
}

$lang = $_COOKIE['lang'] ?? 'ukr'; 
$languageText = [
    'ukr' => 'Українська',
    'eng' => 'Англійська',
    'fra' => 'Французька'
];
$selectedLanguage = $languageText[$lang] ?? 'Українська';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Форма реєстрації</title>
</head>
<body>
    <h1>Форма реєстрації</h1>
    <p>Вибрана мова: <?php echo $selectedLanguage; ?></p>

    <div>
        <a href="index.php?lang=ukr"> <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-ua" viewBox="0 0 640 480" width="40px" height="40px">
            <g fill-rule="evenodd" stroke-width="1pt">
                <path fill="gold" d="M0 0h640v480H0z" />
                <path fill="#0057b8" d="M0 0h640v240H0z" />
            </g>
        </svg></a>
        <a href="index.php?lang=eng"> <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-us" viewBox="0 0 640 480" width="40px" height="40px">
            <path fill="#bd3d44" d="M0 0h640v480H0" />
            <path stroke="#fff" stroke-width="37" d="M0 55.3h640M0 129h640M0 203h640M0 277h640M0 351h640M0 425h640" />
            <path fill="#192f5d" d="M0 0h364.8v258.5H0" />
            <marker id="us-a" markerHeight="30" markerWidth="30">
                <path fill="#fff" d="m14 0 9 27L0 10h28L5 27z" />
            </marker>
            <path fill="none" marker-mid="url(#us-a)" d="m0 0 16 11h61 61 61 61 60L47 37h61 61 60 61L16 63h61 61 61 61 60L47 89h61 61 60 61L16 115h61 61 61 61 60L47 141h61 61 60 61L16 166h61 61 61 61 60L47 192h61 61 60 61L16 218h61 61 61 61 60z" />
        </svg></a>
        <a href="index.php?lang=fra"> <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-fr" viewBox="0 0 640 480" width="40px" height="40px">
            <path fill="#fff" d="M0 0h640v480H0z" />
            <path fill="#000091" d="M0 0h213.3v480H0z" />
            <path fill="#e1000f" d="M426.7 0H640v480H426.7z" />
        </svg></a>
    </div>

    <form action="process.php" method="post" enctype="multipart/form-data">
        <label for="login">Логін:</label><br>
        <input type="text" id="login" name="login" value="<?php echo $_SESSION['login'] ?? ''; ?>" required><br><br>

        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password_confirm">Пароль (ще раз):</label><br>
        <input type="password" id="password_confirm" name="password_confirm" required><br><br>

        <label>Стать:</label><br>
        <input type="radio" id="male" name="gender" value="Чоловік" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Чоловік') ? 'checked' : ''; ?>>
        <label for="male">Чоловік</label><br>
        <input type="radio" id="female" name="gender" value="Жінка" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Жінка') ? 'checked' : ''; ?>>
        <label for="female">Жінка</label><br><br>

        <label for="city">Місто:</label><br>
        <select id="city" name="city">
            <option value="Київ" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Київ') ? 'selected' : ''; ?>>Київ</option>
            <option value="Львів" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Львів') ? 'selected' : ''; ?>>Львів</option>
            <option value="Одеса" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Одеса') ? 'selected' : ''; ?>>Одеса</option>
            <option value="Житомир" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Житомир') ? 'selected' : ''; ?>>Житомир</option>
            <option value="Чуднів" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Чуднів') ? 'selected' : ''; ?>>Чуднів</option>
        </select><br><br>

        <label>Улюблені ігри:</label><br>
        <input type="checkbox" id="game1" name="games[]" value="Футбол" <?php echo (isset($_SESSION['games']) && in_array('Футбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
        <label for="game1">Футбол</label><br>
        <input type="checkbox" id="game2" name="games[]" value="Баскетбол" <?php echo (isset($_SESSION['games']) && in_array('Баскетбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
        <label for="game2">Баскетбол</label><br>
        <input type="checkbox" id="game3" name="games[]" value="Теніс" <?php echo (isset($_SESSION['games']) && in_array('DOTA2', $_SESSION['games'])) ? 'checked' : ''; ?>>
        <label for="game3">Теніс</label><br><br>

        <label for="about">Про себе:</label><br>
        <textarea id="about" name="about"><?php echo $_SESSION['about'] ?? ''; ?></textarea><br><br>

        <label for="photo">Фотографія:</label><br>
        <input type="file" id="photo" name="photo"><br><br>

        <input type="submit" value="Відправити">
    </form>
</body>
</html>