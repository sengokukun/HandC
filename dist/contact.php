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
  <link rel="icon" href="/img/favicon.ico" type="image/vnd.microsoft.icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="/js/min/jquery-3.1.1.min.js"></script> -->
  <script src="js/min/validation.js"></script>
  <script src="js/min/reserve.js"></script>
  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/ie8/html5shiv.min.js"></script>
  <script type="text/javascript" src="js/ie8/selectivizr-min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <![endif]-->
  <!--[if gte IE 9]><!-->
  <script type="text/javascript">
  $(document).ready(function(){
  $("#contact-form").validate({
  rules : {
  name:{required: true}
  },
  errorClass: "myError"
  });
  });
  </script>
  <title>H&amp;C / contact</title>

</head>

<body>
  <div class="Wrapper">
    <div class="Loading">
      <div class="Loading__Gif">
        <img src="/img/hc_loading_short.gif" alt="Loading..." width="300" height="300">
      </div>
    </div>
    <div class="Gloval">
      <div class="Sub">
        <header class="MasterHead">
          <h1 class="MasterHead__Logo"><a href="/"><img src="img/logo.svg" alt="hc"></a></h1>
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
                  <a href="input.php" class="MasterHead__Link current">CONTACT</a>
                </li>
                <li class="MasterHead__List MasterHead__List--right">
                  <a href="https://twitter.com/HandCFilms" class="MasterHead__Link MasterHead__Link--tw" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li class="MasterHead__List MasterHead__List">
                  <a href="https://www.facebook.com/hcfilms.official/" class="MasterHead__Link MasterHead__Link--fb" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
              </ul>
              <span class="underBar"></span>
            </nav>
          </div>
          <div class="SpHeader">
            <div class="SpHeader__Icons">
              <a class="Toggle">
                <span class="Toggle__Lines">
                  <span class="Toggle__Line"></span>
                <span class="Toggle__Line"></span>
                <span class="Toggle__Line"></span>
                </span>
              </a>
            </div>
            <nav class="MasterHead__Navigation">
              <ul class="MasterHead__Block sp-MasterHead__Block">
                <li class="MasterHead__List">
                  <a href="all.html" class="MasterHead__Link">ALL</a>
                </li>
                <li class="MasterHead__List">
                  <a href="video.html" class="MasterHead__Link">VIDEO</a>
                </li>
                <li class="MasterHead__List">
                  <a href="photo.html" class="MasterHead__Link">PHOTO</a>
                </li>
                <li class="MasterHead__List mB70">
                  <a href="design.html" class="MasterHead__Link">DISIGN</a>
                </li>
                <li class="MasterHead__List">
                  <a href="about.html" class="MasterHead__Link">ABOUT</a>
                </li>
                <li class="MasterHead__List mB70">
                  <a href="input.php" class="MasterHead__Link">CONTACT<br></a>
                </li>
                <li class="bdBn MasterHead__List">
                  <ul class="sp-sns-menu">
                    <li class="sp-sns-menu__list"><a href="https://twitter.com/HandCFilms" class="sp-sns-menu__link sp-sns-menu__link--white" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="sp-sns-menu__list"><a href="https://www.facebook.com/hcfilms.official/" class="sp-sns-menu__link sp-sns-menu__link--white" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  </ul>
                </li>
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
              <form action="confirm.php" method="post" class="Forms" id="contact-form">
                <dl class="Forms__List">
                  <dt class="Forms__Name">お名前</dt>
                  <dd class="Forms__Data">
                    <input type="text" class="required Forms__Input" name="name" value="" placeholder="例）伊藤 聖也">
                  </dd>
                </dl>
                <dl class="Forms__List">
                  <dt class="Forms__Name">メールアドレス</dt>
                  <dd class="Forms__Data">
                    <p><input type="text" class="required email Forms__Input" name="e_mail" value="" placeholder="例）info@HandC.com"></p>
                  </dd>
                </dl>
                <dl class="Forms__List">
                  <dt class="Forms__Name">お問い合わせ内容</dt>
                  <dd class="Forms__Data">
                    <textarea cols="50" rows="7" class="required Forms__Textarea" name="content" placeholder="ご自由にご記入ください"></textarea>
                  </dd>
                </dl>
		           <button type="submit" class="mA Button Button--spLong">確認画面へ</button>
              </form>
            </main>
          </div>
        </div>
      </div>
      <footer class="MasterFoot">
        <div class="Container">
          <ul class="sp-sns-menu jcC">
            <li class="sp-sns-menu__list"><a href="https://twitter.com/HandCFilms" class="sp-sns-menu__link sp-sns-menu__link--black" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="sp-sns-menu__list"><a href="https://www.facebook.com/hcfilms.official/" class="sp-sns-menu__link sp-sns-menu__link--black" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          </ul>
          <p class="MasterFoot__Copyright"><small>Copyright&copy;2017 H&amp;C FILMS All Rights Reserved</small></p>
        </div>
      </footer>
    </div>
  </div>
</body>
<script src="js/style.js"></script>

</html>
