<?php

// require 'main2.php'
// include 'main2.php'
include_once 'main.php'
echo git_tabel(3,4);
$nums = [1,2,3,4,5,6,7,8,9,10];

for ($i = 0; $i <10; $i++){
    if ($nums[$i]%2){
        continue;
    }
    echo $nums[$i]. '<br>';
}
for ($i = 1; $i <10; $i+=2){
    echo $nums[$i]. '<br>';
}

$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10'
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7'
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15'
    ]
];

echo '<pre>' .print_r($goods, 1). '</pre>';
for ($i = 0; $i <3; $i++){
    if ($goods[$i]['price'] < 120){
        $goods[$i]['price']+=15;
    }
}
echo '<pre>' .print_r($goods, 1). '</pre>';

foreach($goods as $good){
    if ($goods[$i]['price'] < 120){
        $goods[$i]['price']+=15;
    }
}

echo '<pre>' .print_r($goods, 1). '</pre>';

while ($year<= 2026){
    echo "<option value= '{$year}'> {$yaer} </option>";
    $yaer++;
}
echo '</select';
echo '<tabel border="1" width="100">';
$tr = 1;

while ($tr <= 10){
    echo "<tr>";
    $td = 1;

    while($td <= 10) {
        echo "<td> $tr * $td =". $td*$tr. "</td>";
        $td++; 
    }
    echo "</tr";
    $tr++
}


echo '<tabel border="1" width="100">';

for ($i=1; $i <= 10; $i++){
    echo "<tr>";
    for($j = 1; $j <=10; $j++){
        echo '<td>' . ($i*$j) . '</td>';
    }
    echo "</tr>";
}

echo '</tabel>';
?>