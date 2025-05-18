<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Сохраняем данные в сессию (вариант 1: ФИО и возраст)
    $_SESSION['last_name'] = $_POST['last_name'] ?? '';
    $_SESSION['first_name'] = $_POST['first_name'] ?? '';
    $_SESSION['age'] = $_POST['age'] ?? '';

    // Или вариант 2: данные об артисте
    $_SESSION['artist'] = $_POST['artist'] ?? '';
    $_SESSION['genre'] = $_POST['genre'] ?? '';
    $_SESSION['albums'] = $_POST['albums'] ?? '';

    header('Location: display.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ввод данных</title>
</head>
<body>
<h1>Форма ввода данных</h1>

<form method="POST">
    <fieldset>
        <legend>Вариант 1: Личные данные</legend>
        <label>Фамилия: <input type="text" name="last_name"></label><br>
        <label>Имя: <input type="text" name="first_name"></label><br>
        <label>Возраст: <input type="number" name="age"></label>
    </fieldset>

    <fieldset>
        <legend>Вариант 2: Данные артиста</legend>
        <label>Имя артиста: <input type="text" name="artist"></label><br>
        <label>Жанр музыки: <input type="text" name="genre"></label><br>
        <label>Количество альбомов: <input type="number" name="albums"></label>
    </fieldset>

    <button type="submit">Отправить</button>
</form>
</body>
</html>