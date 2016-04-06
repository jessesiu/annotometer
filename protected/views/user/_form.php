<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institute'); ?>
		<?php echo $form->textField($model,'institute',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'institute'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iclikname'); ?>
		<?php echo $form->textField($model,'iclikname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'iclikname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hyponame'); ?>
		<?php echo $form->textField($model,'hyponame',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'hyponame'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mjournal'); ?>
		<?php echo $form->checkBox($model,'mjournal'); ?>
		<?php echo $form->error($model,'mjournal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mgigadb'); ?>
		<?php echo $form->checkBox($model,'mgigadb'); ?>
		<?php echo $form->error($model,'mgigadb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mhypo'); ?>
		<?php echo $form->checkBox($model,'mhypo'); ?>
		<?php echo $form->error($model,'mhypo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miclik'); ?>
		<?php echo $form->checkBox($model,'miclik'); ?>
		<?php echo $form->error($model,'miclik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'misb'); ?>
		<?php echo $form->checkBox($model,'misb'); ?>
		<?php echo $form->error($model,'misb'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->