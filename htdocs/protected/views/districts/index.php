<?php
/* @var $this DistrictsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Districts',
);
?>
<a href="index.php?r=districts/create"><button class="btn btn-primary">Create Districts</button></a>
<a href="index.php?r=districts/admin"><button class="btn btn-primary">Manage Districts</button></a>
<h1>Districts</h1>
<div class="box">
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>District Name</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Active</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
$dataProvider->pagination->pagesize=Yii::app()->params['pageSize'];
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</tbody>
                                        <tfoot>
                                            <tr>
                                                <th>District Name</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Active</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
