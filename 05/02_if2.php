<?php 

$poket_money = 1000;
$fund_raising = 101;

echo "あなたの所持金は{$poket_money}です。" . PHP_EOL;

do {
    echo "101円募金しました" . PHP_EOL;
    $poket_money -= $fund_raising;
    echo "残りの残高は{$poket_money}です。" . PHP_EOL;

} while ($poket_money >= $fund_raising);

if($poket_money < $fund_raising){
    echo 'あなたはこれ以上募金できません。'. PHP_EOL;
}
