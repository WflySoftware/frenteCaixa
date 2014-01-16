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

	<div class="row">
		<?php echo $form->label($model,'funcionario_cod_funcionario'); ?>
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

	<div class="row">
		<?php echo $form->label($model,'cliente_cod_cliente'); ?>
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
		<?php echo $form->label($model,'data_2'); ?>
		<?php echo $form->textField($model,'data_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_total'); ?>
		<?php echo $form->textField($model,'valor_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_pagamento'); ?>
		<?php 
			echo $form->dropDownList($model, 'forma_pagamento',array("Dinheiro"=>'Dinheiro', "Cheque"=> 'Cheque',"Cartão de Débito"=>'Cartão de Débito',
			 "Cartão de Crédito À Vista"=>'Cartão de Crédito À Vista', "Cartão de Crédito Parcelado"=>'Cartão de Crédito Parcelado')
   			); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->