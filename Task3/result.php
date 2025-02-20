<?php
session_start();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результати форми</title>
</head>
<body>
    <h1>Результати форми</h1>
    <p>Логін: <?php echo $_SESSION['login']; ?></p>
    <p>Стать: <?php echo $_SESSION['gender']; ?></p>
    <p>Місто: <?php echo $_SESSION['city']; ?></p>
    <p>Улюблені ігри: <?php echo implode(', ', $_SESSION['games']); ?></p>
    <p>Про себе: <?php echo $_SESSION['about']; ?></p>
    <?php if (isset($_SESSION['photo'])): ?>
        <p>Фотографія: <img src="<?php echo $_SESSION['photo']; ?>" alt="Фото" width="100"></p>
    <?php endif; ?>
</body>
</html>