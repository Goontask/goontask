<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOGIN')); ?>:</b>
	<?php echo CHtml::encode($data->LOGIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BIRTHDATE')); ?>:</b>
	<?php echo CHtml::encode($data->BIRTHDATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE')); ?>:</b>
	<?php echo CHtml::encode($data->ROLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MOBILE')); ?>:</b>
	<?php echo CHtml::encode($data->MOBILE); ?>
	<br />

	*/ ?>

</div>