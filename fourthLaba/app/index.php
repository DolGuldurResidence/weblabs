<?php
session_start();

function isPalindrome($word) {
    $word = mb_strtolower($word);
    $length = mb_strlen($word);
    for ($i = 0; $i < $length / 2; $i++) {
        if (mb_substr($word, $i, 1) != mb_substr($word, $length - $i - 1, 1)) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'] ?? '';

    // Подсчет слов и символов
    $wordCount = str_word_count($text, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоППпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
    $charCount = mb_strlen($text);

    // Поиск палиндромов
    $words = preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
    $palindromes = 0;
    foreach ($words as $word) {
        // Удаляем знаки препинания из слова
        $cleanedWord = preg_replace('/[^\p{L}\p{N}]/u', '', $word);
        if (mb_strlen($cleanedWord) > 1 && isPalindrome($cleanedWord)) {
            $palindromes++;
        }
    }

    // Сохранение результатов в сессию
    $_SESSION['wordCount'] = $wordCount;
    $_SESSION['charCount'] = $charCount;
    $_SESSION['palindromes'] = $palindromes;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подсчет слов, символов и палиндромов</title>
</head>
<body>
<form method="POST">
    <textarea name="text" rows="5" cols="40"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea><br>
    <button type="submit">Подсчитать</button>
</form>

<?php if (isset($_SESSION['wordCount'])): ?>
    <p>Количество слов: <?php echo $_SESSION['wordCount']; ?></p>
    <p>Количество символов: <?php echo $_SESSION['charCount']; ?></p>
    <p>Количество палиндромов: <?php echo $_SESSION['palindromes']; ?></p>
<?php endif; ?>
</body>
</html>