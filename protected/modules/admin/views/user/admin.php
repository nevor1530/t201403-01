<?php
/* @var $this UserController */
/* @var $model UserModel */

$this->breadcrumbs=array(
	'User Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserModel', 'url'=>array('index')),
	array('label'=>'Create UserModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="box span12 row-fluid">
	<div class="box-header well" data-original-title>
		<h2><i class="icon-user"></i>用户管理</h2>
	</div>
	
	<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
	
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
			),
		),
	)); ?>
</div>
