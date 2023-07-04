<?php 

$num1 = '';
$num2 = '';
$sum = '';
$operator = '';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $sum = $num1 + $num2;
        echo $num1 . '+' . $num2 . '=' . $sum; 
        break;
    case 'subtraction':
        $sum = $num1 - $num2;
        echo $num1 . '-' . $num2 . '=' . $sum; 
        break;
    case 'multiplication':
        $sum = $num1 * $num2;
        echo $num1 . '*' . $num2 . '=' . $sum; 
        break;
    case 'division':
        $sum = $num1 / $num2;
        echo $num1 . '/' . $num2 . '=' . $sum; 
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
}

