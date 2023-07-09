<?php 

function check_temperature($body_temperature)
{
    // 37度未満の場合はtrue、37度以上の場合はfalse
    if ($body_temperature < 37) {
        return true;
    }else{
        return false;
    }
}

function create_message($body_temperature)
{
    // check_temperature関数を呼び出す
    // check_temperature関数の結果によって文字列を変更し関数の戻り値として設定
    if (check_temperature($body_temperature) === true) {
        return 'あなたは平熱なので、問題なく参加できます';
    }else{
        return 'あなたは発熱なので、参加できません';
    }
}
?>
