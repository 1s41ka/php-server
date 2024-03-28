<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code</title>
</head>
<body>
    <?php
    // Объявление переменных и их типов
    $number = 12; // Integer
    $num = 4.6; // Float

    // Выполнение арифметических операций
    $res = $number + $num;
    $word = 'Переменная равна: ';
    echo $word . $res . "<br>"; // Вывод результата

    // Работа с константами и вывод информации о PHP
    $bool = true;
    // echo $bool;
    echo PHP_VERSION . "<br>"; // Вывод версии PHP
    echo defined("PI") . "<br>"; // Вывод существования константы
    define("PI", 3.14);
    echo defined("PI") . "<br>"; // Проверка существования константы
    echo PI . "<br>"; // Вывод значения константы

    // Арифметические операции и операции инкремента/декремента
    $number--; // Уменьшение переменной на 1
    echo $number . "<br>"; // Вывод нового значения переменной

    $res = $number - $num; // Вычитание
    echo $res . "<br>"; // Вывод результата

    $res = $number / $num; // Деление
    echo $res . "<br>"; // Вывод результата

    $res = $number * $num; // Умножение
    echo $res . "<br>"; // Вывод результата

    $res = $number % $num; // Остаток от деления
    echo $res . "<br>"; // Вывод результата
    ?>
</body>
</html>
