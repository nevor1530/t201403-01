<?php
/* @var $this UserController */
/* @var $model UserModel */
/* @var $form CActiveForm */
?>

<div class="box-content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
		'class'=>'form-horizontal',
	),
)); ?>

	<p class="text-info">带星号<span class="required">*</span>的项目是必填的</p>

	<?php echo $form->errorSummary($model); ?>
	<fieldset>
		<?php $this->beginControlGroup($model, 'username');?>
			<?php echo $form->labelEx($model,'username', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<?php $this->beginControlGroup($model, 'password');?>
			<?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<div class="form-actions">
			<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '更新', array('class'=>'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->