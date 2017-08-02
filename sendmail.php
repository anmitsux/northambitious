<?php
//文字コード設定
header("Content-type: text/plain; charset=UTF-8");
mb_language("Japanese");
mb_internal_encoding("UTF-8");


//自動返信設定
$autoreplyTo=$_POST["email"];
$autoreplyHeader= "From: ". "yamaolnana@gmail.com";
$autoreplySubject="［自動送信］お問い合わせ内容の確認｜ノースアンビシャス";
$autoreplyBody = "この度はお問い合わせいただきまして、誠にありがとうございます。\nお問い合わせつきましては担当者より、あらためてご連絡させていただきます\n\n";
$autoreplyBody .= "以下お問い合わせ内容となります。\n";

$autoreplyBody .= "【お問い合わせ項目】" . $_POST["CATE_ID"] ."\n";
$autoreplyBody .= "【お問い合わせ内容】" . $_POST["INQ_CONTENT"] ."\n";
$autoreplyBody .= "【お名前（漢字）】" . $_POST["EU_FNAME"] .' '.$_POST["EU_LNAME"]."\n";
$autoreplyBody .= "【お名前（フリガナ）】" . $_POST["EU_KFNAME"] .' '.$_POST["EU_KLNAME"]."\n";
$autoreplyBody .= "【メールアドレス】" . $_POST["email"] ."\n";
$autoreplyBody .= "【性別】" . $_POST["EU_SEX"] ."\n";
$autoreplyBody .= "【年齢】" . $_POST["age"] ."\n";
$autoreplyBody .= "【郵便番号】" . $_POST["EU_ZIP1"] .'-'.$_POST["EU_ZIP2"]."\n";
$autoreplyBody .= "【電話番号】" . $_POST["EU_TEL1"] .'-'.$_POST["EU_TEL2"].'-'.$_POST["EU_TEL3"]."\n\n";
$autoreplyBody .= "もし追加のご質問などがございましたら、次の宛先まで、ご一報お願い致します。\n\n";
$autoreplyBody .= "山家光雅　m.yamaga@miyabi-y.net\n\nそれでは今しばらくお待ちください。\n\n";
$autoreplyBody .= "--------------------------------------\n";
$autoreplyBody .= "株式会社ノースアンビシャス\n";
$autoreplyBody .= "住所\n〒001-0020\n北海道札幌市北区北20条西5丁目2-50 クロスポイント8F\nTel 011-600-2734（代表）　Fax 011-351-1815\n";
$autoreplyBody .= "URL https://north-ambitious.co.jp/\n";
$autoreplyBody .= "--------------------------------------";

//*環境設定*************************************
//件名
$subject = "【お問い合わせ通知】｜ノースアンビシャス";
//管理人メールアドレス(宛先)
$to = "yamaolnana@gmail.com";

//**********************************************

//**POSTデータ受け取り**************************
//差出人メールアドレス格納
$header = "From: ". $_POST["email"];

//本文格納
$body = "お問い合わせ項目：" . $_POST["CATE_ID"] ."\n";
$body .= "お問い合わせ内容：" . $_POST["INQ_CONTENT"] ."\n";
$body .= "お名前（漢字）：" . $_POST["EU_FNAME"] .' '.$_POST["EU_LNAME"]."\n";
$body .= "お名前（フリガナ）：" . $_POST["EU_KFNAME"] .' '.$_POST["EU_KLNAME"]."\n";
$body .= "メールアドレス：" . $_POST["email"] ."\n";
$body .= "性別：" . $_POST["EU_SEX"] ."\n";
$body .= "年齢：" . $_POST["age"] ."\n";
$body .= "郵便番号：" . $_POST["EU_ZIP1"] .'-'.$_POST["EU_ZIP2"]."\n";
$body .= "電話番号：" . $_POST["EU_TEL1"] .'-'.$_POST["EU_TEL2"].'-'.$_POST["EU_TEL3"]."\n";




//************************************************


mb_send_mail($to,$subject,$body,$header);
mb_send_mail($autoreplyTo,$autoreplySubject,$autoreplyBody,$autoreplyHeader);
header("Location: /northambitious/complete.html");
exit;
?>
