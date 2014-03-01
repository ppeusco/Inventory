<?php
/* @var $this AlmacenesController */
/* @var $model Almacen */

$this->breadcrumbs=array(
	'Almacenes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Update Almacen </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>