<?php
/* @var $this TreatmentindirectsController */
/* @var $model Treatmentindirects */

$this->breadcrumbs=array(
	'Treatmentindirects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Treatmentindirects', 'url'=>array('index')),
	array('label'=>'Create Treatmentindirects', 'url'=>array('create')),
	array('label'=>'Update Treatmentindirects', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Treatmentindirects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Treatmentindirects', 'url'=>array('admin')),
);
?>

<h1>View Treatmentindirects #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'travel_duration',
		'setup_duration',
		'treatmentdate',
		'documentation_duration',
		'other_duration',
		'therapist_id',
		'created_at',
		'updated_at',
		'deleted_at',
		'isactive',
	),
)); ?>
