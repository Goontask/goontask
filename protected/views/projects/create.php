<?php
/* @var $this ProjectsController */
/* @var $model Projects */
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Create Projects</header>
            <div class="panel-body">
                    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
        </section>
    </div>
</div>