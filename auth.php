<?php
require_once('db.php');

function checkAuth(string $login, string $password, mysqli $conn) {
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return true;
        }
    }
    else {
        return false;
    }
}

function getUserLogin(): ?string {
    $login_from_cookie = $_COOKIE['login'] ?? '';
    $password_from_cookie = $_COOKIE['password'] ?? '';

    if (checkAuth($login_from_cookie, $password_from_cookie, DBConnect())) {
        return $login_from_cookie;
    }
    return null;
}

?>