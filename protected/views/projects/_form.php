<?php
    /* @var $this ProjectsController */
    /* @var $model Projects */
    /* @var $form CActiveForm */
?>


<?php $form = $this->beginWidget(
    'CActiveForm',
    array(
        'id'                   => 'projects-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions'          => array(
            'class' => 'form-horizontal bucket-form',
        ),
    )
); ?>

    <p class="text-warning">Fields with <span class="required">*</span> are required.</p>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'name',
                array('class' => 'form-control', 'size' => 60, 'maxlength' => 255)
            ); ?>
            <?php echo $form->error($model, 'name', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textArea(
                $model,
                'description',
                array('class' => 'form-control', 'rows' => 6, 'cols' => 50)
            ); ?>
            <?php echo $form->error($model, 'description', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'created_by', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField($model, 'created_by', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'created_by', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'start', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'start',
                array('class' => 'form-control form-control-inline input-medium default-date-picker')
            ); ?>
            <?php echo $form->error($model, 'start', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'deadline', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'deadline',
                array('class' => 'form-control form-control-inline input-medium default-date-picker')
            ); ?>
            <?php echo $form->error($model, 'deadline', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'private_or_public', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'private_or_public',
                array('class' => 'form-control', 'size' => 1, 'maxlength' => 1)
            ); ?>
            <?php echo $form->error($model, 'private_or_public', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'status',
                array('class' => 'form-control', 'size' => 1, 'maxlength' => 1)
            ); ?>
            <?php echo $form->error($model, 'status', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'members', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'members',
                array('class' => 'form-control', 'size' => 60, 'maxlength' => 400)
            ); ?>
            <?php echo $form->error($model, 'members', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'logo', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'logo',
                array('class' => 'form-control', 'size' => 60, 'maxlength' => 255)
            ); ?>
            <?php echo $form->error($model, 'logo', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'files', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField(
                $model,
                'files',
                array('class' => 'form-control', 'size' => 60, 'maxlength' => 255)
            ); ?>
            <?php echo $form->error($model, 'files', array('class' => 'help-block')); ?>
        </div>
    </div>

    <div class="row buttons form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <?php echo CHtml::submitButton(
                $model->isNewRecord ? 'Create' : 'Save',
                array('class' => 'btn btn-info')
            ); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>