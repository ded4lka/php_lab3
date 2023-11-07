<?php
    require_once('auth.php');
    $login = getUserLogin();
?>

<html>
<head>
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--<?php
        require 'vendor/autoload.php';
    ?>-->
    <?php if ($login !== null): ?>
        Добро пожаловать, <?= $login ?>
        <br>
        <a href="/logout.php">Выйти</a>
    <?php else: ?>
        <a href="/login.php">Авторизуйтесь</a> или <a href="/register.php">Зарегистрируйтесь</a>
    <?php endif; ?>
</body>
</html>