<?php
/* @var $this FornecedorController */
/* @var $data Fornecedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_fornecedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_fornecedor), array('view', 'id'=>$data->cod_fornecedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filial_cod_filial')); ?>:</b>
	<?php echo CHtml::encode($data->filial_cod_filial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_fantasia')); ?>:</b>
	<?php echo CHtml::encode($data->nome_fantasia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->cnpj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razao_social')); ?>:</b>
	<?php echo CHtml::encode($data->razao_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inscricao_estadual')); ?>:</b>
	<?php echo CHtml::encode($data->inscricao_estadual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_com')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_com); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_cel')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_cel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representante')); ?>:</b>
	<?php echo CHtml::encode($data->representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_rep')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_rep); ?>
	<br />

	*/ ?>

</div>