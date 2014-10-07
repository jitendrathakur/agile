<?php
/* @var $this TreatmentindirectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Treatmentindirects',
);

$this->menu=array(
	array('label'=>'Create Treatmentindirects', 'url'=>array('create')),
	array('label'=>'Manage Treatmentindirects', 'url'=>array('admin')),
);
?>

<h1>Treatmentindirects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
