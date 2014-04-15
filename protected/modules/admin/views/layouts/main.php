<?php
$cs=Yii::app()->clientScript;
$cs->scriptMap=array();
$cs->registerCoreScript('jquery');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>IsOften Advertisement Manage System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo $this->module->assetsUrl; ?>/css/bootstrap-classic.css" rel="stylesheet">
	<style type="text/css">
		html, body {
  			height: 100%;
		}
	 	
	  	.sidebar-nav {
			padding: 9px 0;
	  	}

	  	#main {
		  	overflow:auto;
		  	padding-bottom:200px; /* this needs to be bigger than footer height*/
		}
		
	  	.footer {
		  	position: relative;
		  	margin-top: -30px; /* negative value of footer height */
		  	height: 30px;
		  	clear:both;
		  	padding-top:20px;
		} 
	</style>
	<link href="<?php echo $this->module->assetsUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $this->module->assetsUrl; ?>/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo $this->module->assetsUrl; ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo $this->module->assetsUrl; ?>/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo $this->module->assetsUrl; ?>/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- jQuery UI -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo $this->module->assetsUrl; ?>/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo $this->module->assetsUrl; ?>/js/jquery.dataTables.min.js'></script>
	
	<!-- chart libraries start -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/excanvas.js"></script>
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.min.js"></script>
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.stack.js"></script>
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->
	
	<!-- select or dropdown enhancer -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo $this->module->assetsUrl; ?>/js/charisma.js"></script>
</head>
<body>
	<div id="wrap">
		<div id="main" class="clear-top">
			<?php $this->renderPartial('/common/_header'); ?>
			<div class="container-fluid">
				<div class="row-fluid">
					<?php $this->renderPartial('/common/_left'); ?>
					<div id="content" class="span10">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
			<?php $this->renderPartial('/common/_footer'); ?>
		</div>
	</div><!--/.fluid-container-->
</body>
</html>
