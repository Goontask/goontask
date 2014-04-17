<?php
/* @var $this TasksController */
/* @var $data tasks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checklist')); ?>:</b>
	<?php echo CHtml::encode($data->checklist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('project')); ?>:</b>
	<?php echo CHtml::encode($data->project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsible')); ?>:</b>
	<?php echo CHtml::encode($data->responsible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('members')); ?>:</b>
	<?php echo CHtml::encode($data->members); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours')); ?>:</b>
	<?php echo CHtml::encode($data->hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('docs')); ?>:</b>
	<?php echo CHtml::encode($data->docs); ?>
	<br />

	*/ ?>

</div>