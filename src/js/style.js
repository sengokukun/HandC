//top動画部分
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: 'xvE7ztEbDjU',
        wmode: 'transparent',
        loop: '1',
        playerVars: {
            'loop': '1',
            'rel': '0',
            'playlist': 'xvE7ztEbDjU',
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

//loading

$(function() {
    // var h = $(window).height();

    $('.TopHero').css('display', 'none');
    $('.Loading ,.Loading__Gif').css('display', 'block');
});

$(window).load(function() {
    $('.Loading').delay(1300).fadeOut(550);
    $('.Loading__Gif').delay(1000).fadeOut(300);
    $('.TopHero').css('display', 'block');
});

$(function() {
    setTimeout('stopload()', 40000);
});

function stopload() {
    $('.TopHero').css('display', 'block');
    $('.Loading').delay(1300).fadeOut(700);
    $('.Loading__Gif').delay(1300).fadeOut(300);
}

var windowW = $(window).width(); //画面の横幅を取得

//jquery

$(function() {
    var triggers = $('.Toggle__Lines'),
        toggleBtn = $('.Toggle'),
        body = $(document.body)
    toggleBtn.on('click', function() {
        body.toggleClass('open');
        if (body.hasClass('open')) {
            $(triggers).addClass('active');
            $('.SpHeader .MasterHead__Navigation').fadeIn(150);
            $('.Toggle__Line').addClass('bg_black');
        } else {
            $(triggers).removeClass('active');
            $('.SpHeader .MasterHead__Navigation').fadeOut(150);
            $('.Toggle__Line').removeClass('bg_black');
        }
    });
    if (windowW > 481) {
      $('.MasterHead__List--works').hover(function() {
          $('.PcWorkskinds').addClass('open');
      }, function() {
          $('.PcWorkskinds').removeClass('open');
      });
      $('.Members').on('inview', function() {
          $('.Modal').on('inview', function(event, isInView) {
            $(this).stop().addClass('ModalSlide');
          });
      });
    }
});
