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
                                        <td>Supplemental: </td>
                                        <td><strong><?php echo $model->supplemental; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Attention: </td>
                                        <td><strong><?php echo $model->attention; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Title: </td>
                                        <td><strong><?php echo $model->title; ?></strong></td>
                                    </tr>
                                     <tr>
                                        <td>Address: </td>
                                        <td><strong><?php echo $model->address; ?></strong></td>
                                    </tr>
									 <tr>
                                        <td>Address2: </td>
                                        <td><strong><?php echo $model->address2; ?></strong></td>
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
                                        <td>Comment: </td>
                                        <td><strong><?php echo $model->comment; ?></strong></td>
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
                            <a href="index.php?r=districts/admin"><button class="btn btn-primary pull-right"> Manage Districts</button></a>  
                            <a href="index.php?r=districts/update&id=<?php print $model->id; ?>"><button class="btn btn-primary pull-right" style="margin-right: 5px;"></i> Edit</button></a>
                        </div>
                    </div>
                </section><!-- /.content -->