<?php
/* @var $this AlmacenesController */
/* @var $model Almacen */

$this->breadcrumbs=array(
	'Almacenes'=>array('index'),
	'Create',
);

?>

<h1>Create Almacen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>