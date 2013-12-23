<?php
/* @var $this VendaController */
/* @var $model Venda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="input">
		<?php echo $form->labelEx($model,'filial_cod_filial'); ?>
		<?php 
			$arrayFiliais = $this->consultarFiliais();
			for($i=0,$aux = 1;$i<count($arrayFiliais);$i++) {
				$auxArrayFiliais[$aux] = $arrayFiliais[$i]['nome'];
				$aux++;
			}
			
			echo $form->dropDownList($model, 'filial_cod_filial',$auxArrayFiliais
   				); 
			
		?>
	</div>
	<div class="input">
		<?php echo $form->labelEx($model,'funcionario_cod_funcionario'); ?>
		<?php 
			$arrayFuncionario = $this->consultarFuncionarios();
			for($i=0,$aux = 1;$i<count($arrayFuncionario);$i++) {
				$auxArrayFuncionario[$aux] = $arrayFuncionario[$i]['nome'];
				$aux++;
			}
			
			echo $form->dropDownList($model, 'funcionario_cod_funcionario',$auxArrayFuncionario
   				); 
			
		?>
	</div>
	<div class="input">
		<?php echo $form->labelEx($model,'cliente_cod_cliente'); ?>
		<?php 
			$arrayCliente = $this->consultarClientes();
			for($i=0,$aux = 1;$i<count($arrayCliente);$i++) {
				$auxArrayCliente[$aux] = $arrayCliente[$i]['nome'];
				$aux++;
			}
			
			echo $form->dropDownList($model, 'cliente_cod_cliente',$auxArrayCliente
   				); 
			
		?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'data_2'); ?>
		<?php echo $form->textField($model,'data_2'); ?>
		<?php echo $form->error($model,'data_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_total'); ?>
		<?php echo $form->textField($model,'valor_total'); ?>
		<?php echo $form->error($model,'valor_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_pagamento'); ?>
		<?php echo $form->textField($model,'forma_pagamento'); ?>
		<?php echo $form->error($model,'forma_pagamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->