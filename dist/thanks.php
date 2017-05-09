<?php
//以下ユーザー確認メール
//info@example.comを、あなたのメールアドレスにすることでこのメールフォームをそのまま使えます。
session_start();//ページ移動したら再びsession_start

$add_header="From:a15dc095@dhw.ac.jp\r\n";
$add_header	.= "Reply-to: a15dc095@dhw.ac.jp\r\n";
$add_header	.= "X-Mailer: PHP/". phpversion();
$opt = '-f'.'a15dc095@dhw.ac.jp'; //-fって何か意味あったんだけど忘れました　-fすると迷惑メールになりにくいとか、そんなことだったと思う。

//以下ヒアドキュメント<<<●●　HTMLでも、文字列でも、何いれてもOK●●;
//ヒアドキュメントは、メール送信とかの定型文を書いたりするとき、あとはSQLを書くときも使うかな。
//ヒアドキュメント内ではPHPのプログラムは一切かけない。変数だけ。変数は{}で囲ってあげること
//メールの本文をここでひとまとめに。
$message =<<<HTML
お問い合わせ内容の確認です。

お名前
{$_SESSION['name']}

メールアドレス
{$_SESSION['e_mail']}

お問い合わせ内容
{$_SESSION['comment']}

内容確認後、担当者より折り返しご連絡をさせて頂きます。
今しばらくお待ちください。

HTML;

// カレントの言語を日本語に設定する
mb_language("ja");
// 内部文字エンコードを設定する　このエンコード指定は大昔の携帯だとShift-jisにしないとだめだったとか。
// 今はUTF-8にしておけばだいたいOKだから、楽な時代になったもんだよ。
mb_internal_encoding("UTF-8");

mb_send_mail($_SESSION['e_mail'],"【お問い合わせ】確認メール",$message,$add_header,$opt);
//mb_send_mailは5つの設定項目がある
//mb_send_mail(送信先メールアドレス,"メールのタイトル","メール本文","メールのヘッダーFromとかリプライとか","送信エラーを送るメールアドレス");
//5番目の情報は第5引数と呼ばれるものでして、これがないと迷惑メール扱いになることも。



//マスター管理者にも同じメールを送りつける！！
mb_send_mail('a15dc095@dhw.ac.jp',"お問い合わせがありました",$message,$add_header,$opt);

session_destroy();  // セッションを破棄
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=1,initial-scale=1,maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="テスト">
  <meta name="keywords" content="HC">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="/js/min/jquery-3.1.1.min.js"></script> -->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/ie8/html5shiv.min.js"></script>
  <script type="text/javascript" src="js/ie8/selectivizr-min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <![endif]-->
  <!--[if gte IE 9]><!-->
  <title>H&amp;C / contact</title>

</head>

<body>
  <div class="Thanks">
    <p class="Thanks__Title">送信完了しました</p>
    <p class="Thanks__Description">お問い合わせありがとうございました。<br>内容を確認のうえ、回答させて頂きます。<br>しばらくお待ちください。</p>
    <a href="input.php" class="mA Button Button--spLong">お問い合わせに戻る</a>
  </div>
</body>
</html>
