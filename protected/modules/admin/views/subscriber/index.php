<?php
/* @var $this SubscriberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subscriber Models',
);

$this->menu=array(
	array('label'=>'Create SubscriberModel', 'url'=>array('create')),
	array('label'=>'Manage SubscriberModel', 'url'=>array('admin')),
);
?>

<h1>Subscriber Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
