<?php
/* @var $this SchoolsController */
/* @var $data Schools */
?>
<tr>
    <td><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?></td>
    <td><?php echo CHtml::encode($data->doccode); ?></td>
    <td><?php echo CHtml::encode(Districts::model()->findByPk($data->district_id)->name); ?></td>
    <td><?php echo CHtml::encode($data->eddirector); ?></td>
    <td><?php
        if ($data->isactive){
            print '<i class="fa fa-check-square"></i>';
        }else{
            print '<i class="fa fa-square-o"></i>';
        }
        ?></td>
</tr>