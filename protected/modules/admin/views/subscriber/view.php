<?php
/* @var $this SubscriberController */
/* @var $model SubscriberModel */

$this->breadcrumbs=array(
	'Subscriber Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubscriberModel', 'url'=>array('index')),
	array('label'=>'Create SubscriberModel', 'url'=>array('create')),
	array('label'=>'Update SubscriberModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubscriberModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubscriberModel', 'url'=>array('admin')),
);
?>

<h1>View SubscriberModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'created_time',
	),
)); ?>
