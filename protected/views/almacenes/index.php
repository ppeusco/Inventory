<?php
/* @var $this AlmacenesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almacenes',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#almacen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Almacenes</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="pull-right">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Add new',
        'url'=>array('create'),
    )); ?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'almacen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'capacidad',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

