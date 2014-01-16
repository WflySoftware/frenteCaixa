<?php
/* @var $this FilialController */
/* @var $data Filial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_filial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_filial), array('view', 'id'=>$data->cod_filial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_caixa')); ?>:</b>
	<?php echo CHtml::encode($data->estado_caixa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pontos')); ?>:</b>
	<?php echo CHtml::encode($data->pontos); ?>
	<br />


</div>