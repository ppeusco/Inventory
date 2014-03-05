<?php
/* @var $this CategoriasController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);


?>

<h1>Update Categoria </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>