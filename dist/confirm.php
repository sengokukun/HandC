<?php
//mail.phpのPostをSessionに代入する。
//Postは次のページまでしか引き継ぐことが出来ません
//確認ページ、送信ページとページをまたぐ際はこのSessionを使うのが普通です。
//そのため、フォームの確認ページなどで一度Sessionに代入する必要があります。

//いきなり確認画面にアクセスがあれば不正アクセス。
//!$_POSTで　$_POSTがSetされているかをチェックし、セットされていなければリダイレクト
if(!$_POST){
header('Location: ./thanks.php');//	headerlocationはPHPのリダイレクト処理でよく使う。
	}

//Sessionを開始するときの決まり文句、これがないとSessionが開始できない
session_start();
$_SESSION = $_POST;

//無事Sessionに保存できているかチェックする

// echo '<pre>';//HTMLのpreタグを使うと、配列が見やすくなる
// print_r($_SESSION);//print_rとは、配列を出力する関数
// echo '</pre>';



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
  <div class="Wrapper">
    <div class="Gloval">
      <div class="Sub">
        <div class="ContactWrapper">
          <div class="Containr">
            <main class="Contact">
              <form action="thanks.php" method="post" class="Forms">
                <dl class="Forms__List">
                  <dt class="Forms__Name">お名前</dt>
                  <dd class="Forms__Data">
										<?php echo htmlspecialchars($_POST['name']);?>
                  </dd>
                </dl>
                <dl class="Forms__List">
                  <dt class="Forms__Name">メールアドレス</dt>
                  <dd class="Forms__Data">
										<?php echo htmlspecialchars($_POST['e_mail']);?>
                  </dd>
                </dl>
                <dl class="Forms__List">
                  <dt class="Forms__Name">お問い合わせ内容</dt>
                  <dd class="Forms__Data">
										<?php echo htmlspecialchars($_POST['content']);?>
                  </dd>
                </dl>
								<div class="RowColumn">
									<input type="button" value="内容を修正する" onclick="history.back(-1)" class="Button Button--spLong lHn mR20">
	 		           	<button type="submit" class="Button Button--spLong">送信する</button>
								</div>
              </form>
              <!-- <a href="#" class="Button Button--contact Button--spLong">確認画面へ</a> -->
            </main>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
<script src="js/style.js"></script>

</html>
