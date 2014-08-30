<?php
/* @var $this TreatmentindirectsController */
/* @var $data Treatmentindirects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('travel_duration')); ?>:</b>
	<?php echo CHtml::encode($data->travel_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('setup_duration')); ?>:</b>
	<?php echo CHtml::encode($data->setup_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('treatmentdate')); ?>:</b>
	<?php echo CHtml::encode($data->treatmentdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentation_duration')); ?>:</b>
	<?php echo CHtml::encode($data->documentation_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_duration')); ?>:</b>
	<?php echo CHtml::encode($data->other_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('therapist_id')); ?>:</b>
	<?php echo CHtml::encode($data->therapist_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_at')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	*/ ?>

</div>