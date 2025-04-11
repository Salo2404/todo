<?php
$host = "localhost";
$username = "root";
$password = "mysql";
$database = "tasks_app";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Ошибка подключения" . $connection->connect_error);
}