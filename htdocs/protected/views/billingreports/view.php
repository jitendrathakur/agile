<?php
/* @var $this BillingreportsController */
/* @var $model Billingreports */

$this->breadcrumbs=array(
	'Billingreports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Billingreports', 'url'=>array('index')),
	array('label'=>'Create Billingreports', 'url'=>array('create')),
	array('label'=>'Update Billingreports', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Billingreports', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Billingreports', 'url'=>array('admin')),
);
?>

<h1>View Billingreports #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'typeofservice',
		'servicedate',
		'hours',
		'charge',
		'subtotal',
		'isactive',
		'ispaid',
		'billto_districtname',
		'billto_attn',
		'billto_address',
		'billto_city',
		'billto_state',
		'billto_zipcode',
		'nbcot',
		'ein',
		'created_at',
		'updated_at',
		'deleted_at',
		'user_id',
	),
)); ?>
