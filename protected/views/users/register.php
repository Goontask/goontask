<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Registration';
$this->breadcrumbs=array(
	'Registration',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array(
			'class' => 'form-signin',
			)
)); ?>
<?
	$model->unsetAttributes(array('password'));
?>

<h2 class="form-signin-heading">registration now</h2>
<div class="login-wrap">
    <p class="subheading">Enter your account details below</p>
            
    <?php //echo $form->textField($model,'email',array('class'=>'form-control', 'placeholder'=>'Email', 'autofocus'=>'autofocus')); ?>
	<? echo CHtml::activeEmailField($model, 'email', array('class'=>'form-control', 'placeholder'=> 'Email', 'autofocus'=>'autofocus'));?>
	<?php echo $form->error($model,'email'); ?>
    <?php echo $form->textField($model,'name',array('class'=>'form-control', 'placeholder'=>'User name/Company name', 'autofocus'=>'autofocus')); ?>
	<?php echo $form->error($model,'name'); ?>
    <?php echo $form->passwordField($model,'password',array('class'=>'form-control', 'placeholder'=>'Password')); ?>
	<?php echo $form->error($model,'password'); ?>
	<input type="password" class="form-control" name="confirm_password" value="" placeholder="Re-type password">

	<label class="checkbox">
    	<input type="checkbox" name="agree_terms" <?=($_REQUEST['agree_terms'])?'checked':''?> value="agree this condition"> I agree to the Terms of Service and Privacy Policy
    </label>
    
    <?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-lg btn-login btn-block')); ?>

    <div class="registration">
        Already Registered.
    	<a class="" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/">Login</a>
    </div>

</div>
<?php $this->endWidget(); ?>