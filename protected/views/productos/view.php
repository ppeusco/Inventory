<?php
/* @var $this ProductosController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id,
);

?>

<h1>View Producto #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'codigo',
		'nombre',
		'descripcion',
		'categoria.descripcion',
	),
)); ?>
