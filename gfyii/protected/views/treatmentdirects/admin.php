<?php
/* @var $this TreatmentdirectsController */
/* @var $model Treatmentdirects */

$this->breadcrumbs=array(
	'Treatmentdirects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Treatmentdirects', 'url'=>array('index')),
	array('label'=>'Create Treatmentdirects', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#treatmentdirects-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Treatmentdirects</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'treatmentdirects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'duration',
		'key_id',
		'treatmentdate',
		'otservice',
		'iepdueon',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
