<?php
/* @var $this ProdutoController */
/* @var $data Produto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_produto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_produto), array('view', 'id'=>$data->cod_produto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filial_cod_filial')); ?>:</b>
	<?php echo CHtml::encode($data->filial_cod_filial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_compra')); ?>:</b>
	<?php echo CHtml::encode($data->valor_compra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_venda')); ?>:</b>
	<?php echo CHtml::encode($data->valor_venda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_barras')); ?>:</b>
	<?php echo CHtml::encode($data->cod_barras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
	<?php echo CHtml::encode($data->quantidade); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('data_aquisicao')); ?>:</b>
	<?php echo CHtml::encode($data->data_aquisicao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_validade')); ?>:</b>
	<?php echo CHtml::encode($data->data_validade); ?>
	<br />

	*/ ?>

</div>