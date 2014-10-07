<?php
/* @var $this SchoolsController */
/* @var $model Schools */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schools-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
    <div class="box-body">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <div class="form-group">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>


        <div class="form-group">
            <?php echo $form->labelEx($model,'doccode'); ?>
            <?php echo $form->textField($model,'doccode',array('size'=>15,'maxlength'=>15, 'class'=>'form-control')); ?>
            <?php echo $form->error($model,'doccode'); ?>
        </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'eddirector'); ?>
		<?php echo $form->textField($model,'eddirector',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'eddirector'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>


        <div class="form-group">
            <?php echo $form->labelEx($model,'district_id'); ?>
            <?php
            echo $form->dropDownList($model, 'district_id',
                CHtml::listData( Districts::model()->findAll(), 'id', 'name'),
                array('options' => array($model->district_id=>array('selected'=>true)), 'class'=>'form-control')
            );
            ?>
            <?php echo $form->error($model,'district_id'); ?>
        </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'zipcode'); ?>
		<?php echo $form->textField($model,'zipcode',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'zipcode'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'isactive'); ?>
        <?php echo CHtml::dropDownList('Schools[isactive]','Schools[isactive]',array('0'=>'No', '1'=>'Yes'), array('options' => array($model->isactive=>array('selected'=>true)), 'class'=>'form-control'));?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>


	<div class="row buttons">
		<?php 
		
		$_isnewrecord = $model->isNewRecord ? 'Create' : 'Save';
		echo CHtml::submitButton($_isnewrecord, array('class'=>'btn btn-primary pull-right')); ?>
		
		
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->