<?php
/* @var $this PartnerController */
/* @var $model PartnerModel */

$this->breadcrumbs=array(
	'Partner Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PartnerModel', 'url'=>array('index')),
	array('label'=>'Create PartnerModel', 'url'=>array('create')),
	array('label'=>'Update PartnerModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PartnerModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PartnerModel', 'url'=>array('admin')),
);
?>

<h1>View PartnerModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company',
		'brand',
		'province',
		'cite',
		'contact',
		'phone',
		'email',
		'created_time',
		'updated_time',
	),
)); ?>
