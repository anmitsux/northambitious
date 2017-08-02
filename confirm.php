<?php
$name = $email = $contactChoice = $contactBody = $kFName = $kLName = $fFName = $fLName = $sex = $age = $zipcode = $tel="";
$count=0;
$errorli="";

if (empty($_POST["email"])) {
  $errorli .= '<li>メールアドレスが未入力です。</li>';
  $count++;
} else {
  $email = $_POST["email"];
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
  $contactChoice = $_POST["CATE_ID"];
}
if (empty($_POST["INQ_CONTENT"])) {
  $errorli .= '<li>お問い合わせ内容が未入力です。</li>';
  $count++;
}else{
  $contactBody = $_POST["INQ_CONTENT"];
}
if (empty($_POST["EU_FNAME"])) {
  $errorli .= '<li>姓が入力されてません。</li>';
  $count++;
}else{
  $kFName = $_POST["EU_FNAME"];
}
if (empty($_POST["EU_LNAME"])) {
  $errorli .= '<li>名が入力されてません。</li>';
  $count++;
}else{
  $kLName = $_POST["EU_LNAME"];
}
if (empty($_POST["EU_KFNAME"])) {
  $errorli .= '<li>セイが入力されてません。</li>';
  $count++;
}else{
  $fFName = $_POST["EU_KFNAME"];
}
if (empty($_POST["EU_KLNAME"])) {
  $errorli .= '<li>メイが入力されてません。</li>';
  $count++;
}else{
  $fLName = $_POST["EU_KLNAME"];
}
if (empty($_POST["EU_TEL1"])) {
  $errorli .= '<li>電話番号が入力されてません。</li>';
  $count++;
}else{
  $tel.=$_POST["EU_TEL1"].'-';
}
if (empty($_POST["EU_TEL2"])) {
  $errorli .= '<li>電話番号が入力されてません。</li>';
  $count++;
}else{
  $tel.=$_POST["EU_TEL2"].'-';
}
if (empty($_POST["EU_TEL3"])) {
  $errorli .= '<li>電話番号が入力されてません。</li>';
  $count++;
}else{
  $tel.=$_POST["EU_TEL3"];
}

if (empty($_POST["EU_SEX"])) {
  $sex = "";
} else {
  $sex = $_POST["EU_SEX"];
}
if (empty($_POST["age"])) {
  $age = "";
} else {
  $age = $_POST["age"];
}
if (empty($_POST["EU_ZIP1"])) {
  $zipcode .= "";
} else {
  $zipcode .= $_POST["EU_ZIP1"];
}
if (empty($_POST["EU_ZIP2"])) {
  $zipcode .= "";
} else {
  $zipcode .= $_POST["EU_ZIP2"];
}

?>
<?php if($count>0){ ?>
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
<?php }else{ ?>
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
        <li class="is-checked"><em>入力</em></li>
        <li class="is-current"><em>確認</em></li>
        <li><em>完了</em></li>
        <!-- /form__steps --></ol>

        <p class="c-text stepLead">ご入力いただいた内容にお間違いがないかご確認のうえ、「この内容で送信する」ボタンを押してください。</p>

        <div class="c-form">

        <form name="form1" method="post" action="sendmail.php">
        <div class="c-form__container">

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">お問い合わせ項目 <span class="c-form__required">必須</span></dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $contactChoice;?></p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">お問い合わせ内容 <span class="c-form__required">必須</span></dt>
        <dd class="c-form__containerBody">
        <p class="c-text">
        <?php echo $contactBody;?>
        </p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">お名前 (漢字) <span class="c-form__required">必須</span></dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $kFName.' '.$kLName?></p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">フリガナ (全角カナ) <span class="c-form__required">必須</span></dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $fFName.' '.$fLName?></p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">メールアドレス <br>(半角英数字)<span class="c-form__required">必須</span></dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $email;?></p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">性別</dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $sex;?></p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">年齢</dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $age;?></p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">郵便番号<br>(半角数字)</dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $zipcode;?></p>
        </dd>
        </dl>

        <dl class="c-form__containerRow">
        <dt class="c-form__containerTitle">電話番号<br>(半角数字)<span class="c-form__required">必須</span></dt>
        <dd class="c-form__containerBody">
        <p class="c-text"><?php echo $tel;?></p>
        </dd>
        </dl>
        <!-- /form__container --></div>

        <div class="c-button c-button--group c-button--reverse c-button--L clearfix">
        <span class="c-button--emphasis"><button type="submit" class="c-button__act">この内容で送信する</button></span>
        <a href="javascript:history.back();" class="c-button__act c-button__act--flat">入力画面に戻る</a>
        </div>

        <input type="hidden" name="CATE_ID" value="<?php echo $contactChoice;?>">
        <input type="hidden" name="INQ_CONTENT" value="<?php echo $contactBody;?>">
        <input type="hidden" name="EU_FNAME" value="<?php echo $kFName;?>">
        <input type="hidden" name="EU_LNAME" value="<?php echo $kLName;?>">
        <input type="hidden" name="EU_KFNAME" value="<?php echo $fFName;?>">
        <input type="hidden" name="EU_KLNAME" value="<?php echo $fLName;?>">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="EU_TEL1" value=<?php echo '"'.$_POST["EU_TEL1"].'"';?>>
        <input type="hidden" name="EU_TEL2" value=<?php echo '"'.$_POST["EU_TEL2"].'"';?>>
        <input type="hidden" name="EU_TEL3" value=<?php echo '"'.$_POST["EU_TEL3"].'"';?>>
        <input type="hidden" name="EU_ZIP1" value=<?php echo '"'.$_POST["EU_ZIP1"].'"';?>>
        <input type="hidden" name="EU_ZIP2" value=<?php echo '"'.$_POST["EU_ZIP2"].'"';?>>
        <input type="hidden" name="age" value="<?php echo $age;?>">
        <input type="hidden" name="EU_SEX" value="<?php echo $sex;?>">

        <!--<input type="hidden" name="birth_y" value="">-->
        <!--<input type="hidden" name="birth_m" value="">-->
        <!--<input type="hidden" name="birth_d" value="">-->
        </form>
        <!-- /form --></div>


        <!-- /baseSection --></div>
</body>
</html>
<?php } ?>
<?php exit;?>
