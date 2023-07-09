<?php 
$date = '';
$week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = date('Y年m月d日');
    $week_number = date('w');

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
    <?php if($_SERVER['REQUEST_METHOD'] != 'POST'): ?> 
        <h3>本日の日付、曜日を確認しますか？</h3>
        <form action="" method="post">
            <input type="submit" value="はい">
        </form>
    <?php endif; ?>
    <?php if($date): ?>
        <h2>今日は、<?= $date . $week[$week_number] ?>曜日です</h2>
        <a href="">戻る</a>
    <?php endif; ?>
</body>
</html>
