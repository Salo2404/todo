<?php


if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    $query = "DELETE FROM tasks WHERE id = '$id'";
    $result = mysqli_query($connection, $query);



    if ($result) {
        //успешное удаление задачи 
    } else {
        //Ошибка при удалении задачи 
    }
}

mysqli_close($connection);
