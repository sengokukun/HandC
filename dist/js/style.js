function onYouTubeIframeAPIReady(){player=new YT.Player("player",{videoId:"xvE7ztEbDjU",wmode:"transparent",loop:"1",playerVars:{loop:"1",rel:"0",playlist:"xvE7ztEbDjU",showinfo:"0",controls:"0",modestbranding:"0",autoplay:"1",disablekb:"1"},events:{onReady:onPlayerReady,onStateChange:onPlayerStateChange}})}function onPlayerReady(e){e.target.mute()}function onPlayerStateChange(e){}function stopload(){$(".TopHero").css("display","block"),$(".Loading").delay(1300).fadeOut(700),$(".Loading__Gif").delay(1300).fadeOut(300)}var tag=document.createElement("script");tag.src="https://www.youtube.com/iframe_api";var firstScriptTag=document.getElementsByTagName("script")[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);var player;$(function(){$(".TopHero").css("display","none"),$(".Loading ,.Loading__Gif").css("display","block")}),$(window).load(function(){$(".Loading").delay(1300).fadeOut(550),$(".Loading__Gif").delay(1e3).fadeOut(300),$(".TopHero").css("display","block")}),$(function(){setTimeout("stopload()",4e4)});var windowW=$(window).width();$(function(){var e=$(".Toggle__Lines"),a=$(".Toggle"),o=$(document.body);a.on("click",function(){o.toggleClass("open"),o.hasClass("open")?($(e).addClass("active"),$(".SpHeader .Contents").fadeIn(150),$(".Toggle__Line").addClass("bg_black")):($(e).removeClass("active"),$(".SpHeader .Contents").fadeOut(150),$(".Toggle__Line").removeClass("bg_black"))}),windowW>481&&($(".MasterHead__List--works").hover(function(){$(".PcWorkskinds").addClass("open")},function(){$(".PcWorkskinds").removeClass("open")}),$(".Members").on("inview",function(){$(".Modal").on("inview",function(e,a){$(this).stop().addClass("ModalSlide")})}))});