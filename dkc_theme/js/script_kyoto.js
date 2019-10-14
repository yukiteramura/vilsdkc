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
  var windowWidth = $(window).width();
		var windowSm = 960;
		if (windowWidth <= windowSm) {
			$(".js_toggle span").click(function(){
				$(this).next("ul.child").slideToggle();
				$(this).parent("li").toggleClass("open");
			});
		}

	
	$('[href^="#"]').click(function () {
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
  
  //スライダー用　スクリプト
var a = document.getElementById('slide_list');
var aw = document.getElementById('slide_area').offsetWidth;
aw = parseInt(aw);
var c = a.children;
ac = c.length;
if(ac < 2){
ne = document.getElementById('next');
pr = document.getElementById('prev');
ne.style.display = "none";
pr.style.display = "none";
}
n = ac + 1;
var testTimer;
var i = 0;
var x = 0;
var w = aw;//list width
var vc = Math.floor(aw / w);
var lp = ac - vc;
var cr,st;
function bannerSlide(w,i){
testTimer = setInterval(function() {
if(i < lp){
ct = a.style.transform;
ct = parseInt(ct.replace(/[^0-9^\.]/g,""));
next = w + ct;
a.style.transform = "translateX(-" + next + "px)";
i++;
}else{
a.style.transform = "translateX(0px)";
i = 0;
}  
}, 2000);//ここの数字を変えるとスライダーのスピードが変わります。
}//bannerSlide

bannerSlide(w,i);

function stopTimer(){
clearInterval(testTimer);
};
function slide_prev(){
stopTimer();
cr = a.style.transform;
cr = parseInt(cr.replace(/[^0-9^\.]/g,"")) - w;
var mod = Math.floor(cr / w);
if(mod >= 0){
a.style.transform = "translateX(-" + cr + "px)";
bannerSlide(w,mod);
}else{
bannerSlide(w,0);
}　
};
function slide_next(){
stopTimer();
cr = a.style.transform;
cr = parseInt(cr.replace(/[^0-9^\.]/g,"")) + w;
var mod = Math.floor(cr / w);
if(mod <= lp){
a.style.transform = "translateX(-" + cr + "px)";
cr = cr + w;
bannerSlide(w,mod);
}else{
bannerSlide(w,mod);
}
}

window.onresize = function(){

stopTimer();
var a = document.getElementById('slide_list');
var aw = document.getElementById('slide_area').offsetWidth;
a.style.transform = "translateX(0px)";
aw = parseInt(aw);
var c = a.children;
ac = c.length;
n = ac + 1;
var testTimer;
var i = 0;
var x = 0;
var w = aw;//list width
var vc = Math.floor(aw / w);
var lp = ac - vc;
var cr,st;

bannerSlide(w,i);
}
//PC用　フッターイメージ
window.onload = function(){
var img = document.getElementById("kids_image");
var t = document.getElementById("topicks_area").clientHeight;
if(t > 1299){
img.style.display = "inline-block";
}
}
  

 

	
})(jQuery);