<?php
/* @var $this VendaController */
/* @var $data Venda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_venda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_venda), array('view', 'id'=>$data->cod_venda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filial_cod_filial')); ?>:</b>
	<?php echo CHtml::encode($data->filial_cod_filial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcionario_cod_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->funcionario_cod_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_cod_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_cod_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_2')); ?>:</b>
	<?php echo CHtml::encode($data->data_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_total')); ?>:</b>
	<?php echo CHtml::encode($data->valor_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pagamento')); ?>:</b>
	<?php echo CHtml::encode($data->forma_pagamento); ?>
	<br />


</div>