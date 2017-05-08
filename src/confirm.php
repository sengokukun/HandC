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

echo '<pre>';//HTMLのpreタグを使うと、配列が見やすくなる
print_r($_SESSION);//print_rとは、配列を出力する関数
echo '</pre>';



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
  <script src="/js/min/jquery.inview.min.js"></script>
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
        <header class="MasterHead">
          <h1 class="MasterHead__Logo"><a href="index.html"><img src="img/logo.svg" alt="hc"></a></h1>
          <div class="PcHeader">
            <nav class="MasterHead__Navigation">
              <ul class="MasterHead__Block">
                <li class="MasterHead__List">
                  <a href="all.html" class="MasterHead__Link">ALL</a>
                </li>
                <li class="MasterHead__List">
                  <a href="video.html" class="MasterHead__Link">VIDEO</a>
                </li>
                <li class="MasterHead__List">
                  <a href="photo.html" class="MasterHead__Link">PHOTO</a>
                </li>
                <li class="MasterHead__List">
                  <a href="design.html" class="MasterHead__Link">DESIGN</a>
                </li>
                <li class="MasterHead__List MasterHead__List--description">
                  <a href="about.html" class="MasterHead__Link">ABOUT</a>
                </li>
                <li class="MasterHead__List">
                  <a href="contact.html" class="MasterHead__Link current">CONTACT</a>
                </li>
                <li class="MasterHead__List MasterHead__List--right">
                  <a href="#" class="MasterHead__Link MasterHead__Link--tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li class="MasterHead__List MasterHead__List">
                  <a href="#" class="MasterHead__Link MasterHead__Link--fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <span class="underBar"></span>
            </ul>
            </nav>
          </div>
          <div class="SpHeader">
            <div class="SpHeader__Icons">
              <!-- <h2 class="MasterHead__Logo"><a href="#"><img src="img/logo.svg" alt="hc"></a></h2> -->
              <a class="Toggle">
                <span class="Toggle__Lines">
                  <span class="Toggle__Line"></span>
                <span class="Toggle__Line"></span>
                <span class="Toggle__Line"></span>
                </span>
              </a>
            </div>
            <nav class="MasterHead__Navigation">
              <ul class="MasterHead__Block">
                <li class="MasterHead__List">
                  <a href="about.html" class="MasterHead__Link">ABOUT</a>
                </li>
                <li class="MasterHead__List">
                  <a href="all.html" class="MasterHead__Link">WORKS</a>
                  <ul class="Workskinds">
                    <li class="Workskinds__List"><a href="all.html" class="Workskinds__Link">ALL</a></li>
                    <li class="Workskinds__List"><a href="video.html" class="Workskinds__Link">VIDEO</a></li>
                    <li class="Workskinds__List"><a href="photo.html" class="Workskinds__Link">PHOTO</a></li>
                    <li class="Workskinds__List"><a href="design.html" class="Workskinds__Link">DESIGN</a></li>
                  </ul>
                </li>
                <li class="MasterHead__List">
                  <a href="contact.html" class="MasterHead__Link">CONTACT<br></a>
                </li>
              </ul>
              <ul class="sp-sns-menu">
                <li class="sp-sns-menu__list"><a href="#" class="sp-sns-menu__link sp-sns-menu__link--black"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="sp-sns-menu__list"><a href="#" class="sp-sns-menu__link sp-sns-menu__link--black"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              </ul>

            </nav>
          </div>
        </header>

        <div class="ContactWrapper">
          <div class="Containr">
            <spna itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="Bread">
              <a href="#" itemprop="url" class="Bread__List">
                <span itemprop="title" class="Bread__Link">HOME</span>
              </a>
              <a href="#" itemprop="url" class="Bread__List">
                <span itemprop="title" class="Bread__Link">CONTACT</span>
              </a>
            </spna>
            <main class="Contact">
              <h2 class="CapTitle">CONTACT</h2>
              <p class="Contact__Description">映像制作や撮影、デザインなどのご依頼、ご相談など<br class="sp-br">気軽にお問い合わせください。</p>
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
							 <input type="button" value="内容を修正する" onclick="history.back(-1)">
		           <button type="submit" class="Button Button--contact Button--spLong">送信</button>
              </form>
              <!-- <a href="#" class="Button Button--contact Button--spLong">確認画面へ</a> -->
            </main>
          </div>
        </div>

        <footer class="MasterFoot">
          <div class="Container">
            <ul class="sp-sns-menu">
              <li class="sp-sns-menu__list"><a href="#" class="sp-sns-menu__link sp-sns-menu__link--white"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="sp-sns-menu__list"><a href="#" class="sp-sns-menu__link sp-sns-menu__link--white"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
            <p class="MasterFoot__Copyright"><small>Copyright&copy;2017 H&amp;C FILMS All Rights Reserved</small></p>
          </div>
        </footer>
      </div>
    </div>

  </div>
</body>
<script src="js/style.js"></script>

</html>
