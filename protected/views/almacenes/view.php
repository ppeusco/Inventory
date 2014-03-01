<?php
/* @var $this AlmacenesController */
/* @var $model Almacen */

$this->breadcrumbs=array(
	'Almacenes'=>array('index'),
	$model->id,
);

?>

<h1>View Almacen </h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'capacidad',
	),
)); ?>
