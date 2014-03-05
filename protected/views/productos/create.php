<?php
/* @var $this ProductosController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

?>

<h1>Create Producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>