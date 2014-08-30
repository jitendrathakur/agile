<?php
/* @var $this TreatmentdirectsController */
/* @var $model Treatmentdirects */

$this->breadcrumbs=array(
	'Treatmentdirects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Treatmentdirects', 'url'=>array('index')),
	array('label'=>'Create Treatmentdirects', 'url'=>array('create')),
	array('label'=>'View Treatmentdirects', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Treatmentdirects', 'url'=>array('admin')),
);
?>

<h1>Update Treatmentdirects <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>