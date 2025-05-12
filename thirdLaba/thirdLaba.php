<?php

/* 1 */
$very_bad_unclear_name = "день недели";
// Write your code here:
$order = &$very_bad_unclear_name;

$order .= " сегодня";    // Добавляем строку через конкатенацию

// Don't change the line below
echo "\n вторник: $very_bad_unclear_name.";
echo "\n";

/* 2 */

// Объявляем целочисленную переменную
$number = 42;
echo $number;

// Переходим на новую строку
echo "\n";

// Объявляем переменную с плавающей запятой
$price = 3.99;
echo $price;

// Выводим число 12 с помощью арифметической операции
echo "\n" . (10 + 2);

// Сравнение расходов за два месяца
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "\nРазница между расходами: " . ($lastMonth - $thisMonth);

echo "\n";

/* 3 */

$numLanguages = 4; // Ruby, Python, JavaScript, C++

$months = 11;

// Расчет общего количества дней обучения (11 месяцев по 16 дней)
$days = $months * 16;

// Расчет среднего количества дней на один язык
$daysPerLanguage = $days / $numLanguages;

echo "Среднее количество дней на изучение одного языка: " . $daysPerLanguage;
echo "\n";

/* 4 */

echo 19 ** 2;
echo "\n";

/* 5 */

$myNum = 10;

$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;

echo $answer;
echo "\n";

/* 6 */

$a = 10;
$b = 3;
$remainder = $a % $b;

echo "Остаток от деления $a на $b: " . $remainder;
echo "\n";


if ($a % $b == 0) {
    echo "Делится: " . ($a / $b);
    echo "\n";
} else {
    echo "Делится с остатком: " . ($a % $b);
    echo "\n";
}


$st = pow(2, 10); // 2^10 = 1024
echo $st;
echo "\n";

$sqrt245 = sqrt(245);
echo $sqrt245;
echo "\n";

$arr = [4, 2, 5, 19, 13, 0, 10];
$sumSquares = 0;
foreach ($arr as $num) {
    $sumSquares += $num ** 2;
}
$result = sqrt($sumSquares);
echo $result;
echo "\n";

/* 7 */
function printStringReturnNumber($numberString) {
    // Массив соответствий текстовых чисел цифровым
    $numberMap = [
        'ноль' => 0,
        'один' => 1,
        'два' => 2,
        'три' => 3,
        'четыре' => 4,
        'пять' => 5,
        'шесть' => 6,
        'семь' => 7,
        'восемь' => 8,
        'девять' => 9,
        'десять' => 10,
        // Добавляем десятки
        'двадцать' => 20,
        'тридцать' => 30,
        'сорок' => 40,
        'пятьдесят' => 50,
        // Добавляем составные числа
        'одиннадцать' => 11,
        'двенадцать' => 12,
        'тринадцать' => 13,
        'четырнадцать' => 14,
        'пятнадцать' => 15,
        'шестнадцать' => 16,
        'семнадцать' => 17,
        'восемнадцать' => 18,
        'девятнадцать' => 19,
        // Добавляем "тридцать пять" и подобные
        'тридцать пять' => 35,
        'сто' => 100
    ];


    $numberString = mb_strtolower(trim($numberString));


    if (array_key_exists($numberString, $numberMap)) {
        echo "Вы ввели: " . $numberString . "\n";
        return $numberMap[$numberString];
    } else {
        echo "Неизвестное число: " . $numberString . "\n";
        return 0;
    }
}

$input = "тридцать пять";
$my_num = printStringReturnNumber($input);
echo "Числовое значение: " . $my_num . "\n";

$input2 = "сорок";
$my_num2 = printStringReturnNumber($input2);
echo "Числовое значение: " . $my_num2 . "\n";

/* 8 */

function increaseEnthusiasm($str) {
    return $str . "!";
}

echo increaseEnthusiasm("С днем победы");
echo "\n";

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

echo repeatThreeTimes("Ура");
echo "\n";

echo increaseEnthusiasm(repeatThreeTimes("Ура"));
echo "\n";

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

echo cut("Hello world", 3);
echo "\n";
echo cut("Hello world");
echo "\n";

function printArrayRecursive($arr, $index = 0) {
    if ($index < count($arr)) {
        echo $arr[$index] . " ";
        echo "\n";
        printArrayRecursive($arr, $index + 1);
    }
}

$numbers = [1, 2, 3, 4, 5];
printArrayRecursive($numbers);

function sumDigits($num) {
    $sum = array_sum(str_split((string)$num));
    echo $sum;
    echo "\n";
    return $sum > 9 ? sumDigits($sum) : $sum;
}

echo sumDigits(9875);
echo "\n";

/* 9 */

$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}

print_r($array);

function arrayFill($value, $count) {
    return array_fill(0, $count, $value);
}
print_r(arrayFill('x', 5));

$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($array as $subArray) {
    $sum += array_sum($subArray);
}
echo $sum;

$array = [];
$value = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $array[$i][$j] = $value++;
    }
}
print_r($array);

$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo $result;
echo "\n";

$user = [
    'name' => 'Иван',
    'surname' => 'Иванов',
    'patronymic' => 'Иванович'
];
echo "{$user['surname']} {$user['name']} {$user['patronymic']}";
echo "\n";

$date = [
    'year' => date('Y'),
    'month' => date('m'),
    'day' => date('d')
];
echo "{$date['year']}-{$date['month']}-{$date['day']}";
echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr);
echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo end($arr);
echo "\n";

echo $arr[count($arr)-2];
echo "\n";

/* 10 */

function checkSum($a, $b) {
    return ($a + $b) > 10;
}

var_dump(checkSum(5, 6));   // bool(true)
var_dump(checkSum(2, 3));   // bool(false)

function checkEqual($a, $b) {
    return $a == $b;
}

// Примеры:
var_dump(checkEqual(5, 5));  // bool(true)
var_dump(checkEqual(2, 3));  // bool(false)


$test = 0;
echo $test == 0 ? 'верно' : '';
echo "\n";

$age = 45;

if ($age < 10 || $age > 99) {
    echo "Число меньше 10 или больше 99";
    echo "\n";
} else {
    $sum = array_sum(str_split((string)$age));

    if ($sum <= 9) {
        echo "Сумма цифр однозначна: $sum";
        echo "\n";
    } else {
        echo "Сумма цифр двузначна: $sum";
        echo "\n";
    }
}

$arr = [4, 2, 7];

if (count($arr) == 3) {
    echo "Сумма элементов: " . array_sum($arr);
    echo "\n";
}

/* 11 */

$rows = 20;

for ($i = 1; $i <= $rows; $i++) {
    echo str_repeat('x', $i) . "\n";
}
echo "\n";

/* 12 */

$numbers = [4, 8, 15, 16, 23, 42];
$average = array_sum($numbers) / count($numbers);
echo $average;
echo "\n";

$sum = array_sum(range(1, 100));
echo $sum;
echo "\n";

$numbers = [1, 4, 9, 16, 25];
$roots = array_map('sqrt', $numbers);
print_r($roots);

$alphabet = array_combine(range('a', 'z'), range(1, 26));
print_r($alphabet);

$str = '1234567890';
$pairs = str_split($str, 2);
$sum = array_sum($pairs);
echo $sum; // 12+34+56+78+90 = 270

