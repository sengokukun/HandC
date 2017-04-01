//jquery
var windowW = $(window).width();//画面の横幅を取得
//tgglemenu
$(function(){
  var menu = $('.master-navi'),
  triggers = $('.toggle-lines'),
  toggleBtn = $('.header-toggle'),
  body = $(document.body),
  layer = $('.layer'),
  menuWidth = menu.outerWidth();

  toggleBtn.on('click', function(){
  body.toggleClass('open');
    if(body.hasClass('open')){
      $(".layer").show();
      body.animate({'right' : menuWidth }, 300);
      menu.animate({'right' : 0 }, 300);
      $(triggers).addClass('active');
    } else {
      $(".layer").hide();
      menu.animate({'right' : -menuWidth }, 300);
      body.animate({'right' : 0 }, 300);
      $(triggers).removeClass('active');
    }
  });
  // .layer クリックしてメニューを閉じる
  layer.on('click', function(){
    menu.animate({'right' : -menuWidth }, 300);
    body.animate({'right' : 0 }, 300).removeClass('open');
    $(triggers).removeClass('active');
    layer.hide();
  });

  //harmony
  if( windowW > 481 ){
    $('.hero').harmony({
      color: ["#0086a2"],
      brush: 'ribbon'
    });
  }
});



//snsボタン
if(window.addEventListener) {
	window.addEventListener( "load" , shareButtonReadSyncer, false );
}else{
	window.attachEvent( "onload", shareButtonReadSyncer );
}

function shareButtonReadSyncer(){

//Twitter
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));

//Facebook
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

}

//TweenMax

//ピョンピョン
if(!navigator.userAgent.match(/(iPhone|android)/)){

  (function () {
      var dth, jhg, speed, jupmText;
      dth = 30;
      jhg = 40;
      speed = 0.5;
      jumpText = '.logo-wrap__text';
      $(jumpText).mouseenter(function () {
          var tl;
          tl = new TimelineLite();
          return tl.to(this, 0.2 * speed, {
              ease: Sine.easeOut,
              scaleY: 0.6,
              scaleX: 1.2,
              y: dth
          }).to(this, 0.2 * speed, {
              ease: Sine.easeOut,
              scaleY: 1,
              scaleX: 1
          }).to(this, 0.4 * speed, {
              ease: Sine.easeOut,
              y: -jhg
          }, '-=0.2').to(this, 0.4 * speed, {
              ease: Sine.easeIn,
              y: 0
          }).to(this, 0.2 * speed, {
              ease: Sine.easeOut,
              scaleY: 0.6,
              scaleX: 1.2,
              y: dth
          }).to(this, 0.2 * speed, {
              ease: Sine.easeOut,
              scaleY: 1,
              scaleX: 1,
              y: 0
          });
      });
  }.call(this));

  (function(){
    var d = 30;
    var jh = 40;
    var sf = 0.5;
    $(jumpText).mouseenter(function(){
      var tl;
      tl = new TimelineLite();
      return tl.to(this ,0.2 * sf,{
        ease: Sine.easeOut,
        scaleY: 0.6,
        scaleX: 1.2,
        y: d
      });
    });
  })
}

//before after

$(function(){

  var $dragMe			    = $(".dragme");
  var $beforeAfter		= $("#before-after");
  var $viewAfter		  = $(".view--after");

  Draggable.create($dragMe, {
	  type:"left",
	  bounds: $beforeAfter,
	  onDrag:updateImages
  });

  function updateImages(){
	  TweenLite.set($viewAfter, {width: $dragMe.css("left") });		//or this.x if only dragging
  }

  //Intro Animation
  animateTo(350);
  if( windowW < 481 ){
    animateTo(180);
  }

  function animateTo(_left){
	  TweenLite.to( $dragMe, 1, {left: _left, onUpdate: updateImages });
  }

  //V2 Click added
  $beforeAfter.on("click", function(event){
	  var eventLeft = event.clientX - $beforeAfter.offset().left;
	  animateTo(eventLeft);
  });

});
