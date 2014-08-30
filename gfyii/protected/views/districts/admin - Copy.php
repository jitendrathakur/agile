<?php
/* @var $this DistrictsController */
/* @var $model Districts */

$this->breadcrumbs=array(
	'Districts'=>array('index'),
	'Manage',
);
 Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#districts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<a href="index.php?r=districts/index"><button class="btn btn-primary">List</button></a>
<a href="index.php?r=districts/create"><button class="btn btn-primary">Create New</button></a>
<a href="index.php?r=districts/admin"><button class="btn btn-primary">Manage</button></a>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'districts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions' => array('class' => 'col-xs-12 table-responsive'),
	'columns'=>array(
		'id',
		'name',
		'supplemental',
		'attention',
		'title',
		'address',
		/*
		'address2',
		'city',
		'state',
		'zipcode',
		'phone',
		'comment',
		'website',
		'district_id',
		'created_at',
		'updated_at',
		'deleted_at',
		'isactive',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
