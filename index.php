<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планировщик задач</title>
</head>

<body>
    <h1>Список задач</h1>
    <div class="app" id="app">
        <form action="add_task.php" method="post">
            <input type="text" class="field" name="task" placeholder="Задача">
            <input type="date" class="field" name="task_date" placeholder="task_date">
            <input type="time" class="field" name="task_time" placeholder="">
            <select name="priority">
                <option value="low"> Низкая важность</option>
                <option value="medium"> Средняя важность</option>
                <option value="high"> Высокая важность</option>
            </select>
            <button type="submit"> Добавить</button>
        </form>
        <ul class="task-list" id="taskList">
            <!-- Список задач -->
        </ul>
    </div>
    <script src="js/script.js"></script>
</body>

</html>