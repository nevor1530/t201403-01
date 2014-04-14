<?php
/* @var $this PartnerController */
/* @var $model Partner */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#partner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->menu=array(
	array('label'=>'List PartnerModel', 'url'=>array('index')),
	array('label'=>'Create PartnerModel', 'url'=>array('create')),
);

?>
<div class="box span12 row-fluid">
	<div class="box-header well" data-original-title>
		<h2><i class="icon-user"></i>合作伙伴管理</h2>
	</div>
	
	<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
	
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'partner-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'company',
			'brand',
			'province',
			'cite',
			'contact',
			/*
			'phone',
			'email',
			'created_time',
			'updated_time',
			*/
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
</div>

