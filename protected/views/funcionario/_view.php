<?php
/* @var $this FuncionarioController */
/* @var $data Funcionario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_funcionario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_funcionario), array('view', 'id'=>$data->cod_funcionario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filial_cod_filial')); ?>:</b>
	<?php echo CHtml::encode($data->filial_cod_filial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpf')); ?>:</b>
	<?php echo CHtml::encode($data->cpf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rg')); ?>:</b>
	<?php echo CHtml::encode($data->rg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgao')); ?>:</b>
	<?php echo CHtml::encode($data->orgao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_expedicao')); ?>:</b>
	<?php echo CHtml::encode($data->data_expedicao); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->data_nascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_cel')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_cel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_casa')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_casa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_admissao')); ?>:</b>
	<?php echo CHtml::encode($data->data_admissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salario')); ?>:</b>
	<?php echo CHtml::encode($data->salario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcao')); ?>:</b>
	<?php echo CHtml::encode($data->funcao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banco')); ?>:</b>
	<?php echo CHtml::encode($data->banco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agencia')); ?>:</b>
	<?php echo CHtml::encode($data->agencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conta')); ?>:</b>
	<?php echo CHtml::encode($data->conta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	*/ ?>

</div>