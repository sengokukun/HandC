<?php

if(!$_POST){
header('Location: ./thanks.php');
	}

session_start();
$_SESSION = $_POST;

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
	<link rel="icon" href="/img/favicon.ico" type="image/vnd.microsoft.icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
		<div class="Containr">
			<div class="Confirm Center">
				<form action="thanks.php" method="post" class="Forms">
					<dl class="Forms__List">
						<dt class="Forms__Name">お名前</dt>
						<dd class="Forms__Data Forms__Data--confirm pA10">
							<?php echo htmlspecialchars($_POST['name']);?>
						</dd>
					</dl>
					<dl class="Forms__List">
						<dt class="Forms__Name">メールアドレス</dt>
						<dd class="Forms__Data Forms__Data--confirm pA10">
							<?php echo htmlspecialchars($_POST['e_mail']);?>
						</dd>
					</dl>
					<dl class="Forms__List">
						<dt class="Forms__Name aLs mT10">お問い合わせ内容</dt>
						<dd class="Forms__Data Forms__Data--confirm pA10">
							<?php echo htmlspecialchars($_POST['content']);?>
						</dd>
					</dl>
					<div class="RowColumn">
						<input type="button" value="内容を修正する" onclick="history.back(-1)" class="Button Button--spLong lHn mR20">
						<button type="submit" class="Button Button--spLong spmT20">送信する</button>
					</div>
				</form>
			</div>
		</div>
  </div>
</body>
<script src="/js/style.js"></script>

</html>
