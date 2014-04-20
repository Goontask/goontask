<?php
    /* @var $this TasksController */
    /* @var $model tasks */
    /* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tasks-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
)); ?>
<div id="wizard">
    <h2>Task Info</h2>

    <section>
        <div class="form-horizontal">
            <div class="form-group">
                <?php echo $form->labelEx($model, 'name', array('class'=>'col-lg-2 control-label')); ?>
                <div class="col-lg-8">
                    <?php echo $form->textField($model, 'name', array('class'=>'form-control', 'placeholder'=>'Name', 'size' => 60, 'maxlength' => 255)); ?>
                    <?php echo $form->error($model, 'name', array('class' => 'help-block')); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'description', array('class'=>'col-lg-2 control-label')); ?>
                <div class="col-lg-8">
                    <!--<div class="form-control ck_input_form" style="width: 612px; height: 134px;" contenteditable="true">Description</div>-->
                    <?php echo $form->textArea($model, 'description', array('class'=>'form-control', 'placeholder'=>'Description', 'contenteditable'=>'true', 'rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model, 'description', array('class' => 'help-block')); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'checklist', array('class'=>'col-lg-2 control-label')); ?>
                <div class="col-lg-8">
                    <div class="input-group">
                    <?php echo $form->textField($model, 'checklist', array('class'=>'form-control', 'size'=>60, 'placeholder'=>'Check list')); ?>
                        <div class="spinner-buttons input-group-btn">
                            <button type="button" class="btn spinner-up btn-primary add-input">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <?php echo $form->error($model, 'checklist', array('class' => 'help-block')); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'start_date', array('class'=>'control-label col-lg-2')); ?>
                <div class="col-md-4">
                    <div class="input-group date form_datetime-component">
                        <?php echo $form->textField($model, 'start_date', array('class'=>'form-control', 'data-provide'=>'datetimepicker')); ?>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary date-set"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'end_date', array('class'=>'control-label col-lg-2')); ?>
                <div class="col-md-4">
                    <div class="input-group date form_datetime-component">
                        <?php echo $form->textField($model, 'end_date', array('class'=>'form-control', 'data-provide'=>'datetimepicker')); ?>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary date-set"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2>Participants</h2>
    <section>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-2 control-label">Phone</label>

                <div class="col-lg-8">
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Mobile</label>

                <div class="col-lg-8">
                    <input type="text" class="form-control" placeholder="Mobile">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Address</label>

                <div class="col-lg-8">
                    <textarea class="form-control" cols="60" rows="5"></textarea>
                </div>
            </div>
        </form>
    </section>

    <h2>Complete</h2>
    <section>
        <p>Congratulations This is the Final Step</p>
    </section>
</div>

<?php $this->endWidget(); ?>