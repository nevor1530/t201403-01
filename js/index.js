$(function(){
	// 响应式尺寸参数
	var screen_xs_max = 768;
	$window = $(window);
	
	// 限制幻灯片的高度
	$(".js-slide").height($window.height() - 10);
	$window.resize(function(){
		$(".js-slide").height($window.height() - 10);
	});
	
	// 根据滚动方向，隐藏和显示header
	var lastTop = 0, curTop = 0;
	var headerStatus = 1;
	$window.scroll(function(e){
		if ($window.width() >= screen_xs_max){
			curTop = $(this).scrollTop();
			var $header = $("#id-header");
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
		}
	});
});