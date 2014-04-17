<?php
/* @var $this TasksController */
/* @var $model tasks */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tasks', 'url'=>array('index')),
	array('label'=>'Create tasks', 'url'=>array('create')),
	array('label'=>'View tasks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tasks', 'url'=>array('admin')),
);
?>

<h1>Update tasks <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>