<?php 

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

echo '私は、' . PHP_EOL;

foreach($foods as $food => $menu){
    echo $food . 'に' . $menu . PHP_EOL;
}

echo 'を食べます' . PHP_EOL;

