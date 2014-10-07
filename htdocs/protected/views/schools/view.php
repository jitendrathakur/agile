<?php
/* @var $this SchoolsController */
/* @var $model Schools */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->name,
);

?>
<?php
/* @var $this DistrictsController */
/* @var $model Districts */

$this->breadcrumbs=array(
    'Districts'=>array('index'),
    $model->name,
);
?>
<!-- Main content -->
<section class="content invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <strong><?php echo $model->name; ?></strong>
            </h2>
        </div><!-- /.col -->
    </div>


    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>Code: </td>
                    <td><strong><?php echo $model->doccode; ?></strong></td>
                </tr>
                <tr>
                    <td>Educational Director: </td>
                    <td><strong><?php echo $model->eddirector; ?></strong></td>
                </tr>
                <tr>
                    <td>Title: </td>
                    <td><strong><?php echo $model->title; ?></strong></td>
                </tr>
                <tr>
                    <td>District: </td>
                    <td><strong><?php echo Districts::model()->findByPk($model->district_id)->name; ?></strong></td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td><strong><?php echo $model->address; ?></strong></td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td><strong><?php echo $model->city; ?></strong></td>
                </tr>
                <tr>
                    <td>State: </td>
                    <td><strong><?php echo $model->state; ?></strong></td>
                </tr>
                <tr>
                    <td>Zipcode: </td>
                    <td><strong><?php echo $model->zipcode; ?></strong></td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td><strong><?php echo $model->phone; ?></strong></td>
                </tr>
                <tr>
                    <td>fax: </td>
                    <td><strong><?php echo $model->fax; ?></strong></td>
                </tr>
                <tr>
                    <td>Website: </td>
                    <td><strong><?php echo $model->website; ?></strong></td>
                </tr>
                <tr>
                    <td>Still Active: </td>
                    <td><?php
                        if ($model->isactive){
                            print '<i class="fa fa-check-square"></i>';
                        }else{
                            print '<i class="fa fa-square-o"></i>';
                        }
                        ?></td>
                </tr>
                </tbody>
            </table>
        </div><!-- /.col -->
    </div><!-- /.row -->


    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-12">
            <a href="index.php?r=schools/admin"><button class="btn btn-primary pull-right"> Manage Schools</button></a>
            <a href="index.php?r=schools/update&id=<?php print $model->id; ?>"><button class="btn btn-primary pull-right" style="margin-right: 5px;"></i> Edit</button></a>
        </div>
    </div>
</section><!-- /.content -->