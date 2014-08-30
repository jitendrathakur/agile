<?php
/* @var $this BillingreportsController */
/* @var $data Billingreports */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typeofservice')); ?>:</b>
	<?php echo CHtml::encode($data->typeofservice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servicedate')); ?>:</b>
	<?php echo CHtml::encode($data->servicedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours')); ?>:</b>
	<?php echo CHtml::encode($data->hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('charge')); ?>:</b>
	<?php echo CHtml::encode($data->charge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	<?php echo CHtml::encode($data->subtotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ispaid')); ?>:</b>
	<?php echo CHtml::encode($data->ispaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billto_districtname')); ?>:</b>
	<?php echo CHtml::encode($data->billto_districtname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billto_attn')); ?>:</b>
	<?php echo CHtml::encode($data->billto_attn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billto_address')); ?>:</b>
	<?php echo CHtml::encode($data->billto_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billto_city')); ?>:</b>
	<?php echo CHtml::encode($data->billto_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billto_state')); ?>:</b>
	<?php echo CHtml::encode($data->billto_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billto_zipcode')); ?>:</b>
	<?php echo CHtml::encode($data->billto_zipcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nbcot')); ?>:</b>
	<?php echo CHtml::encode($data->nbcot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ein')); ?>:</b>
	<?php echo CHtml::encode($data->ein); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_at')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>