<?php
/* @var $this SubscriberController */
/* @var $model SubscriberModel */
/* @var $form CActiveForm */
?>

<div class="box-content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subscriber-model-form',
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
		<?php $this->beginControlGroup($model, 'email');?>
			<?php echo $form->labelEx($model,'email', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<div class="form-actions">
			<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '更新', array('class'=>'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->