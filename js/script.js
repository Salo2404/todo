//Функция deleteTask принимает идентификатор задачи для удаления.

function deleteTask(taskId) {
    if (confirm("Удалить задачу?")) {
        fetch(`delete_task.php?=${taskId}`)
            .then(() => {

                window.location.reload();
            })
            .catch((error) => {
                alert("Произошла ошибка")
            }
            )
    };
}

function loadTasks() {
    fetch('get_tasks.php')
        .then((response) => {
            //Преобразовываем ответ в формат JSON
            return response.json();

        })
        //Метод then вернет промис результатом которого уже будет массив объектов  (строк из БД)
        .then((data) => {
            //Получаем элемент списка задач
            const taskList = document.getElementById('taskList');
            //Очистка списка задач перед обновлением
            taskList.innerHTML = ' ';

            console.log(data)

            data.forEach((task) => {
                //Создание нового элемента списка
                const listItem = document.createElement('li');
                //Записываю в элемент списка задачу
                listItem.innerHTML = `
                Дата:${task.task_date}<br>
                Время:${task.task_time}<br>
                Задача: ${task.task}
                Задача: ${task.priority}
                `
                listItem.innerHTML += `<button onclick='deleteTask(${task.id})'>Удалить</button>`

                //Добавляю элемент списка в список задач
                taskList.appendChild(listItem);
            })
        })
}
//Загрузка задач при загрузке страницы
loadTasks();