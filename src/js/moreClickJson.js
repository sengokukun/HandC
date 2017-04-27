
$(function() {
  var setArea = $('.loadArea'),
    btnTxt = 'more'; // ボタンテキスト

  setArea.wrap('<div class="loadWrap"></div>');
  setArea.after('<div class="loadMoreBtnbox"><div class="loadMoreBtn">' + btnTxt + '</div></div>');


  var setWrap = $('.loadWrap');

  setWrap.each(function() {
    var idName = $(".CapTitle").attr("id");
    var dataName = idName;
    var url = "./js/json/" + dataName + ".json";
    var setThis = $(this),
      thisLoadArea = setThis.find(setArea),
      loadNum = 12, // 読み込む個数
      loadTxt = 'Loading...', // Loading中の表示テキスト
      fadeSpeed = 500; // フェードスピード

    var setMore = setThis.find('.loadMoreBtn');

    var setIndex = setWrap.index(this),
      setNum = setIndex + 1;
    setMore.click(function() {



      $.ajax({
        url: 'json/include.json',
        dataType: 'json',
        cache: false,
        success: function(data) {
          var dataLengh = data.length,
            loadItemLength = thisLoadArea.find('.btn-box').length,
            setAdj = (dataLengh) - (loadItemLength),
            setBeg = (dataLengh) - (setAdj);
          if (!(dataLengh == loadItemLength)) {
            thisLoadArea.append('<div class="nowLoading">' + loadTxt + '</div>');
            if (loadItemLength == 0) {
              if (dataLengh <= loadNum) {
                for (var i = 0; i < dataLengh; i++) {
                  $('<li id="btn' + data[i].itemNum + '" class="btn-box">' + data[i].itemSource + '</li>').appendTo(thisLoadArea).css({
                    opacity: '0'
                  }).animate({
                    opacity: '1'
                  }, fadeSpeed);
                }
                setMore.remove();
              } else {
                for (var i = 0; i < loadNum; i++) {
                  $('<li id="btn' + data[i].itemNum + '" class="btn-box">' + data[i].itemSource + '</li>').appendTo(thisLoadArea).css({
                    opacity: '0'
                  }).animate({
                    opacity: '1'
                  }, fadeSpeed);
                }
              }
            } else if (loadItemLength > 0 && loadItemLength < dataLengh) {
              if (loadNum < setAdj) {
                for (var i = 0; i < loadNum; i++) {
                  v = i + setBeg;
                  $('<li id="btn' + data[v].itemNum + '" class="btn-box">' + data[v].itemSource + '</li>').appendTo(thisLoadArea).css({
                    opacity: '0'
                  }).animate({
                    opacity: '1'
                  }, fadeSpeed);
                }
              } else if (loadNum >= setAdj) {
                for (var i = 0; i < setAdj; i++) {
                  v = i + setBeg;
                  $('<li id="btn' + data[v].itemNum + '" class="btn-box">' + data[v].itemSource + '</div>').appendTo(thisLoadArea).css({
                    opacity: '0'
                  }).animate({
                    opacity: '1'
                  }, fadeSpeed);
                }
                setMore.remove();
              }
            } else if (loadItemLength == dataLengh) {
              return false;
            }
          } else {
            return false;
          }
        }, //success
        complete: function() {
            $('.nowLoading').each(function() {
              $(this).remove();
            });
            return false;
          } //complete
      });
      return false;
    });
    setThis.addClass('loadSet' + setNum);
    setMore.click();
  });

});
