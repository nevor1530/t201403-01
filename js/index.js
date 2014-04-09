$(function(){
	// 响应式尺寸参数
	var screen_xs_max = 768;

	// 常用DOM对象
	var $window = $(window);

	// 预加载overlay

	var preloaderImg = document.getElementById("id-preloader-img");
	if(preloaderImg.complete) { // 如果图片已经存在于浏览器缓存，直接调用回调函数
		$(".js-preloader").fadeOut(1800);
   	}
   	preloaderImg.onload = function () { //图片下载完毕时异步调用callback函数。
		$(".js-preloader").fadeOut(1800);
   	};

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

	// 导航逻辑
	$("#id-menu").click(function(){
		shownav();
	});
	$(".nav-close").click(function(){
		hidenav();
	});
	$(".main-overlay").click(function(){
		hidenav();
	});

	$(".nav  a").click(function(){
		hidenav();
	});

	function shownav(){
		$(".global-nav").show();
		$(".main-wrapper").animate({right: "-200px"}, 100);
		$(".global-header").animate({right: "-200px"}, 100);
		$(".main-overlay").show();
		$("body").addClass("noverflow");
		$(".main-wrapper").height($window.height());
		// 停止轮播
		$(".carousel").carousel("pause");
	}

	function hidenav(){
		$(".main-overlay").hide();
		$("body").removeClass("noverflow");
		$(".main-wrapper").height("auto");
		$(".main-wrapper").animate({right: "0"}, 100);
		$(".global-header").animate({right: "0"}, 100);
		$(".global-nav").hide();
		// 启动轮播
		$(".carousel").carousel("cycle");
	}	

	// slide左右滑动切换
	$("#carousel-generic").on("swipeleft", function(e){
		$("#carousel-generic").carousel("next");
	});
	$("#carousel-generic").on("swiperight", function(e){
		$("#carousel-generic").carousel("prev");
	});
	
	$(".image-container").on(
		"mouseenter", function() {
		    $('.image-container').css('cursor','pointer');
      		$('.image-title-box', this).hide();
			$('.image-overlay', this).animate({
	      		height: "toggle"
      		}, 200);
		}
	);
	
	$(".image-container").on(
		"mouseleave", function() {
      		$('.image-title-box', this).show();
			$('.image-overlay', this).animate({
	      		height: "toggle"
      		}, 200);
		}
	);
	
	$(".image-container").on(
		"click", function() {
      		$('#gallery-container').show();
			$('#gallery-thumbnail-container').hide();
		}
	);

	
	$("#gallery_close").on(
		"click", function() {
			$('#gallery-container').hide();
			$('#gallery-thumbnail-container').show();
		}
	);
	
	// 地图尺寸自适应
	var $map_img = $("#map");
	$(window).resize(function(){
		resize_map_image();
	});
	
	function resize_map_image(){
		var ww = $window.width();
		
		var mapw, maph;
		if (ww < 500) {
			mapw = 877;
			maph = 300;
		} else {
			mapw = 1440;
			maph = 492;
		}
		
		$map_img.css("height", maph +"px");
		$map_img.css("left", (-mapw + ww) / 2 +"px");
		
	}
	resize_map_image();
		
});
