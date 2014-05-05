<?php include '_head.php'; ?>
	<body data-spy="scroll" data-target=".global-nav" class="">
		<div class="preloader js-preloader">
			<img id="id-preloader-img" src="<?php echo Yii::app()->request->baseUrl; ?>/images/section-1-1440-900.jpg" width="0" height="0"/>
		</div>
		<nav class="global-nav" style="display: none;">
			<a class="glyphicon glyphicon-remove hidden-xs nav-close"></a>
			<ul class="nav">
				<li><a class="nav-border-wrapper" href="#carousel-generic" data-ajax="false">主页</a></li>
				<li><a class="nav-border-wrapper" href="#ipad-function-section" data-ajax="false">iPad应用介绍</a></li>
				<li><a class="nav-border-wrapper" href="#iphone-function-section" data-ajax="false">iPhone应用介绍</a></li>
				<li><a class="nav-border-wrapper" href="#id-subscription-section" data-ajax="false">订阅我们</a></li>
				<li><a class="nav-border-wrapper" href="#id-download-section" data-ajax="false">下载应用</a></li>
				<li><a class="nav-border-wrapper" href="#id-partner-section" data-ajax="false">申请成为合作伙伴</a></li>
				<li><a class="nav-border-wrapper" href="#id-map-section" data-ajax="false">关于我们</a></li>
			</ul>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ipadiphone-download.png" class="ipadiphone-img" usemap="#downloadMap"/>
			<map name="downloadMap">
				<area shape="rect" coords="19,34,68,98" href="#iphone" />
				<area shape="rect" coords="0,99,145,176" href="#iphone" />
				<area shape="rect" coords="88,0,276,98" href="#ipad" />
				<area shape="rect" coords="145,99,298,176" href="#ipad" />
			</map>
		</nav>
		
		<div class="global-container noverflow">
			<div class="main-wrapper noverflow">
					<!-- 蒙板 -->
					<div class="main-overlay" style="display: none; cursor:pointer;"></div>
					<div class="header-fade"></div>
					<?php include '_header.php'; ?>
					<?php include '_carousel_section.php'; ?>
					<?php include '_ipad_function_section.php'; ?>
					<?php include '_iphone_function_section.php'; ?>
					<?php include '_subscription_section.php'; ?>
					<?php include '_download_section.php'; ?>
					<?php include '_partner_section.php'; ?>
					<?php include '_map_section.php'; ?>
			</div>
		</div>

		<div id="myModal" class="modal fade alertModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- dialog body -->
					<div class="modal-body text-center">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<span id='alert-msg'></span>
					</div>
					
					<!-- dialog buttons -->
					<div class="modal-footer text-center">
						<button type="button" class="btn btn-primary">确定</button>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobile.custom.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/wow.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.smooth-scroll.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/index.js"></script>
		<script type="text/javascript">
			new WOW().init();
			$('a').smoothScroll();
		</script>
	</body>
</html>
