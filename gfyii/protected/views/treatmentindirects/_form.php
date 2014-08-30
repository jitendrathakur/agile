<?php
/* @var $this TreatmentindirectsController */
/* @var $model Treatmentindirects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'treatmentindirects-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'travel_duration'); ?>
		<?php echo $form->textField($model,'travel_duration',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'travel_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'setup_duration'); ?>
		<?php echo $form->textField($model,'setup_duration',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'setup_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'treatmentdate'); ?>
		<?php echo $form->textField($model,'treatmentdate'); ?>
		<?php echo $form->error($model,'treatmentdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documentation_duration'); ?>
		<?php echo $form->textField($model,'documentation_duration',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'documentation_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_duration'); ?>
		<?php echo $form->textField($model,'other_duration',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'other_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'therapist_id'); ?>
		<?php echo $form->textField($model,'therapist_id'); ?>
		<?php echo $form->error($model,'therapist_id'); ?>
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
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo $form->textField($model,'isactive'); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->