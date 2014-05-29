<?php
/* @var $this TasksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tasks',
);

// tasks commit

$this->menu=array(
	array('label'=>'Create tasks', 'url'=>array('create')),
	array('label'=>'Manage tasks', 'url'=>array('admin')),
);
?>

<h1>Tasks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
