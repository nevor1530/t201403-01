<!-- Start Gallery Block
================================================== -->
<section id="gallery" class="section text-center gallery-section">
	<p class="label">功能</p>
	<p class="title">拾裳风应用程序</p>
	<p class="description">随时随地可购物的时尚杂志</p>
	<div id="gallery-thumbnail-container" class="container text-center gallery-container" style="display: block;">
		<div class="row">
			<div class="col-xs-6 col-lg-4 col-md-4 col-sm-4 my-column">
				<div class="image-container">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/01.png" alt="Turtle" class="thumbnail img-rounded image-responsive animate gallery-image" data-animate="fadeIn">
					<div class="image-overlay"></div>
					<div class="image-title-box text-center">
						<h3 class="headline text-center">轻触即可搭乘 </h3>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-lg-4 col-md-4 col-sm-4 my-column">
				<div class="image-container">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/02.png" alt="Turtle" class="thumbnail img-rounded image-responsive animate gallery-image" data-animate="fadeIn">
					<div class="image-overlay"></div>
					<div class="image-title-box text-center">
						<h3 class="headline">安全可靠接载 </h3>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-lg-4 col-md-4 col-sm-4 my-column">
				<div class="image-container">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/03.png" alt="Turtle" class="thumbnail img-rounded image-responsive animate gallery-image" data-animate="fadeIn">
					<div class="image-overlay"></div>
					<div class="image-title-box text-center">
						<h3 class="headline">价格清晰 </h3>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-lg-4 col-md-4 col-sm-4 my-column">
				<div class="image-container">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/04.png" alt="Turtle" class="thumbnail img-rounded image-responsive animate gallery-image" data-animate="fadeIn">
					<div class="image-overlay"></div>
					<div class="image-title-box text-center">
						<h3 class="headline">无需现金支付 </h3>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-lg-4 col-md-4 col-sm-4 my-column">
				<div class="image-container">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/04.png" alt="Turtle" class="thumbnail img-rounded image-responsive animate gallery-image" data-animate="fadeIn">
					<div class="image-overlay"></div>
					<div class="image-title-box text-center">
						<h3 class="headline">无需现金支付 </h3>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-lg-4 col-md-4 col-sm-4 my-column">
				<div class="image-container">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/04.png" alt="Turtle" class="thumbnail img-rounded image-responsive animate gallery-image" data-animate="fadeIn">
					<div class="image-overlay"></div>
					<div class="image-title-box text-center">
						<h3 class="headline">无需现金支付 </h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="gallery-container" class="container modal-gallery" style="display: none;">
		<a id="gallery_close" class="close-btn">
			<span class="glyphicon glyphicon-remove"/>
		</a>
		<div class="modal-container">
			<a class="btn last">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<ul>
				<li class="modal-slide active">
					<p class="feature-image"></p>
					<p class="stick"></p>
					<div class="copy">
						<h2> 轻触即可搭乘</h2>
						<p>Uber使用您手机内的定位系统找到您的位置，只需轻触屏幕，系统将自动通知离您最近的车辆。即使您不知上车地点的详细地址，也可在任何地方上车。</p>
					</div>
				</li>
			</ul>
			<a class="next btn">
				<span class="glyphicon glyphicon-chevron-right"/>
			</a>
		</div>
	</div>
</section>