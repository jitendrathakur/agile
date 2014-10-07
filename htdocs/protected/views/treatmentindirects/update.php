<?php
/* @var $this TreatmentindirectsController */
/* @var $model Treatmentindirects */

$this->breadcrumbs=array(
	'Treatmentindirects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Treatmentindirects', 'url'=>array('index')),
	array('label'=>'Create Treatmentindirects', 'url'=>array('create')),
	array('label'=>'View Treatmentindirects', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Treatmentindirects', 'url'=>array('admin')),
);
?>

<h1>Update Treatmentindirects <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>