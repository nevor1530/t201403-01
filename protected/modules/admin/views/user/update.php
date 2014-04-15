<?php
/* @var $this UserController */
/* @var $model UserModel */
?>

<h1>更新管理员  <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>