<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма бронирования</title>
</head>
<body>
    <h1>Форма бронирования</h1>
    <form action="process5.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="date">Дата бронирования:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Время бронирования:</label>
        <input type="time" id="time" name="time" required><br><br>

        <input type="submit" value="Забронировать">
    </form>
</body>
</html>