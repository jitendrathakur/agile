<?php
/* @var $this BillingreportsController */
/* @var $model Billingreports */

$this->breadcrumbs=array(
	'Billingreports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Billingreports', 'url'=>array('index')),
	array('label'=>'Create Billingreports', 'url'=>array('create')),
	array('label'=>'View Billingreports', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Billingreports', 'url'=>array('admin')),
);
?>

<h1>Update Billingreports <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>