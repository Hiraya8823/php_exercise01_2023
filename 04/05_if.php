<?php 

echo '$numの値を入力してください:';
$num = trim(fgets(STDIN));

$flg = true;
for ($i=2; $i<$num ; $i++) {  
    if ($num%$i == 0) {
        $flg = false;
        break;
    }
}

if ($flg) {
    echo $num . '素数です';
}else {
    echo $num . '素数ではありません。';
}
