<?php

require_once('db.php');
$conn = DBConnect();

$login = $_POST['login'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];
$email = $_POST['email'];

if(empty($login) || empty($password) || empty($repeatpassword) || empty($email)) {
    echo "Заполните поля:";
}
else {
    if($password != $repeatpassword) {
        echo "Пароли не совпадают!";
    }
    else {
        $sql = "INSERT INTO users (login, password, email) VALUES ('$login', '$password', '$email')";
        if ($conn -> query($sql) == TRUE) {
            header('Location: /index.php');
        }
        else {
            $error = "Ошибка регистрации!";
        }
    }
}

?>
<html>
    <head>
        <title>Страница регистрации</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php if (isset($error)): ?>
        <span style="color: red"><?= $error ?></span>
    <?php endif; ?>
    <form action="/register.php" method="post">
        <input type="text" placeholder="login" name="login">
        <br>
        <input type="text" placeholder="password" name="password">
        <br>
        <input type="text" placeholder="repeat password" name="repeatpassword">
        <br>
        <input type="text" placeholder="email" name="email">
        <br>
        <button type="submit">Зарегистрироваться</button>
    </form>
    </body>
</html>