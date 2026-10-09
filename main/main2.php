<?php

test();

function test(){
    echo 'Hello';
}
test();

function hello ($x){
    echo "hello, $x"; 
}

hello('John');

function six($a, $b, $c=3)
{
    echo $a + $b + $c;
}
six(2,2);

$a = 5

function test1($a){
    global $a;
    $a+=10;
    var_dump($a);
}

var_dump($a);
test1($a);
var_dump($a);

function sum1(...$sums){
    $res = 0;
    foreach($sums as $num){
        $res+=$num;
    }
    echo $res;
}

sum1(1,2,3,4,5,6,7,8,9,10);

function sum2(int $a, int $b, int $c)
{
    echo $a + $b + $c;
}

sum2(1,2,3);

function sum3(int $a, int $b, int $c): int
{
    echo $a + $b + $c;
}

echo sum3(1,2,3);



function get_tabel(int $one, int $to)
{
    echo '<tabel border="1" width="100">';

    for ($i=1; $i <= $one; $i++){
    echo "<tr>";
    for($j = 1; $j <= $to; $j++){
        echo '<td>' . ($i*$j) . '</td>';
    }
    echo "</tr>";
}

echo '</tabel>';
}