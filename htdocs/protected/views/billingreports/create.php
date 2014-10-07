<?php
/* @var $this BillingreportsController */
/* @var $model Billingreports */

$this->breadcrumbs=array(
	'Billingreports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Billingreports', 'url'=>array('index')),
	array('label'=>'Manage Billingreports', 'url'=>array('admin')),
);
?>

<h1>Create Billingreports</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>