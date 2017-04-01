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
    playerVars:{
      'loop': '1',
      'rel': '0',
      'playlist': 'xvE7ztEbDjU',
      'showinfo': '0',
      'controls': '0',
      'modestbranding':'0',
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
function onPlayerStateChange(event) {
}

$(function() {
  // var h = $(window).height();

  $('.top-hero').css('display','none');
  $('.loading ,.loading__gif').css('display','block');
});

$(window).load(function () {
  $('.loading').delay(2000).fadeOut(700);
  $('.loading__gif').delay(2000).fadeOut(300);
  $('.top-hero').css('display', 'block');
});

$(function(){
  setTimeout('stopload()',40000);
});

function stopload(){
  $('.top-hero').css('display','block');
  $('.loading').delay(2000).fadeOut(700);
  $('.loading__gif').delay(2000).fadeOut(300);
}

$(function(){
  $('.sp-menu--open').click(function(){
    $('.sp-header .contents').fadeIn();
    $(this).hide();
    $('.sp-menu--close').show();
  });
  $('.sp-menu--close').click(function(){
    $('.sp-header .contents').fadeOut();
    $(this).hide();
    $('.sp-menu--open').show();
  });
});
