<?php
/* @var $this TasksController */
/* @var $model tasks */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List tasks', 'url'=>array('index')),
	array('label'=>'Create tasks', 'url'=>array('create')),
	array('label'=>'Update tasks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tasks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tasks', 'url'=>array('admin')),
);
?>

<h1>View tasks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'start_date',
		'end_date',
		'checklist',
		'status',
		'project',
		'created_by',
		'responsible',
		'members',
		'hours',
		'docs',
	),
)); ?>
