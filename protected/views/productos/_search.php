<?php
/* @var $this ProductosController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'id', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'id'); ?>
            <?php echo $form->error($model, 'id'); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'codigo', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'codigo', array('size' => 20, 'maxlength' => 20)); ?>
            <?php echo $form->error($model, 'codigo'); ?>
        </div>
    </div>


    <div class="control-group">
        <?php echo $form->labelEx($model, 'nombre', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 255)); ?>
            <?php echo $form->error($model, 'nombre'); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'descripcion', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textArea($model, 'descripcion', array('rows' => 6, 'cols' => 50)); ?>
            <?php echo $form->error($model, 'descripcion'); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'categoria_id', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'categoria_id'); ?>
            <?php echo $form->error($model, 'categoria_id'); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo CHtml::submitButton('Search', array('class' => 'btn')); ?>
        </div>    
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->