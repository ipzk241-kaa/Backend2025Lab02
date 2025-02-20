<?php
session_start();

$_SESSION['login'] = $_POST['login'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['games'] = $_POST['games'] ?? [];
$_SESSION['about'] = $_POST['about'];

if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $uploadFile = $uploadDir . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile);
    $_SESSION['photo'] = $uploadFile;
}

header('Location: result.php');
exit();
?>