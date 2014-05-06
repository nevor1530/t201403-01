<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>IsOften Manage System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo $this->module->assetsUrl; ?>/css/bootstrap-classic.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	  
	</style>
	<link href="<?php echo $this->module->assetsUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $this->module->assetsUrl; ?>/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo $this->module->assetsUrl; ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href="<?php echo $this->module->assetsUrl; ?>/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
		<!-- jQuery -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-button.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.cookie.js"></script>

	<!-- chart libraries start -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.min.js"></script>
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.stack.js"></script>
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.history.js"></script>
	
	<script type="text/javascript">
	var userNameTips = "请输入用户名";
	function onClickUserName() {
		var userName = document.getElementById('userName').value;
		if (userName == userNameTips) {
			document.getElementById('userName').value = "";
		}
		document.getElementById('username_tips').style.visibility = "hidden";
		document.getElementById('userName').style.borderColor = "#CCCCCC";
	}
	
	function onBlurUserName() {
		var userName = document.getElementById('userName').value;
		if (userName == "") {
			document.getElementById('userName').value = userNameTips;
		}
	}
	
	var passwordTips = "请输入密码";
	function onClickPassword() {
		var password = document.getElementById('password').value;
		if (password == passwordTips) {
			document.getElementById('password').value = "";
			document.getElementById('password').type = "password";
		}
		document.getElementById('password_tips').style.visibility = "hidden";
		document.getElementById('password').style.borderColor = "#CCCCCC";
	}
	
	function onBlurPassword() {
		var password = document.getElementById('password').value;
		if (password == "") {
			document.getElementById('password').type = "text";
			document.getElementById('password').value = passwordTips;
		}
	}
	
	function smito() {
		var username = document.getElementById('userName');
		var password = document.getElementById('password');
	
		if(username.value == userNameTips || (username.value).replace("/ /g","") == "") {
			document.getElementById('username_tips').style.visibility = "visible";
			document.getElementById('userName').style.borderColor = "#E32C3B";
			return false;
		} else if(password.value == passwordTips || (password.value).replace("/ /g","") == "") {
			document.getElementById('password_tips').style.visibility = "visible";
			document.getElementById('password').style.borderColor = "#E32C3B";
			return false;
		}
		return true;
	}
	</script>
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Advertise Manage System</h2>
				</div><!--/span-->
			</div><!--/row-->
		
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<form class="form-horizontal" onsubmit="return smito()" method="POST" style="margin-top:20px">
						<fieldset>
							<div class="input-prepend center" style="margin-top:8px;float:left">
								<span class="add-on">
									<i class="icon-user"></i>
								</span>
								<input class="input-large" name="LoginForm[username]" id="username" type="text" placeholder="请输入用户名" onclick="onClickUserName()" onblur="onBlurUserName()" required/>
								<span id="username_tips" class="help-block" style="visibility:hidden;color:#E32C3B;">用户名不能为空</span>
							</div>
							<div class="clearfix"></div>
							
							<div class="input-prepend center" style="margin-top:8px;float:left">
								<span class="add-on">
									<i class="icon-lock"></i>
								</span>
								<input class="input-large" name="LoginForm[password]" id="password" type="password" placeholder="请输入密码" onfocus="onClickPassword()" onclick="onClickPassword()" onblur="onBlurPassword()" required/>
								<span id="password_tips" class="help-block" style="visibility:hidden;color:#E32C3B;">密码不能为空</span>
							</div>
							<div class="clearfix"></div>
							
							<p class="center span5">
								<button type="submit" class="btn btn-primary">登陆</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
		</div><!--/fluid-row-->
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>