<?php
/* @var $this PartnerController */
/* @var $model Partner */
?>
<div class="box span12 row-fluid">
	<div class="box-header well" data-original-title>
		<h2><i class="icon-user"></i>合作伙伴管理</h2>
	</div>
	
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'partner-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'company',
			'brand',
			'province',
			'city',
			'contact',
			/*
			'phone',
			'email',
			'created_time',
			'updated_time',
			*/
			array(
				'class'=>'CButtonColumn',
				'template'=>'{update} {delete}',
			),
		),
	)); ?>
</div>

