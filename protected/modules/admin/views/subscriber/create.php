<?php
/* @var $this SubscriberController */
/* @var $model SubscriberModel */

$this->breadcrumbs=array(
	'Subscriber Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubscriberModel', 'url'=>array('index')),
	array('label'=>'Manage SubscriberModel', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>