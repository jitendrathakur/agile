<?php
/* @var $this TreatmentdirectsController */
/* @var $model Treatmentdirects */
/* @var $form CActiveForm */
?>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<a id="collapse_all" class="btn btn-primary" data-status="0" > Expand </a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'treatmentdirects-form',
					// Please note: When you enable ajax validation, make sure the corresponding
					// controller action is handling ajax validation correctly.
					// There is a call to performAjaxValidation() commented in generated controller code.
					// See class documentation of CActiveForm for details on this.
					'enableAjaxValidation'=>false,
				));
				?>
				<div class="box-header">
					<p class="note">Fields with <span class="required">*</span> are required.</p>
					<?php echo $form->errorSummary($model); ?>
					
					<h3 class="box-title">Occupational Therapy Treatment Notes</h3>
					
					
				</div><!-- /.box-header -->
				
				
				<div class="box-body">
					<div class="box-group" id="accordion">
						<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
						<div class="panel box box-primary">
							<div class="box-header">
								<h4 class="box-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								General
								</a><i class="fa fa-angle-double-right"></i>
								</h4>
							</div>
						
							<div id="collapseOne" class="panel-collapse collapse">
								<div class="box-body">
									
									<div class="form-group">
										<table width="100%">
										<tr>
											<td width="25%">
												<?php //echo $form->hiddenField(User::model(),'id', array('class'=>'form-control', 'value'=> '2')); ?>
												
												<?php echo $form->labelEx($model,'Date :'); ?>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<?php echo $form->textField($model,'treatmentdate',array('class'=>'form-control pull-right datepicker')); ?>
													<?php echo $form->error($model,'treatmentdate'); ?>
												</div>
											</td>
											
											<td>
												<?php echo $form->labelEx($model,'Student :'); ?>
												<?php
												$static = array(
												    'Select Student'     => Yii::t('0','Select Student'),
												);
												$_students = CHtml::listData( Students::model()->findAll(), 'id', 'fname');
									   
												echo $form->dropDownList(Students::model(), 'id', $static + $_students
												    ,
												    array('class'=>'form-control')
												);
												?>
												
												
												<?php echo $form->error($model,'student_id'); ?>
											</td>
										</tr>
										
										<tr>
											<td>
												<?php echo $form->labelEx($model,'IEP Due On:'); ?>
												<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<?php echo $form->textField($model,'iepdueon',array('class'=>'form-control pull-right datepicker')); ?>
												<?php echo $form->error($model,'iepdueon'); ?>
											</div>
											</td>
											
											<td>
												<?php echo $form->labelEx($model,'OT Services on IEP :'); ?>
												<?php echo $form->textField($model,'otservice',array('class'=>'form-control')); ?>
												<?php echo $form->error($model,'otservice'); ?>
											</td>
										</tr>
										
										<tr>
											<td>
												<?php echo $form->labelEx($model,'Duration :'); ?>
												<div class="input-group">
												<div class="input-group-addon">
												<span class="glyphicon glyphicon-time"></span>
												</div>
												<?php echo $form->textField($model,'duration',array('class'=>'form-control pull-right clockpicker')); ?>
												<?php echo $form->error($model,'duration'); ?>
												</div>
											</td>
											
											<td>
												<?php echo $form->labelEx($model,'Key :'); ?>
												<?php echo $form->dropDownList( $model, 'key_id'
												, array('AB' => 'Student Absent', 'C' => 'Consulation', 'D' => 'Direct Therapy with Student'
													, 'E' => 'Evaluation / Testing', 'G' => ' Group Session', 'H' => 'Holiday'
													, 'I' => 'IEP Initial', 'IA' => 'IEP Annual'
													, 'IAD' => 'IEP Addendum', 'IT' => 'IEP Triennial', 'SF' => 'School Function', 'TA' => 'Therapist Absent'
													, 'RTI' => 'Response to Intervention', 'S' => 'Screen', 'SST' => 'Student Study Team', 'SC' => 'Staff Collaboration' )
												, array('class'=>'form-control'));
												?>
												<?php echo $form->error($model,'key_id'); ?>
											
											</td>
										</tr>
										
										</table>
										
									
									</div><!-- /.form group -->
									
									<!-- text input -->
								</div><!-- /.box-body-->
							</div>
					
						</div>
						
						
						<div class="panel box box-primary">
							<div class="box-header">
								<h4 class="box-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								Gross Motor / Postural
								</a> <i class="fa fa-angle-double-right"></i>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="box-body">
								<!-- checkbox -->
								
								<div class="checkbox">
									<label>
										<?php echo $form->checkBox($model,'gmp_sittingposture', array('class'=>'form-control') ); ?>
										Sitting Posture / Balance
										<?php echo $form->error($model,'gmp_sittingposture'); ?>
									</label>
								</div>
								
								<div class="checkbox">
									<label>
										<?php echo $form->checkBox($model,'gmp_standing', array('class'=>'form-control') ); ?>
										Standing Balance
										<?php echo $form->error($model,'gmp_standing'); ?>
									</label>
								</div>
								
								<div class="checkbox">
									<label>
										<?php echo $form->checkBox($model,'gmp_shoulder', array('class'=>'form-control') ); ?>
										Shoulder Girdle Stability
										<?php echo $form->error($model,'gmp_shoulder'); ?>
									</label>
								</div>
								
								<div class="checkbox">
									<label>
										<?php echo $form->checkBox($model,'gmp_trunk', array('class'=>'form-control') ); ?>
										Trunk Strength
										<?php echo $form->error($model,'gmp_trunk'); ?>
									</label>
								</div>
								
								<div class="checkbox">
									<label>
										<?php echo $form->checkBox($model,'gmp_rangemotion', array('class'=>'form-control') ); ?>
										Range of Motion
										<?php echo $form->error($model,'gmp_rangemotion'); ?>
									</label>
								</div>
								
								<div class="checkbox">
									<label>
										<?php echo $form->checkBox($model,'gmp_ndt', array('class'=>'form-control') ); ?>
										Neurodevelopment (NDT)
										<?php echo $form->error($model,'gmp_ndt'); ?>
									</label>
								</div>
								
								</div>
							</div>
						</div>
						
						
						<div class="panel box box-primary">
							<div class="box-header">
								<h4 class="box-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								Fine and Visual Motor
								</a> <i class="fa fa-angle-double-right"></i>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="box-body">
								
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'fvm_grasping', array('class'=>'form-control') ); ?>
											Grasping / Prehension
											<?php echo $form->error($model,'fvm_grasping'); ?>
										</label>
									</div>
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'fvm_handstrength', array('class'=>'form-control') ); ?>
											Hand Strength
											<?php echo $form->error($model,'fvm_handstrength'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'fvm_coloring', array('class'=>'form-control') ); ?>
											Coloring / Writing / Drawing
											<?php echo $form->error($model,'fvm_coloring'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'fvm_scissor', array('class'=>'form-control') ); ?>
											Scissor Skills
											<?php echo $form->error($model,'fvm_scissor'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'fvm_bilateral', array('class'=>'form-control') ); ?>
											Bilateral UE Coordination
											<?php echo $form->error($model,'fvm_bilateral'); ?>
										</label>
									</div>
								
								</div>
							</div>
							
						</div>
						
						
						<div class="panel box box-primary">
							<div class="box-header">
								<h4 class="box-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
								Self Care Skills
								</a> <i class="fa fa-angle-double-right"></i>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="box-body">
									<div class="checkbox">
										<label>
										<?php echo $form->checkBox($model,'sck_feeding', array('class'=>'form-control') ); ?>
										Feeding Skills / Oral Motor
										<?php echo $form->error($model,'sck_feeding'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
										<?php echo $form->checkBox($model,'sck_fastener', array('class'=>'form-control') ); ?>
											Fasteners (buttons, snaps, etc.)
										<?php echo $form->error($model,'sck_fastener'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'sck_management', array('class'=>'form-control') ); ?>
											Management: School Materials
											<?php echo $form->error($model,'sck_management'); ?>
										</label>
									</div>
								</div>
							</div>
						</div>
	
						
						<div class="panel box box-primary">
							<div class="box-header">
								<h4 class="box-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
								Sensory Skills
								</a> <i class="fa fa-angle-double-right"></i>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse">
								<div class="box-body">
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'ss_tactile', array('class'=>'form-control') ); ?>
											Tactile
											<?php echo $form->error($model,'ss_tactile'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'ss_visual', array('class'=>'form-control') ); ?>
											Visual Perceptual
											<?php echo $form->error($model,'ss_visual'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
										<?php echo $form->checkBox($model,'ss_vestibular', array('class'=>'form-control') ); ?>
										Vestibular
										<?php echo $form->error($model,'ss_vestibular'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'ss_proprioceptive', array('class'=>'form-control') ); ?>
											Proprioceptive / Heavy work
											<?php echo $form->error($model,'ss_proprioceptive'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'ss_motorplanning', array('class'=>'form-control') ); ?>
											Motor Planning / Praxis
											<?php echo $form->error($model,'ss_motorplanning'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
										<?php echo $form->checkBox($model,'ss_alertprogram', array('class'=>'form-control') ); ?>
											Alert Program (Self Regulation)
										<?php echo $form->error($model,'ss_alertprogram'); ?>
										</label>
									</div>
									
									<div class="checkbox">
										<label>
											<?php echo $form->checkBox($model,'ss_attention', array('class'=>'form-control') ); ?>
											Attention
											<?php echo $form->error($model,'ss_attention'); ?>
										</label>
									</div>
									
								</div>
							</div>
						</div>
						
						
						<div class="panel box box-primary">
							<div class="box-header">
							<h4 class="box-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
							Behaviour
							</a> <i class="fa fa-angle-double-right"></i>
							</h4>
							</div>
							<div id="collapseSix" class="panel-collapse collapse">
							<div class="box-body">
								<?php echo $form->labelEx($model,'Behaviour'); ?>
								<?php echo $form->dropDownList( $model, 'behavior', array('Good', 'Fair', 'Poor'), array('class'=>'form-control')); ?>
								<?php echo $form->error($model,'behavior'); ?>
							</div>
							</div>
						</div>
						
						<div class="panel box box-primary">
							<div class="box-header">
								<h4 class="box-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
								Comments
								</a> <i class="fa fa-angle-double-right"></i>
								</h4>
							</div>
							
							<div id="collapseSeven" class="panel-collapse collapse">
								<div class="box-body">
									<div class='row'>
										<div class='col-md-12'>
										<div class='box-body pad'>
										
										<?php echo $form->textArea($model, 'comment', array('id'=> 'commentBox', 'class'=>'form-control', 'placeholder'=>'Place some text here', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;')); ?>
										<!--
										<input type="button" value="Spell Check" onclick="$('#commentBox').spellCheckInDialog({popUpStyle:'fancybox',theme:'clean'})">
										<input type="button" value="Spell Check" onclick="$Spelling.SpellCheckInWindow('commentBox')">
										-->
										<?php echo $form->error($model,'comment'); ?>
											
										</div>
										</div><!-- /.col-->
									</div><!-- ./row -->
								</div>
							</div>
						</div>
						
						
					
						
					</div><!-- /.box-group accordian -->
					
				</div><!-- /.box-body -->	

				<div class="box-footer">
					
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=> 'btn btn-primary') ); ?>
					<?php echo CHtml::resetButton('Cancel', array('class'=> 'btn btn-danger') ); ?>
				</div>  <!-- /.box-footer -->
				<?php $this->endWidget(); ?>
			</div>  <!-- /.box-solid -->
		</div>
	</div>
	
</section>

<script type="text/javascript">

    //var date = new Date();
    //date.setDate(date.getDate() - 1);

    $(function() {

        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        //============================
        
        //duration
        $('.clockpicker').clockpicker({
            placement: 'top',
            autoclose: true
            
        });
        //============================
        
        $('textarea').spellAsYouType();
        //============================
        
        $('#collapse_all').click(function(){
            console.log('hello vic');
            var status = $(this).data('status');
            
            if ( 0 === status) {
                $('#collapse_all').html('Collapse');
                var status = $(this).data('status', 1);
            } else {
                $('#collapse_all').html('Expand');
                var status = $(this).data('status', 0);
            }
            
            $('#accordion .panel-collapse').collapse('toggle');
        });
        //============================
    
    });
</script>