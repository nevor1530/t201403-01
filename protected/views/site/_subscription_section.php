<section class="section subscription-section js-section" id="id-subscription-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="overview animate text-center" data-animate="fadeInDown">
					<h3 class="section-title"><strong>iPhone版本即将推出</strong></h3>
					<p class="lead">请留下你的邮箱地址，以便我们第一时间通知你 !</p>
				</div>
				<form id="SubForm" role="form" method="POST" class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" action="<?php echo $this->createUrl('site/subscribe');?>">
					<div class="row">
						<div class="wow slideInLeft col-xs-9 my-col">
            				<input type="email" class="form-control email-input" placeholder="你的邮箱" name="SubscriberModel[email]" required>
		          		</div>
		          		<div class="wow slideInRight col-xs-3 my-col">
        		  			<input class="btn btn-lg btn-default confirm-btn" type="submit" value="通知"></input>
            			</div>
            		</div>
	          	</form>
			</div>
		</div>
	</div>
	<a href="#" class="next-section js-next-section"></a>
</section>
