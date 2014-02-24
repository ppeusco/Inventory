<?php
/* @var $this SiteController */
/* @var $model Usuario */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
	'Register',
);
?>

<h1>Register</h1>
<?php if (Yii::app()->user->hasFlash('error')): ?>
	<div class="alert">
		<?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
<?php endif ?>

<?php if (Yii::app()->user->hasFlash('error')): ?>
	<div class="alert">
		<?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
<?php endif ?>

<div class="form-horizontal">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'nick', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'nick'); ?>
			<?php echo $form->error($model,'nick'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php echo CHtml::submitButton('Register', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
