<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array(
			'class' => 'form-signin',
			)
)); ?>
	<h2 class="form-signin-heading">sign in now</h2>
	<div class="login-wrap">
            <div class="user-login-info">
				<?php echo $form->textField($model,'email',array('class'=>'form-control', 'placeholder'=>'Login', 'autofocus'=>'autofocus')); ?>
				<?php echo $form->error($model,'email'); ?>
				<?php echo $form->passwordField($model,'password',array('class'=>'form-control', 'placeholder'=>'Password')); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		
		<label class="checkbox">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
		Remember me
			<span class="pull-right">
            	<a data-toggle="modal" class="ajax" data-href="/users/forgotpassword" href="#myModal"> Forgot Password?</a>
            </span>
		</label>

		<?php echo CHtml::submitButton('SIGN IN', array('class'=>'btn btn-lg btn-login btn-block')); ?>

		<div class="registration">
            Don't have an account yet?
        	<a class="" href="/users/register">
            	Create an account
            </a>
       	</div>
	</div>
	

<?php $this->endWidget(); ?>
<a data-toggle="modal" class="form-back" href="#myModal3"> Forgot Password?</a>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
</div>
<!-- modal -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Notification</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger ok-button-yii" type="button"> Ok</button>
            </div>
        </div>
    </div>
</div>