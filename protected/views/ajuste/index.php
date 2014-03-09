<?php

/* @var $this AjusteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ajuste',
);
?>

<?php if (Yii::app()->user->hasFlash('success')): ?>
	<div class="alert alert-success">
		<?php echo Yii::app()->user->getFlash('success'); ?>
	</div>
<?php endif ?>

<?php if (Yii::app()->user->hasFlash('error')): ?>
	<div class="alert">
		<?php echo Yii::app()->user->getFlash('errror'); ?>
	</div>
<?php endif ?>

<div class="form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ajuste-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'producto', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'producto', Producto::toList(),array('empty'=>'Select....')); ?>
            <?php echo $form->error($model, 'producto'); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'almacen', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'almacen',Almacen::toList(),array('empty'=>'Select....')); ?>
            <?php echo $form->error($model, 'almacen'); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo $form->labelEx($model, 'signo', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'signo',$model->signosList(),array('empty' => 'Select...')); ?>
            <?php echo $form->error($model, 'signo'); ?>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo $form->labelEx($model, 'cantidad', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'cantidad', array('size' => 50, 'maxlength' => 50,)); ?>
            <?php echo $form->error($model, 'cantidad'); ?>
        </div>
    </div>

    

	<div class="control-group">
            <div class="controls">
		<?php echo CHtml::submitButton('Adjust',array('class'=>'btn btn-primary')); ?>
            </div>  
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


