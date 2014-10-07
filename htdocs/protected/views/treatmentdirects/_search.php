<?php
/* @var $this TreatmentdirectsController */
/* @var $model Treatmentdirects */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'key_id'); ?>
		<?php echo $form->textField($model,'key_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'treatmentdate'); ?>
		<?php echo $form->textField($model,'treatmentdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otservice'); ?>
		<?php echo $form->textField($model,'otservice',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iepdueon'); ?>
		<?php echo $form->textField($model,'iepdueon',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gmp_sittingposture'); ?>
		<?php echo $form->textField($model,'gmp_sittingposture'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gmp_standing'); ?>
		<?php echo $form->textField($model,'gmp_standing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gmp_shoulder'); ?>
		<?php echo $form->textField($model,'gmp_shoulder'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gmp_trunk'); ?>
		<?php echo $form->textField($model,'gmp_trunk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gmp_rangemotion'); ?>
		<?php echo $form->textField($model,'gmp_rangemotion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gmp_ndt'); ?>
		<?php echo $form->textField($model,'gmp_ndt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fvm_grasping'); ?>
		<?php echo $form->textField($model,'fvm_grasping'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fvm_handstrength'); ?>
		<?php echo $form->textField($model,'fvm_handstrength'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fvm_coloring'); ?>
		<?php echo $form->textField($model,'fvm_coloring'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fvm_scissor'); ?>
		<?php echo $form->textField($model,'fvm_scissor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fvm_bilateral'); ?>
		<?php echo $form->textField($model,'fvm_bilateral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fvm_crossing'); ?>
		<?php echo $form->textField($model,'fvm_crossing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sck_feeding'); ?>
		<?php echo $form->textField($model,'sck_feeding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sck_fastener'); ?>
		<?php echo $form->textField($model,'sck_fastener'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sck_management'); ?>
		<?php echo $form->textField($model,'sck_management'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss_tactile'); ?>
		<?php echo $form->textField($model,'ss_tactile'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss_visual'); ?>
		<?php echo $form->textField($model,'ss_visual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss_vestibular'); ?>
		<?php echo $form->textField($model,'ss_vestibular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss_proprioceptive'); ?>
		<?php echo $form->textField($model,'ss_proprioceptive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss_motorplanning'); ?>
		<?php echo $form->textField($model,'ss_motorplanning'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss_alertprogram'); ?>
		<?php echo $form->textField($model,'ss_alertprogram'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss_attention'); ?>
		<?php echo $form->textField($model,'ss_attention'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'behavior'); ?>
		<?php echo $form->textField($model,'behavior',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'therapist_id'); ?>
		<?php echo $form->textField($model,'therapist_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deleted_at'); ?>
		<?php echo $form->textField($model,'deleted_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isactive'); ?>
		<?php echo $form->textField($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->