$(function(){var i=$(".loadArea"),a="more";i.wrap('<div class="loadWrap"></div>'),i.after('<div class="loadMoreBtnbox"><div class="loadMoreBtn">'+a+"</div></div>");var e=$(".loadWrap");e.each(function(){var a=($(".CapTitle").attr("id"),$(this)),o=a.find(i),t=12,n="Loading...",c=500,s=a.find(".loadMoreBtn"),r=e.index(this),d=r+1;s.click(function(){return $.ajax({url:"json/include.json",dataType:"json",cache:!1,success:function(i){var a=i.length,e=o.find(".btn-box").length,r=a-e,d=a-r;if(a==e)return!1;if(o.append('<div class="nowLoading">'+n+"</div>"),0==e)if(a<=t){for(var l=0;l<a;l++)$('<li id="btn'+i[l].itemNum+'" class="btn-box">'+i[l].itemSource+"</li>").appendTo(o).css({opacity:"0"}).animate({opacity:"1"},c);s.remove()}else for(var l=0;l<t;l++)$('<li id="btn'+i[l].itemNum+'" class="btn-box">'+i[l].itemSource+"</li>").appendTo(o).css({opacity:"0"}).animate({opacity:"1"},c);else if(e>0&&e<a){if(t<r)for(var l=0;l<t;l++)v=l+d,$('<li id="btn'+i[v].itemNum+'" class="btn-box">'+i[v].itemSource+"</li>").appendTo(o).css({opacity:"0"}).animate({opacity:"1"},c);else if(t>=r){for(var l=0;l<r;l++)v=l+d,$('<li id="btn'+i[v].itemNum+'" class="btn-box">'+i[v].itemSource+"</div>").appendTo(o).css({opacity:"0"}).animate({opacity:"1"},c);s.remove()}}else if(e==a)return!1},complete:function(){return $(".nowLoading").each(function(){$(this).remove()}),!1}}),!1}),a.addClass("loadSet"+d),s.click()})});