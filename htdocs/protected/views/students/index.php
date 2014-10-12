<!-- Main content -->
<section class="content">
<!-- START ACCORDION & CAROUSEL-->
<div class="row">
    <div class="col-md-12">
        <a id="collapse_all" class="btn btn-primary" data-status="0" > Expand </a>
    </div>
</div>

<div class="row">
<div class="col-md-12">
<div class="box box-solid">
<div class="box-header">
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

            <form role="form">
                <div class="form-group">
                    <table width="100%">
                        <tr>
                            <td width="25%">
                                <label>Date:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="dp1" value="" width="50"/>
                                </div>

                            </td>
                            <td>


                                <label> Student</label>
                                <select class="form-control">
                                    <option> John Doe | DOB: 12/23/2002 | GRADE: 11 | Edison High School</option>
                                    <option> Jane Doe | DOB: 02/12/2004 | GRADE: 10 | McClane High Shcool</option>
                                    <option> John Jane | DOB: 05/15/2008 | GRADE: 1 | Vineland Elementary</option>
                                </select>


                            </td>
                        </tr>

                        <tr>
                            <td>

                                <label> IEP Due On:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right datepicker" id="dp2" value="" width="50"/>
                                </div>


                            </td>
                            <td>


                                <label> OT Services on IEP:</label>
                                <input type="text" class="form-control" placeholder=""/>
                                
                            </td>
                        </tr>

                        <tr>
                            <td>

                                <label> Duration:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </div>
                                    <input type="text" class="form-control pull-right clockpicker" id="duration" value="" width="50"/>
                                </div>
                            </td>
                            <td>
                                <label> Key</label>
                                <select id="" name="" class="form-control" >
                                    <option value="AB"> Student Absent</option>
                                    <option value="C"> Consulation</option>
                                    <option value="D"> Direct Therapy with Student</option>
                                    <option value="E"> Evaluation / Testing</option>
                                    <option value="G"> Group Session</option>
                                    <option value="H"> Holiday</option>
                                    <option value="I"> IEP Initial</option>
                                    <option value="IA"> IEP Annual</option>
                                    <option value="IAD"> IEP Addendum</option>
                                    <option value="IT"> IEP Triennial</option>
                                    <option value="SF"> School Function</option>
                                    <option value="TA"> Therapist Absent</option>
                                    <option value="RTI "> Response to Intervention</option>
                                    <option value="S"> Screen</option>
                                    <option value="SST"> Student Study Team</option>
                                    <option value="SC"> Staff Collaboration</option>
                                </select>


                            </td>
                        </tr>

                    </table>


                </div><!-- /.form group -->

                <!-- text input -->

            </form>
        </div>
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
                    <input type="checkbox"/>
                    Sitting Posture / Balance
                </label>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"/>
                    Standing Balance
                </label>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"/>
                    Shoulder Girdle Stability
                </label>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"/>
                    Trunk Strength
                </label>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"/>
                    Range of Motion
                </label>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"/>
                    Neurodevelopment (NDT)
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

            <div class="checkbox"><label><input type="checkbox"/> Grasping / Prehension</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Hand Strength</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Coloring / Writing / Drawing</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Scissor Skills</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Bilateral UE Coordination</label></div>

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
            <div class="checkbox"><label><input type="checkbox"/> Feeding Skills / Oral Motor</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Fasteners (buttons, snaps, etc.)</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Management: School Materials</label></div>
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
            <div class="checkbox"><label><input type="checkbox"/> Tactile</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Visual Perceptual</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Vestibular</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Proprioceptive / Heavy work</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Motor Planning / Praxis</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Alert Program (Self Regulation)</label></div>
            <div class="checkbox"><label><input type="checkbox"/> Attention</label></div>

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
            <label> Behaviour</label>
            <select class="form-control">
                <option> Good</option>
                <option> Fair</option>
                <option> Poor</option>
            </select>
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
                        <form>
                            <textarea class="textarea" id="commentBox" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
                            <!--
                            <input type="button" value="Spell Check" onclick="$('#commentBox').spellCheckInDialog({popUpStyle:'fancybox',theme:'clean'})">
                            <input type="button" value="Spell Check" onclick="$Spelling.SpellCheckInWindow('commentBox')">
                            -->
                            
                        </form>
                    </div>
                </div><!-- /.col-->
            </div><!-- ./row -->
        </div>
    </div>
</div>


</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-info">Submit</button> <button type="submit" class="btn btn-danger">Cancelled</button>
</div>
</div><!-- /.box -->

</div><!-- /.col -->

</div><!-- /.row -->
<!-- END ACCORDION & CAROUSEL-->


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

</section><!-- /.content -->