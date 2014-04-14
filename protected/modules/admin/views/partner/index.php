<?php
/* @var $this PartnerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Partner Models',
);

$this->menu=array(
	array('label'=>'Create PartnerModel', 'url'=>array('create')),
	array('label'=>'Manage PartnerModel', 'url'=>array('admin')),
);
?>

<h1>Partner Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
