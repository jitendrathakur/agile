<?php
/* @var $this StudentsController */
/* @var $model Students */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'students-form',
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
        <label for="Students_email">Student Email</label>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
        <label for="Students_fname">First Name*</label>
		<?php echo $form->textField($model,'fname',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="form-group">
        <label for="Students_lname">Last Name*</label>
		<?php echo $form->textField($model,'lname',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="form-group">
        <label for="Students_grade">Grade Level*</label>
		<?php echo $form->textField($model,'grade', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="form-group">
        <label for="Students_dob">Date of Birth*</label>
		<?php echo $form->textField($model,'dob', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="form-group">
            <label for="Districts_id">School District</label>
            <?php
            $static = array(
                'Select School District'     => Yii::t('0','Select School District'),
            );
            $_schools = CHtml::listData( Districts::model()->findAll(), 'id', 'name');

            echo $form->dropDownList(Districts::model(), 'id',$static + $_schools
                ,
                array('class'=>'form-control')
            );
            ?>
        </div>

        <div class="form-group">
            <label for="school_id">School</label>
            <?php echo CHtml::dropDownList('school_id','', array(), array('class'=>'form-control')); ?>
            <?php echo $form->error($model,'school_id'); ?>
        </div>

	<div class="form-group">
        <label for="Students_therapist_id">Primary Therapist*</label>
		<?php echo $form->textField($model,'therapist_id', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'therapist_id'); ?>
	</div>

	<div class="form-group">
        <label for="Students_subtherapist_id">Substitution Therapist</label>
		<?php echo $form->textField($model,'subtherapist_id', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'subtherapist_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo $form->textField($model,'isactive', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    $("#school_id").prop("disabled", true);
    $("#Districts_id" ).change(function() {
        $.post('index.php?r=schools/Dynamicschools&district_id='+$("#Districts_id").val(), function(data) {
            $('#school_id').html(data);
            $("#school_id").prop("disabled", false);
        });
    });
</script>