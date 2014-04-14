<?php
/* @var $this PartnerController */
/* @var $model PartnerModel */

$this->breadcrumbs=array(
	'Partner Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PartnerModel', 'url'=>array('index')),
	array('label'=>'Manage PartnerModel', 'url'=>array('admin')),
);
?>

<h1>Create PartnerModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>