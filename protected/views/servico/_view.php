<?php
/* @var $this ServicoController */
/* @var $data Servico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_servico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_servico), array('view', 'id'=>$data->cod_servico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filial_cod_filial')); ?>:</b>
	<?php echo CHtml::encode($data->filial_cod_filial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />


</div>