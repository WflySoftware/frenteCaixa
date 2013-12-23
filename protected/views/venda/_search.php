<?php
/* @var $this VendaController */
/* @var $model Venda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_venda'); ?>
		<?php echo $form->textField($model,'cod_venda',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filial_cod_filial'); ?>
		<?php echo $form->textField($model,'filial_cod_filial',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcionario_cod_funcionario'); ?>
		<?php echo $form->textField($model,'funcionario_cod_funcionario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_cod_cliente'); ?>
		<?php echo $form->textField($model,'cliente_cod_cliente',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_2'); ?>
		<?php echo $form->textField($model,'data_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_total'); ?>
		<?php echo $form->textField($model,'valor_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_pagamento'); ?>
		<?php echo $form->textField($model,'forma_pagamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->