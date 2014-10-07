<?php
/* @var $this SchoolsController */
/* @var $model Schools */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'Manage',
);
?>

<?php
/* @var $this DistrictsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'School',
);
?>
<a href="index.php?r=schools/create"><button class="btn btn-primary">Create New School</button></a>
<a href="index.php?r=schools/admin"><button class="btn btn-primary">Manage Schools</button></a>
<h1>Schools</h1>
<div class="box">
    <div class="box-body table-responsive">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>School Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Active</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $dataProvider->pagination->pagesize=Yii::app()->params['pageSize'];
            $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_admin',
            )); ?>
            </tbody>
            <tfoot>
            <tr>
                <th>School Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Active</th>
                <th>Delete</th>
            </tr>
            </tfoot>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

<div class="view">
