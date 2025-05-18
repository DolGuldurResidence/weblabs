<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Отображение данных</title>
</head>
<body>
<h1>Сохранённые данные</h1>

<?php if (isset($_SESSION['first_name'])): ?>
    <h2>Личные данные:</h2>
    <p>Фамилия: <?php echo htmlspecialchars($_SESSION['last_name']); ?></p>
    <p>Имя: <?php echo htmlspecialchars($_SESSION['first_name']); ?></p>
    <p>Возраст: <?php echo htmlspecialchars($_SESSION['age']); ?></p>
<?php endif; ?>

<?php if (isset($_SESSION['artist'])): ?>
    <h2>Данные артиста:</h2>
    <p>Имя артиста: <?php echo htmlspecialchars($_SESSION['artist']); ?></p>
    <p>Жанр музыки: <?php echo htmlspecialchars($_SESSION['genre']); ?></p>
    <p>Количество альбомов: <?php echo htmlspecialchars($_SESSION['albums']); ?></p>
<?php endif; ?>

<?php if (!isset($_SESSION['first_name']) && !isset($_SESSION['artist'])): ?>
    <p>Данные не введены. <a href="index.php">Вернуться к форме</a></p>
<?php endif; ?>
</body>
</html>