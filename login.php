<?php
require_once('db.php');
require_once ('auth.php');
$conn = DBConnect();

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)) {
    echo "Заполните поля:";
}
else {
    if (checkAuth($login, $password, $conn)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /index.php');
    }
    else {
        $error = "Ошибка авторизации!";
    }
    }
?>

<html>
<head>
    <title>Страница авторизации</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($error)): ?>
        <span style="color: red"><?= $error ?></span>
    <?php endif; ?>
    <form action="/login.php" method="post" id="loginform">
        <input type="text" placeholder="login" name="login">
        <br>
        <input type="text" placeholder="password" name="password">
        <br>
        <button type="submit">Войти</button>
    </form>
</body>
</html>
