<?php
//文字コード設定
header("Content-type: text/plain; charset=UTF-8");
mb_language("Japanese");
mb_internal_encoding("UTF-8");


//*環境設定*************************************
//件名
$subject = "【お問い合わせ】｜ノースアンビシャス";
//管理人メールアドレス(宛先)
$to = "abcdabcdec1@gmail.com";
//**********************************************

//**POSTデータ受け取り**************************
//差出人メールアドレス格納
$header = "From: ". $_POST["email"];

//本文格納
$body = "お問い合わせ項目：" . $_POST["CATE_ID"] ."\n";
$body = "お問い合わせ内容：" . $_POST["INQ_CONTENT"] ."\n";
$body = "お名前（漢字）：" . $_POST["EU_FNAME"] .' '.$_POST["EU_LNAME"]."\n";
$body = "お名前（フリガナ）：" . $_POST["EU_KFNAME"] .' '.$_POST["EU_KLNAME"]."\n";
$body = "メールアドレス：" . $_POST["email"] ."\n";
$body = "性別：" . $_POST["EU_SEX"] ."\n";
$body = "年齢：" . $_POST["age"] ."\n";
$body = "郵便番号：" . $_POST["EU_ZIP1"] .'-'.$_POST["EU_ZIP2"]."\n";
$body = "電話番号：" . $_POST["EU_TEL1"] .'-'.$_POST["EU_TEL2"].'-'.$_POST["EU_TEL3"]."\n";




//************************************************


mb_send_mail($to,$subject,$body,$header);

?>
