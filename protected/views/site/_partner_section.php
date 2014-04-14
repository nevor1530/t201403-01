<section class="section partner-section" id="id-partner-section">
	<div class="partner-section-container container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6">
				<div class="overview animate" data-animate="fadeInDown">
					<p class="section-title">对我们感兴趣？</p>
					<p class="lead">留下您的联系方式，我们将尽快联系您!</p>
				</div>
				<form role="form" class="partner-form" style="width:100%" method="POST" action="<?php echo $this->createUrl('site/partner');?>">
					<div class="row"><p class="title text-center col-xs-12">公司/设计师信息</p></div>
					<div class="row">
						<div class="col-xs-12">
							<p class="lead">公司全称：</p>
			  	          		<input name="Partner[company]" type="text" class="form-control input-sm" maxLength="40" required>
			  	        	</div>
					</div>
					<div class="row">
			  	        	<div class="col-xs-12">
			  	      			<p class="lead">品牌：</p>
			  	          		<input name="Partner[brand]" type="text" class="form-control input-sm" maxLength="40" required>
			  	        	</div>
					</div>
					<div class="row">
			  	        	<div class="col-xs-6">
			  	      			<p class="lead">省份：</p>
			  	          		<input name="Partner[province]" type="text" class="form-control input-sm" maxLength="20" required>
			  	        	</div>
		  	        		<div class="col-xs-6 city-container">
		  	      				<p class="lead">城市：</p>
		  	        	  		<input name="Partner[city]" type="text" class="form-control input-sm" required maxLength="20">
		  	        		</div>
					</div>
					<div class="row">
			  	        	<div class="col-xs-6">
			  	      			<p class="lead">联系人：</p>
			  	          		<input name="Partner[contact]" type="text" class="form-control input-sm" required maxLength="20">
			  	        	</div>
			  	        	<div class="col-xs-6 phone-container">
			  	      			<p class="lead">联系电话：</p>
			  	          		<input name="Partner[phone]" type="number" class="form-control input-sm" required maxLength="20">
			  	        	</div>
					</div>
					<div class="row">
			  	        	<div class="col-xs-12">
			  	      			<p class="lead">电子邮箱：</p>
			  	          		<input name="Partner[email]" type="email" class="form-control input-sm" required maxLength="100">
			  	        	</div>
					</div>
					<div class="row">
		          			<center class="col-xs-12">
		          	    			<button class="confirm-btn" type="submit">确定</button>
		          			</center>
					</div>
		          	</form>
			</div>
		</div>
	</div>
</section>
