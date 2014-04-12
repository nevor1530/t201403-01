<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>IsOften Advertisement Manage System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="css/bootstrap-classic.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	  
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
		<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
	
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
					<form class="form-horizontal" action="servlet/LoginServlet" onsubmit="return smito()" method="POST" style="margin-top:20px">
						<fieldset>
							<div class="input-prepend" style="margin-top:8px;margin-left:115px;float:left">
								<span class="add-on">
									<i class="icon-user"></i>
								</span>
								<input class="input-large" name="userName" id="userName" type="text" value="请输入用户名" onclick="onClickUserName()" onblur="onBlurUserName()"/>
								<span id="username_tips" class="help-inline" style="visibility:hidden;color:#E32C3B;">用户名不能为空</span>
							</div>
							<div class="clearfix"></div>
	
							<div class="input-prepend" style="margin-top:8px;margin-left:115px;float:left">
								<span class="add-on">
									<i class="icon-lock"></i>
								</span>
								<input class="input-large" name="password" id="password" type="text" value="请输入密码" onfocus="onClickPassword()" onclick="onClickPassword()" onblur="onBlurPassword()"/>
								<span id="password_tips" class="help-inline" style="visibility:hidden;color:#E32C3B;">密码不能为空</span>
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