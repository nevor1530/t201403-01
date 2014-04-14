<!-- left menu starts -->
<div class="span2 main-menu-span">
	<div class="well nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li class="nav-header hidden-tablet">合作伙伴信息</li>
			<li><a class="ajax-link" href="<?php echo $this->createUrl('/admin/partner/admin'); ?>"><i class="icon-upload"></i><span class="hidden-tablet"> 列表</span></a></li>
			<li><a class="ajax-link" href="<?php echo $this->createUrl('/admin/partner/create'); ?>"><i class="icon-upload"></i><span class="hidden-tablet"> 新建</span></a></li>
		</ul>
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li class="nav-header hidden-tablet">订阅者邮箱</li>
			<li><a class="ajax-link" href="<?php echo $this->createUrl('/admin/subscriber/admin'); ?>"><i class="icon-upload"></i><span class="hidden-tablet"> 列表</span></a></li>
			<li><a class="ajax-link" href="<?php echo $this->createUrl('/admin/subscriber/create'); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> 新建</span></a></li>
		</ul>
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li class="nav-header hidden-tablet">管理员账户</li>
			<li><a class="ajax-link" href="<?php echo $this->createUrl('/admin/user/admin'); ?>"><i class="icon-user"></i><span class="hidden-tablet"> 列表</span></a></li>
			<li><a class="ajax-link" href="<?php echo $this->createUrl('/admin/user/admin'); ?>"><i class="icon-user"></i><span class="hidden-tablet"> 新建</span></a></li>
		</ul>
	</div><!--/.well -->
</div><!--/span-->
<!-- left menu ends -->
