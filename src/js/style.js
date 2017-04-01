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
