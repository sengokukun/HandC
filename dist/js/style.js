function onYouTubeIframeAPIReady(){player=new YT.Player("player",{videoId:"xeJ7Mp4Nrtg",wmode:"transparent",loop:"1",playerVars:{loop:"1",rel:"0",playlist:"xeJ7Mp4Nrtg",showinfo:"0",controls:"0",modestbranding:"0",autoplay:"1",disablekb:"1"},events:{onReady:onPlayerReady,onStateChange:onPlayerStateChange}})}function onPlayerReady(e){e.target.mute()}function onPlayerStateChange(e){}function stopload(){$(".TopHero").css("display","block"),$(".Loading").delay(5e3).fadeOut(700),$(".Loading__Gif").delay(5e3).fadeOut(300)}var tag=document.createElement("script");tag.src="https://www.youtube.com/iframe_api";var firstScriptTag=document.getElementsByTagName("script")[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);var player;$(function(){$(".TopHero").css("display","none"),$(".Loading ,.Loading__Gif").css("display","block")}),$(window).on("load",function(){$(".Loading").delay(700).fadeOut(700),$(".Loading__Gif").delay(700).fadeOut(600),$(".TopHero").css("display","block")}),$(function(){setTimeout("stopload()",4e4)});var windowW=$(window).width();$(function(){$(window).on("load",function(){$("html,body").animate({scrollTop:0},"1")});var e,t=!1,a=$(".Toggle__Lines"),o=$(".Toggle"),n=$(".MasterHead__Navigation"),i=$(document.body),s=$(".sp-MasterHead__Block"),r=$(".sp-MasterHead__Block > .MasterHead__List");o.on("click",function(){i.toggleClass("open"),i.hasClass("open")?($(a).addClass("active"),$(".SpHeader .MasterHead__Navigation").fadeIn(150),$(".Toggle__Line").addClass("bg_white"),TweenMax.to(r,.5,{opacity:1,delay:.2}),TweenMax.to(s,.5,{left:"0"})):($(a).removeClass("active"),$(".SpHeader .MasterHead__Navigation").fadeOut(150),$(".Toggle__Line").removeClass("bg_white"),TweenMax.to(r,1,{opacity:0}),TweenMax.to(s,.5,{left:"-20px"})),0==t?(e=$(window).scrollTop(),$("body").addClass("fixed").css({top:-e}),$(n).addClass("open"),t=!0):($("body").removeClass("fixed").css({top:0}),window.scrollTo(0,e),$(n).removeClass("open"),t=!1)});var d=function(){var e=new TimelineMax,t=new TimelineMax,a=new TimelineMax,o=new TimelineMax,n=new TimelineMax,i=new TimelineMax,s=$(this).find(".bdL"),r=$(this).find(".bdB"),d=$(this).find(".bdR"),l=$(this).find(".bdT"),c=$(this).find(".FadeIn"),p=c.find(".Trans");e.to(s,.2,{height:"100%"}),t.to(r,.2,{width:"100%",delay:.2}),a.to(d,.2,{height:"100%",delay:.4}),o.to(l,.2,{width:"100%",delay:.6}),n.to(c,.2,{opacity:1,delay:.82}),i.to(p,.2,{delay:.85,left:"0px"})};$(".FadeIn__1").parent(".Modal").on("inview",d),$(".FadeIn__2").parent(".Modal").on("inview",d),$(".FadeIn__3").parent(".Modal").on("inview",d),$(window).on("load",function(){"https://handcfilms.com/"==location.href?($(".underBar").css({width:$(".current").outerWidth()-44,left:$(".current").position().left+22,display:"none"}),$(".MasterHead__Link").mouseover(function(){$(".underBar").stop().animate({width:$(this).outerWidth()-44,left:$(this).position().left+22,opacity:"show"},"fast")}),$(".MasterHead__Link").mouseout(function(){$(".underBar").stop().animate({width:$(".current").outerWidth()-44,left:$(".current").position().left+22,opacity:"hide"},"fast")})):($(".underBar, .underBar--top").css({width:$(".current").outerWidth()-44,left:$(".current").position().left+22}),$(".MasterHead__Link").mouseover(function(){$(".underBar").stop().animate({width:$(this).outerWidth()-44,left:$(this).position().left+22},"fast")}),$(".MasterHead__Link").mouseout(function(){$(".underBar").stop().animate({width:$(".current").outerWidth()-44,left:$(".current").position().left+22},"fast")}))})}),$(function(){var e=$(".CapTitle").attr("id");$.ajax({type:"GET",url:"./js/all.json",dataType:"json",data:{name:"Video"},success:function(t){for(var a=t.length,o=($(".Works__Tag"),$(".Works__Title"),$(".Works__Infomation"),0);o<a;o++)$(".Works__Block").prepend('<article class="Works__Item '+t[o].Id+'"><a href="works/'+t[o].Link+'" class="Works__Link"><p class="Works__Photo"><img src="/img/'+t[o].Img+'.jpg" alt=""><span class="Works__Tag">'+t[o].Id+'</span></p><div class="Works__Descriptions"><h2 class="Works__Title">'+t[o].Title+'</h2><p class="Works__Infomation">'+t[o].Description+"</p></div></a></article>"),"VIDEO"==e?$(".DESIGN, .PHOTO").remove():"PHOTO"==e?$(".DESIGN, .VIDEO").remove():"DESIGN"==e&&$(".PHOTO, .VIDEO").remove()}})});