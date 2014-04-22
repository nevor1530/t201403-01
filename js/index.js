$(function(){
	// 响应式尺寸参数
	var screen_xs_max = 500;

	// 常用DOM对象
	var $window = $(window);

	// 预加载overlay

	var preloaderImg = document.getElementById("id-preloader-img");
	if(preloaderImg.complete) { // 如果图片已经存在于浏览器缓存，直接调用回调函数
		$(".js-preloader").fadeOut(1000);
   	}
   	preloaderImg.onload = function () { //图片下载完毕时异步调用callback函数。
		$(".js-preloader").fadeOut(1000);
   	};

	// 限制幻灯片的高度
	var imgw = 1440, imgh = 900;
	var $js_slides = $(".js-slide");
	var $slide_img = $(".js-slide-img");
	$(window).resize(function(){
		onresize();
	});
	function onresize(){
		var wh = $window.height();
		var ww = $window.width();
		$js_slides.height(wh);
		if (ww/wh >= imgw/imgh){
			$slide_img.css("width","100%");
			$slide_img.css("height","auto");
			$slide_img.css("left", 0);
		} else {
			$slide_img.css("width","auto");
			$slide_img.css("height",wh+"px");
			$slide_img.css("left", (-imgw*wh/imgh/2 + ww/2)+"px");
		}
		
		resize_ipad_function_section();
		resize_iphone_function_section();
		resize_subscription_function_section();
		resize_download_section();
	}
	
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
	var scrollTop = "0px";
	var activeIndex = 0;

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
		// 停止轮播
		$(".carousel").carousel("pause");
		// 获取当前actived的序号
//		activeIndex = getActiveIndex();

		$(".global-nav").show();
		$(".main-wrapper").animate({right: "-280px"}, 100);
		$(".global-header").animate({right: "-280px"}, 100);
		$(".main-overlay").show();

//		scrollTop = $(document).scrollTop();
//		$(".global-container").width($window.width()).height($window.height());
		$("body").addClass("noverflow");
//		$(".main-wrapper").css("top", -scrollTop);

		// set the actived li
//		setTimeout(function() {
//			$lis = $("ul.nav li");
//			$lis.removeClass("active");
//			$($lis[activeIndex]).addClass("active");
//		}, 100);
	}

	function hidenav(){
		// 启动轮播
		$(".carousel").carousel("cycle");

		$(".main-overlay").hide();
		$("body").removeClass("noverflow");
//		$(".global-container").width("auto").height("auto");
//		$(".main-wrapper").css("top", 0);
//		$(document).scrollTop(scrollTop);

		$(".main-wrapper").animate({right: "0"}, 100);
		$(".global-header").animate({right: "0"}, 100);
		$(".global-nav").hide();

	}	

	function getActiveIndex(){
		var $lis = $("ul.nav li");
		for(var i=0; i<$lis.length; i++) {
			if ($($lis[i]).hasClass("active")) {
				return i;
			}
		}
	}

	// slide左右滑动切换
	$("#carousel-generic").on("swipeleft", function(e){
		$("#carousel-generic").carousel("next");
	});
	$("#carousel-generic").on("swiperight", function(e){
		$("#carousel-generic").carousel("prev");
	});
	
	var isIpadFunctionInGalleryMode = false;
	var curIpadFunctionContainerIndex = -1;
	$(".ipad-function-small-image-container").on(
		"mouseenter", function() {
		    $('.ipad-function-section .image-container').css('cursor','pointer');
      		$('.ipad-function-section .image-title-box', this).hide();
			$('.ipad-function-section .image-overlay', this).animate({
	      		height: "toggle"
      		}, 200);
		}
	);
	
	$(".ipad-function-small-image-container").on(
		"mouseleave", function() {
      		$('.ipad-function-section .image-title-box', this).show();
			$('.ipad-function-section .image-overlay', this).animate({
	      		height: "toggle"
      		}, 200);
		}
	);
	
	$(".ipad-function-small-image-container").on(
		"click", function() {
      		$('#ipad-gallery-container').show();
			$('#ipad-gallery-thumbnail-container').hide();
			
			curIpadFunctionContainerIndex = getIpadFunctionClickIndex(this);
			showIpadFunctionContainerAtIndex(curIpadFunctionContainerIndex);
			
			isIpadFunctionInGalleryMode = true;
			resize_ipad_function_section();
		}
	);
	
	$("#ipad-gallery-close").on(
		"click", function() {
			$('#ipad-gallery-container').hide();
			$('#ipad-gallery-thumbnail-container').show();
			isIpadFunctionInGalleryMode = false;
			resize_ipad_function_section();
			curIpadFunctionContainerIndex = -1;
		}
	);
	
	$(".ipad-function-section .last-btn").on(
		"click", function() {
			var $containers = $(".ipad-function-section .function-container");
			if (curIpadFunctionContainerIndex >= 0 && curIpadFunctionContainerIndex < $containers.length) {
				$($containers[curIpadFunctionContainerIndex]).hide();	
				if (curIpadFunctionContainerIndex == 0) {
					curIpadFunctionContainerIndex = $containers.length - 1;
				} else {
					curIpadFunctionContainerIndex--;
				}
				$($containers[curIpadFunctionContainerIndex]).show();
			}
		}
	);
	
	$(".ipad-function-section .next-btn").on(
		"click", function() {
			var $containers = $(".ipad-function-section .function-container");
			if (curIpadFunctionContainerIndex >= 0 && curIpadFunctionContainerIndex < $containers.length) {
				$($containers[curIpadFunctionContainerIndex]).hide();	
				if (curIpadFunctionContainerIndex == $containers.length - 1) {
					curIpadFunctionContainerIndex = 0;
				} else {
					curIpadFunctionContainerIndex++;
				}
				$($containers[curIpadFunctionContainerIndex]).show();
			}
		}
	);
	
	function getIpadFunctionClickIndex(obj){
		var $containers = $(".ipad-function-small-image-container");
		for(var i=0; i<$containers.length; i++){
			if ($containers[i] === obj){
				return i;
			}
		}
	}
	
	function showIpadFunctionContainerAtIndex(index){
		var $containers = $(".ipad-function-section .function-container");
		for(var i=0; i<$containers.length; i++){
			if (i === index){
				$($containers[i]).show();	
			} else {
				$($containers[i]).hide();	
			}
		}
	}
	
	/* resize ipad_function_section */
	function resize_ipad_function_section() {
		var wh = $window.height();
		var ww = $window.width();
		//alert(ww); //iphone:320 ; ipad: 768, 1024;
		//alert(wh); //iphone:460 ; ipad: 916, 660; 
		
		var $ipad_function_section = $(".ipad-function-section");
		var ipad_function_section_min_height;
		var padding;
		
		if (isIpadFunctionInGalleryMode == true) {
			if (ww > 1200) {
				ipad_function_section_min_height = 580;
				padding = 20;
			} else if (ww > 950 && ww <= 1200) {
				ipad_function_section_min_height = 480;
				padding = 40;
			} else if (ww > 750 && ww <= 950) {
				ipad_function_section_min_height = 450;
				padding = 20;
			} else if (ww > 340 && ww <= 750) {
				ipad_function_section_min_height = 550;
				padding = 20;
			} else {
				ipad_function_section_min_height = 550;
				padding = 20;
			}
		} else {
			if (ww > 750) {
				ipad_function_section_min_height = 580;
				padding = 20;
			} else {
				ipad_function_section_min_height = 220 + (ww - 60) * 411 * 3 / (619 * 2);
				padding = 20;
			}
		}
			
		if (wh > ipad_function_section_min_height) {
			$ipad_function_section.css("height", wh + "px");
			$ipad_function_section.css("padding-top", ((wh - ipad_function_section_min_height + 2 * padding) * 0.5) + "px");
			$ipad_function_section.css("padding-bottom", ((wh - ipad_function_section_min_height + 2 * padding) * 0.5) + "px");
		} else {
			$ipad_function_section.css("height", ipad_function_section_min_height + "px");
			$ipad_function_section.css("padding-top", padding + "px");
			$ipad_function_section.css("padding-bottom", padding + "px");
		}
	}
	
	
	var isIphoneFunctionInGalleryMode = false;
	var curIphoneFunctionContainerIndex = -1;
	$(".iphone-function-small-image-container").on(
		"mouseenter", function() {
		    $('.iphone-function-section .image-container').css('cursor','pointer');
      		$('.iphone-function-section .image-title-box', this).hide();
			$('.iphone-function-section .image-overlay', this).animate({
	      		height: "toggle"
      		}, 200);
		}
	);
	
	$(".iphone-function-small-image-container").on(
		"mouseleave", function() {
      		$('.iphone-function-section .image-title-box', this).show();
			$('.iphone-function-section .image-overlay', this).animate({
	      		height: "toggle"
      		}, 200);
		}
	);
	
	$(".iphone-function-small-image-container").on(
		"click", function() {
      		$('#iphone-gallery-container').show();
			$('#iphone-gallery-thumbnail-container').hide();
			
			curIphoneFunctionContainerIndex = getIphoneFunctionClickIndex(this);
			showIphoneFunctionContainerAtIndex(curIphoneFunctionContainerIndex);
			
			isIphoneFunctionInGalleryMode = true;
			resize_iphone_function_section();
		}
	);
	
	$("#iphone-gallery-close").on(
		"click", function() {
			$('#iphone-gallery-container').hide();
			$('#iphone-gallery-thumbnail-container').show();
			isIphoneFunctionInGalleryMode = false;
			resize_iphone_function_section();
			curIphoneFunctionContainerIndex = -1;
		}
	);
	
	$(".iphone-function-section .last-btn").on(
		"click", function() {
			var $containers = $(".iphone-function-section .function-container");
			if (curIphoneFunctionContainerIndex >= 0 && curIphoneFunctionContainerIndex < $containers.length) {
				$($containers[curIphoneFunctionContainerIndex]).hide();	
				if (curIphoneFunctionContainerIndex == 0) {
					curIphoneFunctionContainerIndex = $containers.length - 1;
				} else {
					curIphoneFunctionContainerIndex--;
				}
				$($containers[curIphoneFunctionContainerIndex]).show();
			}
		}
	);
	
	$(".iphone-function-section .next-btn").on(
		"click", function() {
			var $containers = $(".iphone-function-section .function-container");
			if (curIphoneFunctionContainerIndex >= 0 && curIphoneFunctionContainerIndex < $containers.length) {
				$($containers[curIphoneFunctionContainerIndex]).hide();	
				if (curIphoneFunctionContainerIndex == $containers.length - 1) {
					curIphoneFunctionContainerIndex = 0;
				} else {
					curIphoneFunctionContainerIndex++;
				}
				$($containers[curIphoneFunctionContainerIndex]).show();
			}
		}
	);
	
	function getIphoneFunctionClickIndex(obj){
		var $containers = $(".iphone-function-small-image-container");
		for(var i=0; i<$containers.length; i++){
			if ($containers[i] === obj){
				return i;
			}
		}
	}
	
	function showIphoneFunctionContainerAtIndex(index){
		var $containers = $(".iphone-function-section .function-container");
		for(var i=0; i<$containers.length; i++){
			if (i === index){
				$($containers[i]).show();	
			} else {
				$($containers[i]).hide();	
			}
		}
	}
	
	/* resize iphone_function_section */
	function resize_iphone_function_section() {
		var wh = $window.height();
		var ww = $window.width();
		//alert(ww); //iphone:320 ; ipad: 768, 1024;
		//alert(wh); //iphone:460 ; ipad: 916, 660; 
		
		var $iphone_function_section = $(".iphone-function-section");
		var iphone_function_section_min_height;
		var padding;
		
		if (isIphoneFunctionInGalleryMode == true) {
			if (ww > 1200) {
				iphone_function_section_min_height = 580;
				padding = 20;
			} else if (ww > 950 && ww <= 1200) {
				iphone_function_section_min_height = 540;
				padding = 40;
			} else if (ww > 750 && ww <= 950) {
				iphone_function_section_min_height = 620;
				padding = 20;
			} else if (ww > 340 && ww <= 750) {
				iphone_function_section_min_height = 760;
				padding = 20;
			} else {
				iphone_function_section_min_height = 720;
				padding = 20;
			}
		} else {
			if (ww > 750) {
				iphone_function_section_min_height = 580;
				padding = 20;
			} else {
				iphone_function_section_min_height = 220 + (ww - 60) * 411 * 3 / (619 * 2);
				padding = 20;
			}
		}
		
		/*
		$iphone_function_section.css("height", iphone_function_section_min_height + "px");
		$iphone_function_section.css("padding-top", padding + "px");
		$iphone_function_section.css("padding-bottom", padding + "px");
		*/
		
		if (wh > iphone_function_section_min_height) {
			$iphone_function_section.css("height", wh + "px");
			$iphone_function_section.css("padding-top", ((wh - iphone_function_section_min_height + 2 * padding) * 0.5) + "px");
			$iphone_function_section.css("padding-bottom", ((wh - iphone_function_section_min_height + 2 * padding) * 0.5) + "px");
		} else {
			$iphone_function_section.css("height", iphone_function_section_min_height + "px");
			$iphone_function_section.css("padding-top", padding + "px");
			$iphone_function_section.css("padding-bottom", padding + "px");
		}
	}
	
	/* resize subscription_function_section */
	function resize_subscription_function_section() {
		var wh = $window.height();
		var ww = $window.width();
		//alert(ww); //iphone:320 ; ipad: 768, 1024;
		//alert(wh); //iphone:460 ; ipad: 916, 660; 
		
		var $subscription_section = $(".subscription-section");
		var subscription_section_min_height;
		var padding;
		
		if (ww > 900) {
			subscription_section_min_height = 240;
			padding = 20;
		} else if (ww > 500 && ww <= 900) {
			subscription_section_min_height = 240;
			padding = 40;
		} else {
			subscription_section_min_height = 240;
			padding = 20;
		}
		
		if (wh > subscription_section_min_height) {
			$subscription_section.css("height", wh + "px");
			$subscription_section.css("padding-top", ((wh - subscription_section_min_height + 2 * padding) * 0.5) + "px");
			$subscription_section.css("padding-bottom", ((wh - subscription_section_min_height + 2 * padding) * 0.5) + "px");
		} else {
			$subscription_section.css("height", subscription_section_min_height + "px");
			$subscription_section.css("padding-top", padding + "px");
			$subscription_section.css("padding-bottom", padding + "px");
		}
	}
	
	function resize_download_section() {
		var wh = $window.height();
		var ww = $window.width();
		//alert(ww); //iphone:320 ; ipad: 768, 1024;
		//alert(wh); //iphone:460 ; ipad: 916, 660; 
		
		var $download_section = $(".download-section");
		var download_section_min_height;
		var padding;
		
		if (ww >= 1200) {
			download_section_min_height = (1170 - 60) * 899 / (2 * 993) + 40;
			padding = 20;
		} else if (ww >= 992 && ww < 1200) {
			download_section_min_height = (970 - 60) * 899 / (2 * 993) + 40;
			padding = 20;
		} else if (ww >= 768 && ww < 992) {
			download_section_min_height = (750 - 60) * 899 / (2 * 993) + 40;
			padding = 20;
		} else {
			download_section_min_height = (ww - 60) * 899 * 2 / 993 + 40;
			padding = 20;
		}
		
		if (wh > download_section_min_height) {
			$download_section.css("height", wh + "px");
			$download_section.css("padding-top", ((wh - download_section_min_height + 2 * padding) * 0.5) + "px");
			$download_section.css("padding-bottom", ((wh - download_section_min_height + 2 * padding) * 0.5) + "px");
		} else {
			$download_section.css("height", download_section_min_height + "px");
			$download_section.css("padding-top", padding + "px");
			$download_section.css("padding-bottom", padding + "px");
		}
	}
	
	
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
			$map_img.css("height", maph +"px");
			$map_img.css("left", (-mapw + ww) / 2 +"px");
		} else if (ww < 1440) {
			mapw = 1440;
			maph = 492;
			$map_img.css("height", maph +"px");
			$map_img.css("left", (-mapw + ww) / 2 +"px");
		} else {
			$map_img.css("width", "100%");
			$map_img.css("height", "auto");
		}
		
	}
	resize_map_image();
	
	/* =============================================
	init the next section links
	==============================================*/
	$("a.js-next-section").each(function(){
		var $nextSection = $(this).parent().next(".js-section");
		if ($nextSection.length > 0) {
			this.href = "#" + $nextSection.attr("id");		
		} else {
			this.style.display = "none";
		}
	});
	
	onresize();
});
