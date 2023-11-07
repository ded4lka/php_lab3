<?php

function DBConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_users";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) {
        die("Connection failed". mysqli_connect_error());
    }
    else{
        //echo "Подключение успешно";
        return $conn;
    }
}
?>