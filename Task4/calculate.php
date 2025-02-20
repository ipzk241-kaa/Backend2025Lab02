<?php
require 'func.php';

$x = $_POST['x'];
$y = $_POST['y'];

$results = [
    'sin(x)' => my_sin($x),
    'cos(x)' => my_cos($x),
    'tg(x)' => my_tg($x),
    'x^y' => my_pow($x, $y),
    'x!' => my_factorial($x)
];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результати обчислень</title>
</head>
<body>
    <h1>Результати обчислень</h1>
    <table border="1">
        <tr>
            <th>Функція</th>
            <th>Результат</th>
        </tr>
        <?php foreach ($results as $function => $value): ?>
            <tr>
                <td><?php echo $function; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>