<?php 
$score = $_GET['score'];

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
    <?php if($score >= 60) : ?>
        <h1>合格です</h1>
    <?php else : ?>
        <h1>不合格です</h1>
    <?php endif; ?>
    <a href="03_form2.php">戻る</a>
</body>
</html>
