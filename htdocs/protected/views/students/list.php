<?php
/* @var $this StudentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Students',
);
?>
<a href="index.php?r=students/create"><button class="btn btn-primary">Create Student</button></a>

<h1>Student</h1>
<div class="box">
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Student Email</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>DOB</th>
                                                <th>Active</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
$dataProvider->pagination->pagesize = Yii::app()->params['pageSize'];
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_list',
)); ?>
</tbody>                                       
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
