<?php
/* @var $this BillingreportsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Billingreports',
);

$this->menu=array(
	array('label'=>'Create Billingreports', 'url'=>array('create')),
	array('label'=>'Manage Billingreports', 'url'=>array('admin')),
);
?>

<h1>Billingreports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
