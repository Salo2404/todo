<?php
require 'db.php';

$query = "SELECT * FROM tasks ORDER BY task_date ASC, task_time ASC";

$result = mysqli_query($connection, $query);

$tasks = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = $row;
}

echo json_encode(($tasks));

mysqli_close($connection);