<?php
$name = $email = $contactChoice = $contactBody = $kFName = $kLName = $fFName = $fLName = $sex = $age = $zipcode = $tel;
$count=0;
$errorli="";

if (empty($_POST["email"])) {
  $errorli .= '<li>メールアドレスが未入力です。</li>';
  $count++;
} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorli .= "<li>入力されたメールアドレスが正しくありません。</li>";
    $count++;
  }
}

if (empty($_POST["CATE_ID"])) {
  $errorli .= '<li>お問い合わせ項目が選択されてません。</li>';
  $count++;
}else{
  $contactChoice = test_input($_POST["CATE_ID"]);
}
if (empty($_POST["INQ_CONTENT"])) {
  $errorli .= '<li>お問い合わせ内容が未入力です。</li>';
  $count++;
}else{
  $contactBody = test_input($_POST["INQ_CONTENT"]);
}
if (empty($_POST["EU_FNAME"])) {
  $errorli .= '<li>姓が入力されてません。</li>';
  $count++;
}else{
  $kFName = test_input($_POST["EU_FNAME"]);
}
if (empty($_POST["EU_LNAME"])) {
  $errorli .= '<li>名が入力されてません。</li>';
  $count++;
}else{
  $kLName = test_input($_POST["EU_LNAME"]);
}
if (empty($_POST["EU_KFNAME"])) {
  $errorli .= '<li>セイが入力されてません。</li>';
  $count++;
}else{
  $fFName = test_input($_POST["EU_KFNAME"]);
}
if (empty($_POST["EU_KLNAME"])) {
  $errorli .= '<li>メイが入力されてません。</li>';
  $count++;
}else{
  $fLName = test_input($_POST["EU_KLNAME"]);
}
if (empty($_POST["EU_TEL1"])) {
  $errorli .= '<li>電話番号が入力されてません。</li>';
  $count++;
}else{
  $tel.=test_input($_POST["EU_TEL1"]).'-';
}
if (empty($_POST["EU_TEL2"])) {
  $errorli .= '<li>電話番号が入力されてません。</li>';
  $count++;
}else{
  $tel.=test_input($_POST["EU_TEL2"]).'-';
}
if (empty($_POST["EU_TEL3"])) {
  $errorli .= '<li>電話番号が入力されてません。</li>';
  $count++;
}else{
  $tel.=test_input($_POST["EU_TEL3"]);
}

if (empty($_POST["EU_SEX"])) {
  $sex = "";
} else {
  $sex = test_input($_POST["EU_SEX"]);
}
if (empty($_POST["age"])) {
  $age = "";
} else {
  $age = test_input($_POST["age"]);
}
if (empty($_POST["EU_ZIP1"])) {
  $zipocode .= "";
} else {
  $zipcode .= test_input($_POST["EU_ZIP1"]);
}
if (empty($_POST["EU_ZIP2"])) {
  $zipocode .= "";
} else {
  $zipcode .= test_input($_POST["EU_ZIP2"]);
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>お問い合わせ お問い合わせフォーム｜North Ambitious</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/layout.css">
  <link rel="stylesheet" href="css/base.css">
</head>

<body>
  <div class="l-baseSection">

<ol class="c-form__steps">
<li><em>入力</em></li>
<li class="is-current"><em>エラー</em></li>
<!-- /form__steps --></ol>

<div class="errorLead">
<p class="c-text">恐れ入りますが、訂正をお願いいたします。以下の内容がエラーです。</p>

<div class="c-box c-box--emphasis">
<div class="c-box__inner">
<ul class="c-list">
<?php echo $errorli;?>
</ul>
<!-- /box__inner --></div>
<!-- /box --></div>

<p class="c-text">お問い合わせにお答えする際に必要となることがありますので、
<span class="c-form__required">必須</span>のついた項目は全て入力してくださいますようお願いいたします。</p>

<!-- /errorLead --></div>

<div class="c-button c-button--group c-button--L">
<a href="javascript:history.back();" class="c-button__act">入力画面に戻る</a>
<!-- /button --></div>

<!-- /baseSection --></div>
</body>
</html>
