<section class="section subscription-section" id="id-subscription-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="overview animate text-center" data-animate="fadeInDown">
					<h3 class="section-title"><strong>iPhone版本即将推出</strong></h3>
					<p class="lead">请留下您的邮箱地址，以便我们第一时间通知你 !</p>
				</div>
				<form role="form" class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 animate" data-animate="fadeInUp" method="POST" action="<?php echo $this->createUrl('site/subscribe');?>">
					<div class="input-group">
		            			<input type="email" class="wow slideInLeft form-control input-lg" data-wow-duration="5s" placeholder="YOUR-EMAIL" name="Subscriber[email]" required>
		            			<span class="wow slideInRight input-group-btn">
		            		  		<button class="btn btn-lg btn-default" type="button">确认</button>
		            			</span>
		          	</div>
	          	</form>
			</div>
		</div>
	</div>
</section>
