<?php
header('Content-Type: text/html; charset=utf-8');
echo "<pre>";

echo "=== Задание 1 ===\n";
$str = 'abcde';
echo strlen($str) . "\n";

$str = 'привет';
echo mb_strlen($str) . "\n";

$password = 'secret12';
$len = mb_strlen($password);
if ($len > 5 && $len < 10) {
    echo "Пароль подходит\n";
} else {
    echo "Нужно придумать другой пароль\n";
}


echo "\n=== Задание 2 ===\n";
$str = 'php';
echo strtoupper($str) . "\n";

$str = 'PHP';
echo strtolower($str) . "\n";

$str = 'london';
echo ucfirst($str) . "\n";

$str = 'London';
echo lcfirst($str) . "\n";

$str = 'london is the capital of great britain';
echo ucwords($str) . "\n";

$str = 'LONDON';
echo ucfirst(strtolower($str)) . "\n";

$str = 'привет';
echo mb_strtoupper($str) . "\n";

$str = 'ПРИВЕТ';
echo mb_strtolower($str) . "\n";


echo "\n=== Задание 3 ===\n";
$str = 'html css php';
echo substr($str, 0, 4) . "\n";
echo substr($str, 5, 3) . "\n";
echo substr($str, 9, 3) . "\n";

$str = 'abcdefgh';
echo substr($str, -3) . "\n";

$str = 'http://example.com';
echo (substr($str, 0, 7) === 'http://' ? 'Да' : 'Нет') . "\n";

$str = 'https://example.com';
echo (substr($str, 0, 7) === 'http://' || substr($str, 0, 8) === 'https://' ? 'Да' : 'Нет') . "\n";

$str = 'image.png';
echo (substr($str, -4) === '.png' ? 'Да' : 'Нет') . "\n";

$str = 'photo.jpg';
echo (substr($str, -4) === '.png' || substr($str, -4) === '.jpg' ? 'Да' : 'Нет') . "\n";

$str = 'This is a long string';
if (mb_strlen($str) > 5) {
    echo mb_substr($str, 0, 5) . '...';
} else {
    echo $str;
}
echo "\n";

$str = 'многобайтовые строки требуют особого подхода';
echo mb_substr($str, -7) . "\n";

$str = 'пример работы с кириллическими символами';
echo mb_substr($str, 7, 6) . "\n";
echo mb_substr($str, 16, 14) . "\n";


echo "\n=== Задание 4 ===\n";
$str = 'document.pdf';
var_dump(str_ends_with($str, '.pdf'));

$str = 'https://example.com';
var_dump(str_starts_with($str, 'https://'));

$str = 'The quick brown fox';
var_dump(str_contains($str, 'fox'));

$str = 'image.png';
var_dump(str_ends_with($str, '.png') || str_ends_with($str, '.jpg'));

$str = 'admin@example.com';
var_dump(str_contains($str, '@') && str_ends_with($str, '.com'));


echo "\n=== Задание 5 ===\n";
$str = 'abc abc abc';
echo strpos($str, 'b') . "\n";

$str = 'abc abc abc';
echo strrpos($str, 'b') . "\n";

$str = 'abc abc abc';
echo strpos($str, 'b', 3) . "\n";

$str = 'aaa aaa aaa aaa aaa';
$firstSpace = strpos($str, ' ');
echo strpos($str, ' ', $firstSpace + 1) . "\n";

$str = 'example..com';
echo (strpos($str, '..') !== false ? 'Есть' : 'Нет') . "\n";

$str = 'http://example.com';
echo (strpos($str, 'http://') === 0 ? 'Да' : 'Нет') . "\n";


echo "\n=== Задание 6 ===\n";
$str = 'aaa bbb ccc';
print_r(explode(' ', $str));

$arr = ['a', 'b', 'c', 'd', 'e'];
echo implode(',', $arr) . "\n";

$str = '1234567890';
print_r(str_split($str, 2));

$str = '1234567890';
print_r(str_split($str));

$str = '1234567890';
echo implode('-', str_split($str, 2)) . "\n";

$date = '2026-11-25';
echo implode('.', array_reverse(explode('-', $date))) . "\n";

$str = 'word※word※word※word';
print_r(mb_split('※', $str));

$str = 'программирование';
print_r(mb_str_split($str));

$str = 'кириллица';
print_r(mb_str_split($str, 2));


echo "\n=== Задание 7 ===\n";
$str = '  hello world  ';
echo trim($str) . "\n";

$str = '/php/';
echo trim($str, '/') . "\n";

$str = 'text text text.';
echo rtrim($str, '.') . '.' . "\n";


echo "\n=== Задание 8 ===\n";
$price = 19.99;
printf("price: %.2f$\n", $price);

$name = "John";
$age = 25;
printf("Name: %s, Age: %d years\n", $name, $age);

$name = 'John';
$score = 95;
echo sprintf("student %s scored %d points", $name, $score) . "\n";

$product = "Laptop";
$price = 1299.99;
$discount = 15;
printf("Product: %s | Price: $%.2f | Discount: %d%%\n", $product, $price, $discount);

$x = 10;
$y = 20;
$z = 30;
printf("Sum: %d + %d + %d = %d\n", $x, $y, $z, $x + $y + $z);

$day = 15;
$month = "March";
$year = 2023;
printf("Date: %d %s %d\n", $day, $month, $year);


echo "\n=== Задание 9 ===\n";
$str = '12345678';
echo number_format((float)$str, 0, '', ' ') . "\n";

$number = 9876543.21;
echo number_format($number, 2, '.', ' ') . "\n";

$price = 1234.5678;
echo '€' . number_format($price, 2, ',', '.') . "\n";


echo "\n=== Задание 10 ===\n";
$str = '12345';
echo strrev($str) . "\n";

$word = 'madam';
echo ($word === strrev($word) ? 'Палиндром' : 'Не палиндром') . "\n";


echo "\n=== Задание 11 ===\n";
for ($i = 1; $i <= 9; $i++) {
    echo str_repeat('x', $i) . "\n";
}

echo "\n";

for ($i = 1; $i <= 9; $i++) {
    echo str_repeat((string)$i, $i) . "\n";
}


echo "\n=== Задание 12 (часть 1) ===\n";
$str = 'aaa <b>bbb</b> ccc';
echo strip_tags($str) . "\n";

$str = '
    <p>aaa</p>
    <b>bbb</b>
    <s>ccc</s>
    <i>ddd</i>
';
echo strip_tags($str, '<b><i>') . "\n";

$str = 'aaa <b>bbb</b> <i>ccc</i>';
echo htmlspecialchars($str) . "\n";


echo "\n=== Задание 12 (часть 2) ===\n";
$str = 'aaa bbb ccc';
echo str_word_count($str) . "\n";

$str = 'hello hello world hello';
echo substr_count($str, 'hello') . "\n";

$str = '※※※';
echo mb_substr_count($str, '※') . "\n";

$str = 'abracadabra';
foreach (count_chars($str, 1) as $byte => $count) {
    echo chr($byte) . ": " . $count . "\n";
}


echo "\n=== Задание 13 ===\n";
$str = 'ab-cd-ef';
echo strchr($str, '-') . "\n";

$str = 'ab-cd-ef';
echo strrchr($str, '-') . "\n";

$str = 'ab--cd--ef';
echo strstr($str, '--') . "\n";

$str = 'программирование-на-php';
echo mb_strrchr($str, '-') . "\n";

$str = 'Привет-Мир-Пока';
echo mb_strrichr($str, '-') . "\n";

$str = 'Функции-для-работы-со-строками';
echo mb_strstr($str, '-работы') . "\n";

$str = 'ппп ррр ссс ттт ууу';
echo mb_stristr($str, 'РРР') . "\n";

$str = 'Тестирование-многобайтовых-функций';
echo mb_strrchr($str, '-') . "\n";

$str = 'Пример-Поиска-Подстроки-В-Тексте';
echo mb_strrichr($str, '-') . "\n";

echo "</pre>";
