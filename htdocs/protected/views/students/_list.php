<?php
/* @var $this DistrictsController */
/* @var $data Districts */
?>                                           
<tr>
    <td><?php echo CHtml::link(CHtml::encode($data->email), array('view', 'id'=>$data->id)); ?></td>
    <td><?php echo CHtml::encode($data->fname); ?></td>
    <td><?php echo CHtml::encode($data->lname); ?></td>
    <td><?php echo CHtml::encode($data->dob); ?></td>
     <td><?php
		if ($data->isactive){
			print '<i class="fa fa-check-square"></i>';
			}else{
			print '<i class="fa fa-square-o"></i>';
			}
	?></td>
</tr>
                                        


