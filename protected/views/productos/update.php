<?php
/* @var $this ProductosController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Update Producto </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>