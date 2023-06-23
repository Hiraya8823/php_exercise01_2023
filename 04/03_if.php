<?php 

echo '$scoreの入力をして下さい:';
$score = trim(fgets(STDIN));


if ($score >= 60) {
    echo '合格です';
}elseif ($score <= 30) {
    echo '不合格です';
}else{
    echo '追試です';
}
