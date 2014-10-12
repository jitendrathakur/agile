<?php
/* @var $this TreatmentdirectsController */
/* @var $model Treatmentdirects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'treatmentdirects-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'key_id'); ?>
		<?php echo $form->textField($model,'key_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'key_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'treatmentdate'); ?>
		<?php echo $form->textField($model,'treatmentdate'); ?>
		<?php echo $form->error($model,'treatmentdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otservice'); ?>
		<?php echo $form->textField($model,'otservice',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'otservice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iepdueon'); ?>
		<?php echo $form->textField($model,'iepdueon',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'iepdueon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gmp_sittingposture'); ?>
		<?php echo $form->textField($model,'gmp_sittingposture'); ?>
		<?php echo $form->error($model,'gmp_sittingposture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gmp_standing'); ?>
		<?php echo $form->textField($model,'gmp_standing'); ?>
		<?php echo $form->error($model,'gmp_standing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gmp_shoulder'); ?>
		<?php echo $form->textField($model,'gmp_shoulder'); ?>
		<?php echo $form->error($model,'gmp_shoulder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gmp_trunk'); ?>
		<?php echo $form->textField($model,'gmp_trunk'); ?>
		<?php echo $form->error($model,'gmp_trunk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gmp_rangemotion'); ?>
		<?php echo $form->textField($model,'gmp_rangemotion'); ?>
		<?php echo $form->error($model,'gmp_rangemotion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gmp_ndt'); ?>
		<?php echo $form->textField($model,'gmp_ndt'); ?>
		<?php echo $form->error($model,'gmp_ndt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fvm_grasping'); ?>
		<?php echo $form->textField($model,'fvm_grasping'); ?>
		<?php echo $form->error($model,'fvm_grasping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fvm_handstrength'); ?>
		<?php echo $form->textField($model,'fvm_handstrength'); ?>
		<?php echo $form->error($model,'fvm_handstrength'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fvm_coloring'); ?>
		<?php echo $form->textField($model,'fvm_coloring'); ?>
		<?php echo $form->error($model,'fvm_coloring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fvm_scissor'); ?>
		<?php echo $form->textField($model,'fvm_scissor'); ?>
		<?php echo $form->error($model,'fvm_scissor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fvm_bilateral'); ?>
		<?php echo $form->textField($model,'fvm_bilateral'); ?>
		<?php echo $form->error($model,'fvm_bilateral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fvm_crossing'); ?>
		<?php echo $form->textField($model,'fvm_crossing'); ?>
		<?php echo $form->error($model,'fvm_crossing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sck_feeding'); ?>
		<?php echo $form->textField($model,'sck_feeding'); ?>
		<?php echo $form->error($model,'sck_feeding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sck_fastener'); ?>
		<?php echo $form->textField($model,'sck_fastener'); ?>
		<?php echo $form->error($model,'sck_fastener'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sck_management'); ?>
		<?php echo $form->textField($model,'sck_management'); ?>
		<?php echo $form->error($model,'sck_management'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ss_tactile'); ?>
		<?php echo $form->textField($model,'ss_tactile'); ?>
		<?php echo $form->error($model,'ss_tactile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ss_visual'); ?>
		<?php echo $form->textField($model,'ss_visual'); ?>
		<?php echo $form->error($model,'ss_visual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ss_vestibular'); ?>
		<?php echo $form->textField($model,'ss_vestibular'); ?>
		<?php echo $form->error($model,'ss_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ss_proprioceptive'); ?>
		<?php echo $form->textField($model,'ss_proprioceptive'); ?>
		<?php echo $form->error($model,'ss_proprioceptive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ss_motorplanning'); ?>
		<?php echo $form->textField($model,'ss_motorplanning'); ?>
		<?php echo $form->error($model,'ss_motorplanning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ss_alertprogram'); ?>
		<?php echo $form->textField($model,'ss_alertprogram'); ?>
		<?php echo $form->error($model,'ss_alertprogram'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ss_attention'); ?>
		<?php echo $form->textField($model,'ss_attention'); ?>
		<?php echo $form->error($model,'ss_attention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'behavior'); ?>
		<?php echo $form->textField($model,'behavior',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'behavior'); ?>
	</div>

	<div class="row"  >
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
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