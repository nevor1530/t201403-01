<?php
/* @var $this UserController */
/* @var $model UserModel */
?>
<div class="box span12 row-fluid">
	<div class="box-header well" data-original-title>
		<h2><i class="icon-user"></i>用户管理</h2>
	</div>
	
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'user-model-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'username',
			'password',
			'create_time',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{update} {delete}',
			),
		),
	)); ?>
</div>
