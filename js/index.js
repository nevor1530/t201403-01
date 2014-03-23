$(function(){
	// 响应式尺寸参数
	var screen_xs_max = 768;

	// 常用DOM对象
	var $window = $(window);
	
	// 限制幻灯片的高度
	var imgw = 1440, imgh = 900;
	var $js_slides = $(".js-slide");
	var $slide_img = $(".slide-img");
	$(window).resize(function(){
		onresize();
	});
	function onresize(){
		var wh = $window.height()-10;
		var ww = $window.width();
		$js_slides.height(wh);
		if (ww/wh >= imgw/imgh){
			$slide_img.css("width","100%");
			$slide_img.css("height","auto");
			$slide_img.css("left", 0);
		} else {
			$slide_img.css("width","auto");
			$slide_img.css("height","100%");
			$slide_img.css("left", (-imgw*wh/imgh/2 + ww/2)+"px");
		}
	}
	onresize();
	
	// 根据滚动方向，隐藏和显示header
	var $header = $("#id-header");
	var lastTop = 0, curTop = 0;
	var headerStatus = 1;
	$(window).scroll(function(e){
		curTop = $(this).scrollTop();
		if (curTop < lastTop && !headerStatus){
			// 向上
			var params = {};
			params.top = "0";
			$header.animate(params);
			headerStatus = 1;
		} else if(curTop > lastTop && headerStatus && curTop > $header.outerHeight()){
			// 向下
			var params = {
				top: -$header.outerHeight()+"px"
			};
			$header.animate(params);
			headerStatus = 0;
		}
		setTimeout(function(){
			lastTop = curTop;
		}, 0);
	});
	
	$(".image-container").on(
		"mouseenter", function() {
		    $('.image-container').css('cursor','pointer');
      		$('.image-title-box', this).hide();
			$('.image-overlay', this).animate({
	      		height: "toggle", 
      		}, 200);
		}
	);
	
	$(".image-container").on(
		"mouseleave", function() {
      		$('.image-title-box', this).show();
			$('.image-overlay', this).animate({
	      		height: "toggle", 
      		}, 200);
		}
	);
	
	$("#gallery_close").on(
		"click", function() {
			$('#gallery-container').hide();
			$('#gallery-thumbnail-container').show();
		}
	);
		
});
