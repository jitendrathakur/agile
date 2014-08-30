<?php
/* @var $this TreatmentdirectsController */
/* @var $model Treatmentdirects */

$this->breadcrumbs=array(
	'Treatmentdirects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Treatmentdirects', 'url'=>array('index')),
	array('label'=>'Manage Treatmentdirects', 'url'=>array('admin')),
);
?>

<h1>Create Treatmentdirects</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>