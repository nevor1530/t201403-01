<?php include '_head.php'; ?>
	<body data-spy="scroll" data-target=".global-nav">
		<div class="preloader js-preloader">
			<img id="id-preloader-img" src="<?php echo Yii::app()->request->baseUrl; ?>/images/section-1-1440-900.jpg" width="0" height="0"/>
		</div>
		
		<div class="global-container">
			<nav class="global-nav" style="display: none;">
				<a class="glyphicon glyphicon-remove hidden-xs nav-close"></a>
				<ul class="nav">
					<li><a href="#carousel-generic" data-ajax="false">首页</a></li>
					<li><a href="#gallery" data-ajax="false">功能</a></li>
					<li><a href="#id-customer-section" data-ajax="false">顾客</a></li>
					<li><a href="#id-brand-section" data-ajax="false">品牌及设计师</a></li>
					<li><a href="#id-download-section" data-ajax="false">下载页面</a></li>
					<li><a href="#id-about-section" data-ajax="false">关于我们</a></li>
				</ul>
			</nav>
			<div class="main-wrapper">
				<!-- 蒙板 -->
				<div class="main-overlay" style="display: none; cursor:pointer;"></div>
				<div class="header-fade"></div>
				<?php include '_header.php'; ?>
				<?php include '_carousel_section.php'; ?>
				<?php include '_gallery_section.php'; ?>
				<?php include '_partner_section.php'; ?>
				<?php include '_subscription_section.php'; ?>
				<?php include '_ipad_download_section.php'; ?>
				<?php include '_map_section.php'; ?>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobile.custom.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/index.js"></script>
	</body>
</html>
