<?php 

$num1 = '';
$num2 = '';
$num3 = '';
$sum = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if (!empty($num1 && $num2 && $num3) && is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
        $sum = $num1 + $num2 + $num3;
    }else {
        $err_msg = '全てに数字を入力してください';
    }
}


?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>数字を入力してください</h1>
        <?php if(!empty($err_msg)):?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="">1つ目の数字</label><br>
            <input type="number" name="num1" value="<?= $num1 ?>"><br>
            <label for="">2つ目の数字</label><br>
            <input type="number" name="num2" value="<?= $num2 ?>"><br>
            <label for="">3つ目の数字</label><br>
            <input type="number" name="num3" value="<?= $num3 ?>"><br>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if(!empty($sum)): ?>
        <p>合計値は<?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?>です</p>
    <?php endif; ?>
</body>
</html>
