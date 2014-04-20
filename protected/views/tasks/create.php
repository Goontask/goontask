<?php
    /* @var $this TasksController */
    /* @var $model tasks */
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Create Tasks</header>
            <div class="panel-body">
                <p class="text-warning">Fields with <span class="required">*</span> are required.</p>
                <?php $this->renderPartial('_form', array('model' => $model)); ?>
            </div>
        </section>
    </div>
</div>