<?php
/* @var $this TreatmentdirectsController */
/* @var $model Treatmentdirects */

$this->breadcrumbs=array(
	'Treatmentdirects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Treatmentdirects', 'url'=>array('index')),
	array('label'=>'Create Treatmentdirects', 'url'=>array('create')),
	array('label'=>'Update Treatmentdirects', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Treatmentdirects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Treatmentdirects', 'url'=>array('admin')),
);
?>

<h1>View Treatmentdirects #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'duration',
		'key_id',
		'treatmentdate',
		'otservice',
		'iepdueon',
		'gmp_sittingposture',
		'gmp_standing',
		'gmp_shoulder',
		'gmp_trunk',
		'gmp_rangemotion',
		'gmp_ndt',
		'fvm_grasping',
		'fvm_handstrength',
		'fvm_coloring',
		'fvm_scissor',
		'fvm_bilateral',
		'fvm_crossing',
		'sck_feeding',
		'sck_fastener',
		'sck_management',
		'ss_tactile',
		'ss_visual',
		'ss_vestibular',
		'ss_proprioceptive',
		'ss_motorplanning',
		'ss_alertprogram',
		'ss_attention',
		'behavior',
		'comment',
		'therapist_id',
		'created_at',
		'updated_at',
		'deleted_at',
		'isactive',
	),
)); ?>
