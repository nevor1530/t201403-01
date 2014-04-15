<?php
/* @var $this PartnerController */
/* @var $model PartnerModel */
/* @var $form CActiveForm */
?>

<div class="box-content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partner-model-form',
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
		<?php $this->beginControlGroup($model, 'company');?>
			<?php echo $form->labelEx($model,'company', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'company',array('size'=>40,'maxlength'=>40)); ?>
				<?php echo $form->error($model,'company'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<?php $this->beginControlGroup($model, 'brand');?>
			<?php echo $form->labelEx($model,'brand', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'brand',array('size'=>40,'maxlength'=>40)); ?>
				<?php echo $form->error($model,'brand'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<?php $this->beginControlGroup($model, 'province');?>
			<?php echo $form->labelEx($model,'province', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'province',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'province'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<?php $this->beginControlGroup($model, 'city');?>
			<?php echo $form->labelEx($model,'city', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'city'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<?php $this->beginControlGroup($model, 'contact');?>
			<?php echo $form->labelEx($model,'contact', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'contact',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'contact'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<?php $this->beginControlGroup($model, 'phone');?>
			<?php echo $form->labelEx($model,'phone', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'phone'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<?php $this->beginControlGroup($model, 'email');?>
			<?php echo $form->labelEx($model,'email', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>
		<?php $this->endControlGroup();?>
	
		<div class="form-actions">
			<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '更新', array('class'=>'btn btn-primary')); ?>
		</div>
	</fieldset>

<?php $this->endWidget(); ?>

</div><!-- form -->