<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LOGIN'); ?>
		<?php echo $form->textField($model,'LOGIN',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'LOGIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIRTHDATE'); ?>
		<?php echo $form->textField($model,'BIRTHDATE'); ?>
		<?php echo $form->error($model,'BIRTHDATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROLE'); ?>
		<?php echo $form->textField($model,'ROLE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ROLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MOBILE'); ?>
		<?php echo $form->textField($model,'MOBILE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'MOBILE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->