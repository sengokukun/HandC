function onYouTubeIframeAPIReady(){player=new YT.Player("player",{videoId:"xvE7ztEbDjU",wmode:"transparent",loop:"1",playerVars:{loop:"1",rel:"0",playlist:"xvE7ztEbDjU",showinfo:"0",controls:"0",modestbranding:"0",autoplay:"1",disablekb:"1"},events:{onReady:onPlayerReady,onStateChange:onPlayerStateChange}})}function onPlayerReady(e){e.target.mute()}function onPlayerStateChange(e){}function stopload(){$(".top-hero").css("display","block"),$(".loading").delay(2e3).fadeOut(700),$(".loading__gif").delay(2e3).fadeOut(300)}var tag=document.createElement("script");tag.src="https://www.youtube.com/iframe_api";var firstScriptTag=document.getElementsByTagName("script")[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);var player;$(function(){$(".top-hero").css("display","none"),$(".loading ,.loading__gif").css("display","block")}),$(window).load(function(){$(".loading").delay(2e3).fadeOut(700),$(".loading__gif").delay(2e3).fadeOut(300),$(".top-hero").css("display","block")}),$(function(){setTimeout("stopload()",4e4)});var windowW=$(window).width();$(function(){var e=$(".toggle-lines"),a=$(".header-toggle"),o=$(document.body);a.on("click",function(){o.toggleClass("open"),o.hasClass("open")?($(e).addClass("active"),$(".sp-header .contents").fadeIn(150),$(".toggle-lines__line").addClass("bg_black")):($(e).removeClass("active"),$(".sp-header .contents").fadeOut(150),$(".toggle-lines__line").removeClass("bg_black"))}),windowW>481&&$(".header-item__list--works").hover(function(){$(".pc-workskinds").addClass("open")},function(){$(".pc-workskinds").removeClass("open")})});