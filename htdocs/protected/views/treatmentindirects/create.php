<?php
/* @var $this TreatmentindirectsController */
/* @var $model Treatmentindirects */

$this->breadcrumbs=array(
	'Treatmentindirects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Treatmentindirects', 'url'=>array('index')),
	array('label'=>'Manage Treatmentindirects', 'url'=>array('admin')),
);
?>

<h1>Create Treatmentindirects</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>