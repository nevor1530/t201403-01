<section id="carousel-generic" class="carousel slide js-slide my-slide" data-ride="carousel" data-interval="5000">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-generic" data-slide-to="1"></li>
		<li data-target="#carousel-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active js-slide">
			<img class="slide-img js-slide-img" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home-hero-1-1440-900.jpg" alt="...">
			<div class="carousel-caption">
				<h1>Moving people</h1>
				<p>The Uber app connects you with a driver at the tap of a button</p>
			</div>
		</div>
		<div class="item js-slide">
			<img class="slide-img js-slide-img" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home-hero-2-1440-900.jpg" alt="...">
			<div class="carousel-caption">
				<h1>Moving people</h1>
				<p>The Uber app connects you with a driver at the tap of a button</p>
			</div>
		</div>
		<div class="item js-slide">
			<img class="slide-img js-slide-img" src="<?php echo Yii::app()->request->baseUrl; ?>/images/home-hero-3-1440-900.jpg" alt="...">
			<div class="carousel-caption">
				<h1>Moving people</h1>
				<p>The Uber app connects you with a driver at the tap of a button</p>
			</div>
		</div>
	</div>
	<!-- Controls -->
	<!--<a class="left carousel-control" href="#carousel-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>-->
</section>