<?php
/* @var $this SubscriberController */
/* @var $model SubscriberModel */
?>

<div class="box span12 row-fluid">
	<div class="box-header well" data-original-title>
		<h2><i class="icon-user"></i>合作伙伴管理</h2>
	</div>
	
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'subscriber-model-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'email',
			'created_time',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{update} {delete}',
			),
		),
	)); ?>
</div>