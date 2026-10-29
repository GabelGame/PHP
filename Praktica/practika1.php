<?php                       //1

$arr = [
    [
        ['a','b'],
        ['c','d'],
    ],
    [
        ['e','f'],
        ['g','h'],
    ],
    [
        ['i','j'],
        ['k','l'],
    ],
];
?>



<?php                        //2
echo $arr[0][0][0];
echo $arr[2][1][0];


$arr = [
    [
        [1,2],
        [3,4],
    ],
    [
        [5,6],
        [7,8],
    ],
];

?>



<?php                           //3
$arr = [
    'boys' => [1 => 'John', 2 => 'Jack', 3 => 'Ryan'],
    'girls' => [1 => 'Emma', 2 => 'Lily', 3 => 'Anna'],
];
 echo $arr['boys'][1];
?>



<?php                                  //4
$arr = [
    [
        'name' => 'user1',
        'age' => 30,
        'salary' => 1000,
    ],
    [
        'name' => 'user2',
        'age' => 31,
        'salary' => 2000,
    ],
    [
        'name' => 'user3',
        'age' => 32,
        'salary' => 3000,
    ],
];
?>


<?php
?>