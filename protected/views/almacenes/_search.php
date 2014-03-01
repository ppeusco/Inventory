<?php
/* @var $this AlmacenesController */
/* @var $model Almacen */
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
        <?php echo $form->label($model, 'id', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'id'); ?>
        </div>     
    </div>

    <div class="control-group">
        <?php echo $form->label($model, 'descripcion', array('class' => 'control-label')); ?>
         <div class="controls">
            <?php echo $form->textField($model, 'descripcion', array('size' => 50, 'maxlength' => 50)); ?>
         </div>
    </div>

<div class="control-group">
    <?php echo $form->label($model, 'capacidad', array('class' => 'control-label')); ?>
    <div class="controls">
        <?php echo $form->textField($model, 'capacidad'); ?>
    </div>    
</div>

<div class="control-group">
    <div class="controls">
    <?php echo CHtml::submitButton('Search', array('class' => 'btn')); ?>
</div>     
</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->