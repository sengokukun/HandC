<?php

session_start();

$add_header="From:info@handcfilms.com\r\n";
$add_header	.= "Reply-to: info@handcfilms.com\r\n";
$add_header	.= "X-Mailer: PHP/". phpversion();
$opt = '-f'.'info@handcfilms.com';

$message =<<<HTML

{$_SESSION['name']}様

H&C Filmsにお問い合わせいただきありがとうございます。
お問い合わせ内容の確認です。

お名前
{$_SESSION['name']}

メールアドレス
{$_SESSION['e_mail']}

お問い合わせ内容
{$_SESSION['content']}


内容確認後、担当者より折り返しご連絡をさせて頂きます。
今しばらくお待ちください。

H&C Films
e-mail:handcfilm@gmail.com
web site: handcfilms.com

HTML;

mb_language("ja");

mb_internal_encoding("UTF-8");

mb_send_mail($_SESSION['e_mail'],"【お問い合わせ】確認メール",$message,$add_header,$opt);

mb_send_mail('handcfilm@gmail.com',"お問い合わせがありました",$message,$add_header,$opt);

session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=1,initial-scale=1,maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="H&amp;C Filmsは都内にて活動するディレクターチームです。MV,Live,イベントなど、映像と写真を中心にクリエイティブコンテンツの制作をします。">
  <meta name="keywords" content="H&amp;C Films,映像,写真,デザイン,H&amp;C,Contact">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="icon" href="/img/favicon.ico" type="image/vnd.microsoft.icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="/js/min/jquery-3.1.1.min.js"></script> -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/ie8/html5shiv.min.js"></script>
  <script type="text/javascript" src="js/ie8/selectivizr-min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <![endif]-->
  <!--[if gte IE 9]><!-->
  <title>H&amp;C Films / contact</title>
  <meta property="og:title" content="H&amp;C Films">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://handcfilms.com/">
  <meta property="og:image" content="https://handcfilms.com/img/card.png">
  <meta property="og:site_name" content="H&amp;C Films">
  <meta property="og:description" content="H&amp;C Filmsは都内にて活動するディレクターチームです。MV,Live,イベントなど、映像と写真を中心にクリエイティブコンテンツの制作をします。">
  <meta property="og:locale" content="ja_JP">
  <meta property="fb:app_id" content="307205603034088">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@HandCFilms">

</head>

<body>
  <div class="Wrapper">
    <div class="Containr">
      <div class="Thanks">
        <h1 class="Thanks__Title">お問い合わせいただき、<br class="sp-br">ありがとうございました。</h1>
        <p class="Thanks__Description">ただいま、お問い合わせの確認メールをご登録のメールアドレスにお送り致しました。</p>
        <p class="Thanks__Description">万が一、ご確認メールが届かない場合は、お手数ですが下記のメールアドレスよりお問い合わせください。</p>
        <p class="Thanks__Mail mT50 mB50">handcfilm@gmail.com</p>
        <span class="Thanks__Info">※万が一お手元に届かない場合は、迷惑メールフォルダに入ってる場合がございます。念のため迷惑メールフォルダもご確認ください</span>
        <a href="/" class="mA lH40 Button Button--spLong">ホームへ戻る</a>
      </div>
    </div>
  </div>
</body>
</html>
