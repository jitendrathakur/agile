<?php
/* @var $this DistrictsController */
/* @var $model Districts */

$this->breadcrumbs=array(
	'Districts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
?>
<section class="content invoice">   
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</section>