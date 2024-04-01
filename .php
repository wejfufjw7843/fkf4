<?php
<!DOCTYPE html>
<html>
<head>
  <title>Информация о пользователе</title>
</head>
<body>
  <h1>Информация о пользователе</h1>
  <p id="user-info"></p>

  <script>
    function displayUserInfo(name, age) {
        // Получаем элемент, в который будем выводить информацию
        const userInfoElement = document.getElementById("user-info");

        // Формируем строку с информацией о пользователе
        const userInfo = `Имя: ${name}, Возраст: ${age}`;

        // Выводим информацию на страницу
        userInfoElement.innerHTML = userInfo;
    }

    // Пример использования функции
    displayUserInfo("John Doe", 30);
  </script>
</body>
</html>
?>