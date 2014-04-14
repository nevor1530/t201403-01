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

?>
<div class="box span12 row-fluid">
	<div class="box-header well" data-original-title>
		<h2><i class="icon-user"></i>合作伙伴管理</h2>
	</div>
	
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

