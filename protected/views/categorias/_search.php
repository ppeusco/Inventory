<?php
/* @var $this CategoriasController */
/* @var $model Categoria */
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
        <?php echo $form->labelEx($model, 'descripcion', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'descripcion', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->error($model, 'descripcion'); ?>    
        </div>
    </div>

    <div class="control-group">
            <div class="controls">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
            </div>    
	</div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->