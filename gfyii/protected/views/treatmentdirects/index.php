<?php
/* @var $this TreatmentdirectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Treatmentdirects',
);

$this->menu=array(
	array('label'=>'Create Treatmentdirects', 'url'=>array('create')),
	array('label'=>'Manage Treatmentdirects', 'url'=>array('admin')),
);
?>

<h1>Treatmentdirects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
