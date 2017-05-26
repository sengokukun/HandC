//top動画部分
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    videoId: 'xeJ7Mp4Nrtg',
    wmode: 'transparent',
    loop: '1',
    playerVars: {
      'loop': '1',
      'rel': '0',
      'playlist': 'xeJ7Mp4Nrtg',
      'showinfo': '0',
      'controls': '0',
      'modestbranding': '0',
      'autoplay': '1',
      'disablekb': '1'
    },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady(event) {
  event.target.mute();
}

function onPlayerStateChange(event) {}

//top動画部分ここまで

//loading

$(function() {
  // var h = $(window).height();

  $('.TopHero').css('display', 'none');
  $('.Loading ,.Loading__Gif').css('display', 'block');
});

$(window).on('load', function() {
  $('.Loading').delay(700).fadeOut(700);
  $('.Loading__Gif').delay(700).fadeOut(600);
  $('.TopHero').css('display', 'block');
});

$(function() {
  setTimeout('stopload()', 40000);
});

function stopload() {
  $('.TopHero').css('display', 'block');
  $('.Loading').delay(5000).fadeOut(700);
  $('.Loading__Gif').delay(5000).fadeOut(300);
}

//loadingここまで

var windowW = $(window).width(); //画面の横幅を取得

//jquery

$(function() {

  $(window).on('load', function(){
      $('html,body').animate({ scrollTop: 0 }, '1');
  });

  //spメニュー設定

  var state = false;
  var scrollpos;
  var triggers = $('.Toggle__Lines'),
    toggleBtn = $('.Toggle'),
    menu = $('.MasterHead__Navigation'),
    body = $(document.body),
    menuItem  = $('.sp-MasterHead__Block > .MasterHead__List')
  toggleBtn.on('click', function() {
    body.toggleClass('open');
    if (body.hasClass('open')) {
      $(triggers).addClass('active');
      $('.SpHeader .MasterHead__Navigation').fadeIn(150);
      $('.Toggle__Line').addClass('bg_white');
      TweenMax.to(menuItem, .5, {
        opacity: 1,
        delay: .2
      });
    } else {
      $(triggers).removeClass('active');
      $('.SpHeader .MasterHead__Navigation').fadeOut(150);
      $('.Toggle__Line').removeClass('bg_white');
      TweenMax.to(menuItem, 1, {
        opacity: 0
      });
    }

    if(state == false) {
      scrollpos = $(window).scrollTop();
      $('body').addClass('fixed').css({'top': -scrollpos});
      $(menu).addClass('open');
      state = true;
    } else {
      $('body').removeClass('fixed').css({'top': 0});
      window.scrollTo( 0 , scrollpos );
      $(menu).removeClass('open');
      state = false;
    }

  });

  //spメニュー設定ここまで

  //アバウトモーダル設定

  var Modal__about = function(){
    var tl = new TimelineMax(),
      tl2 = new TimelineMax(),
      tl3 = new TimelineMax(),
      tl4 = new TimelineMax(),
      tl5 = new TimelineMax(),
      bdL = $(this).find('.bdL'),
      bdB = $(this).find('.bdB'),
      bdR = $(this).find('.bdR'),
      bdT = $(this).find('.bdT'),
      FadeIn = $(this).find('.FadeIn')

    tl.to(bdL, .2, {
      height:"100%"
    }),
    tl2.to(bdB, .2, {
      width: "100%",
      delay: .2
    }),
    tl3.to(bdR, .2, {
      height: "100%",
      delay: .4
    }),
    tl4.to(bdT, .2, {
      width: "100%",
      delay: .6
    })
    tl5.to(FadeIn, .2, {
      opacity: 1,
      delay: .82
    })
  };

  $('.FadeIn__1').parent('.Modal').on('inview', Modal__about);
  $('.FadeIn__2').parent('.Modal').on('inview', Modal__about);
  $('.FadeIn__3').parent('.Modal').on('inview', Modal__about);

  //アバウトモーダル設定ここまで

  //メニューunderbar設定

  $(window).on("load", function() {
    if ("http://handcfilms.com/" == location.href) {
      console.log("おけ");
      $('.underBar').css({
        width: $('.current').outerWidth() - 44,
        left: $('.current').position().left + 22,
        display:"none"
      });

      $('.MasterHead__Link').mouseover(function() {
        $('.underBar')
          .stop()
          .animate({
            width: $(this).outerWidth() - 44,
            left: $(this).position().left + 22,
            opacity: 'show'
          }, 'fast');
      });

      $('.MasterHead__Link').mouseout(function() {
        $('.underBar')
          .stop()
          .animate({
            width: $('.current').outerWidth() - 44,
            left: $('.current').position().left + 22,
            opacity: 'hide'
          }, 'fast');
      });
    } else {
      $('.underBar, .underBar--top').css({
        width: $('.current').outerWidth() - 44,
        left: $('.current').position().left + 22
      });

      $('.MasterHead__Link').mouseover(function() {
        $('.underBar')
          .stop()
          .animate({
            width: $(this).outerWidth() - 44,
            left: $(this).position().left + 22
          }, 'fast');
      });

      $('.MasterHead__Link').mouseout(function() {
        $('.underBar')
          .stop()
          .animate({
            width: $('.current').outerWidth() - 44,
            left: $('.current').position().left + 22
          }, 'fast');
      });
    }
  });

  //メニューunderbar設定ここまで

});

//jQueryここまで

//works json
$(function() {
  var idName = $(".CapTitle").attr("id");
  var dataName = idName;
  var url = "./js/all.json";
  $.ajax({
    type: 'GET',
    url: url,
    dataType: 'json',
    data: {
      name: 'Video'
    },
    success: function(data) {

      var dataLengh = data.length;
      var $tag = $(".Works__Tag");
      var $title = $(".Works__Title");
      var $info = $(".Works__Infomation");
      for (var i = 0; i < dataLengh; i++) {
        $('.Works__Block').prepend('<article class="Works__Item ' + data[i].Id + '"><a href="works/' + data[i].Link + '.html" class="Works__Link"><p class="Works__Photo"><img src="/img/' + data[i].Img + '.jpg" alt=""><span class="Works__Tag">' + data[i].Id + '</span></p><div class="Works__Descriptions"><h2 class="Works__Title">' + data[i].Title + '</h2><p class="Works__Infomation">' + data[i].Description + '</p></div></a></article>');
        if (idName == "VIDEO") {
          $(".DESIGN, .PHOTO").remove();
        } else if (idName == "PHOTO") {
          $(".DESIGN, .VIDEO").remove();
        } else if (idName == "DESIGN") {
          $(".PHOTO, .VIDEO").remove();
        }
      }
    },
    error: function() {
      console.log("だめ");
    }
  });
});
