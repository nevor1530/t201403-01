<?php
/* @var $this SubscriberController */
/* @var $model SubscriberModel */

$this->breadcrumbs=array(
	'Subscriber Models'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubscriberModel', 'url'=>array('index')),
	array('label'=>'Create SubscriberModel', 'url'=>array('create')),
	array('label'=>'View SubscriberModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubscriberModel', 'url'=>array('admin')),
);
?>

<h1>Update SubscriberModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>