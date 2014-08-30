<?php
/* @var $this SchoolsController */
/* @var $model Schools */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
?>

<h3>Update Schools <strong>"<?php echo $model->name; ?>"</strong></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>