<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->email), array('view', 'id'=>$data->email)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute')); ?>:</b>
	<?php echo CHtml::encode($data->institute); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('iclikname')); ?>:</b>
	<?php echo CHtml::encode($data->iclikname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hyponame')); ?>:</b>
	<?php echo CHtml::encode($data->hyponame); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mjournal')); ?>:</b>
	<?php echo CHtml::encode($data->mjournal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mgigadb')); ?>:</b>
	<?php echo CHtml::encode($data->mgigadb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mhypo')); ?>:</b>
	<?php echo CHtml::encode($data->mhypo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miclik')); ?>:</b>
	<?php echo CHtml::encode($data->miclik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('misb')); ?>:</b>
	<?php echo CHtml::encode($data->misb); ?>
	<br />

	*/ ?>

</div>