<?php
/* @var $this BillingreportsController */
/* @var $model Billingreports */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'billingreports-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'typeofservice'); ?>
		<?php echo $form->textField($model,'typeofservice',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'typeofservice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'servicedate'); ?>
		<?php echo $form->textField($model,'servicedate'); ?>
		<?php echo $form->error($model,'servicedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours'); ?>
		<?php echo $form->textField($model,'hours',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'charge'); ?>
		<?php echo $form->textField($model,'charge',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'charge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtotal'); ?>
		<?php echo $form->textField($model,'subtotal',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'subtotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo $form->textField($model,'isactive'); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid'); ?>
		<?php echo $form->error($model,'ispaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billto_districtname'); ?>
		<?php echo $form->textField($model,'billto_districtname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'billto_districtname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billto_attn'); ?>
		<?php echo $form->textField($model,'billto_attn',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'billto_attn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billto_address'); ?>
		<?php echo $form->textField($model,'billto_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'billto_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billto_city'); ?>
		<?php echo $form->textField($model,'billto_city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'billto_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billto_state'); ?>
		<?php echo $form->textField($model,'billto_state',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'billto_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billto_zipcode'); ?>
		<?php echo $form->textField($model,'billto_zipcode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'billto_zipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nbcot'); ?>
		<?php echo $form->textField($model,'nbcot',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nbcot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ein'); ?>
		<?php echo $form->textField($model,'ein',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ein'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted_at'); ?>
		<?php echo $form->textField($model,'deleted_at'); ?>
		<?php echo $form->error($model,'deleted_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->