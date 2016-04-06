<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institute'); ?>
		<?php echo $form->textField($model,'institute',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iclikname'); ?>
		<?php echo $form->textField($model,'iclikname',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hyponame'); ?>
		<?php echo $form->textField($model,'hyponame',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mjournal'); ?>
		<?php echo $form->checkBox($model,'mjournal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mgigadb'); ?>
		<?php echo $form->checkBox($model,'mgigadb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mhypo'); ?>
		<?php echo $form->checkBox($model,'mhypo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'miclik'); ?>
		<?php echo $form->checkBox($model,'miclik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'misb'); ?>
		<?php echo $form->checkBox($model,'misb'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->