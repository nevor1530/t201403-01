<?php
/* @var $this PartnerController */
/* @var $model PartnerModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partner-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brand'); ?>
		<?php echo $form->textField($model,'brand',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cite'); ?>
		<?php echo $form->textField($model,'cite',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_time'); ?>
		<?php echo $form->textField($model,'created_time'); ?>
		<?php echo $form->error($model,'created_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_time'); ?>
		<?php echo $form->textField($model,'updated_time'); ?>
		<?php echo $form->error($model,'updated_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->