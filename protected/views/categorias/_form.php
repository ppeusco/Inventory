<?php
/* @var $this CategoriasController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'descripcion', array('class'=>'control-label')); ?>
                <div class="controls">
                    <?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>50)); ?>
                    <?php echo $form->error($model,'descripcion'); ?>    
                </div>
	</div>

	<div class="control-group">
            <div class="controls">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
            </div>    
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->