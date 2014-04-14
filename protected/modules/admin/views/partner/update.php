<?php
/* @var $this PartnerController */
/* @var $model PartnerModel */

$this->breadcrumbs=array(
	'Partner Models'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PartnerModel', 'url'=>array('index')),
	array('label'=>'Create PartnerModel', 'url'=>array('create')),
	array('label'=>'View PartnerModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PartnerModel', 'url'=>array('admin')),
);
?>

<h1>Update PartnerModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>