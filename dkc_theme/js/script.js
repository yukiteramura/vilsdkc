(function($){
/*slide menu*/
		$('#navOpen').append('<span/>').on('click',function () {
			$(this).toggleClass('open');
			$('#navGlobal .navGroup').slideToggle('slow');
		});

		$('#navGlobal .navInner[href^="#"]').on('click',function(){
			smooth(this);
			$('#navOpen').removeClass('open');
			$('#navGlobal .navGroup').slideUp('slow');
			return false;
		});
		/*slide menu*/


	
	$('.innerLink[href^="#"]').click(function () {
		smooth(this);
		return false;
	});

	$('.pageTop a').click(function () {
		animateoffset(0);
		return false;
	});
	
	
	
	//smoothScroll
	function smooth(target){
		var href = $(target).attr('href');//引数targetが持つhref値を取得
		//var offset = $('#pageHeader').height();
		var offset = 0;//何px下に下げるかの数値
		var top = $(href).offset().top - offset;
		animateoffset(top);//実際にスクロールさせる関数animateoffsetを実行
	}
	function animateoffset(top){
		$('html,body').animate({scrollTop:top},1000);//引数topの値までスクロールさせる
	}
	//smoothScroll
  

    

$(window).scroll(function (){
		$('.fadein').each(function(){
				var targetElement = $(this).offset().top;
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();
				if (scroll > targetElement - windowHeight + 200){
						$(this).css('opacity','1');
						$(this).css('transform','translateY(0)');
				}
		});
});
	
	var headerHight = 70; //ヘッダの高さ
 $('a[href^=#]').click(function(){
     var href= $(this).attr("href");
       var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
     $("html, body").animate({scrollTop:position}, 550, "swing");
        return false;
   });
	

    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
				var headerHight = 60; //ヘッダの高さ
				$('a[href^=#]').click(function(){
				var href= $(this).attr("href");
				var target = $(href == "#" || href == "" ? 'html' : href);
				var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
				$("html, body").animate({scrollTop:position}, 550, "swing");
				return false;
				});
    } 
	else {
				var headerHight = 70; //ヘッダの高さ
				$('a[href^=#]').click(function(){
				var href= $(this).attr("href");
				var target = $(href == "#" || href == "" ? 'html' : href);
				var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
				$("html, body").animate({scrollTop:position}, 550, "swing");
				return false;
				});
    }


 

	
})(jQuery);