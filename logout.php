<?php
setcookie("login", $login, time() - 1, '/');
setcookie("password", $password, time() - 1, '/');
header('Location: /index.php');
?>