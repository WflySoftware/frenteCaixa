<?php
/* @var $this VendaController */
/* @var $model Venda */

$this->breadcrumbs=array(
	'Vendas'=>array('index'),
	$model->cod_venda,
);

$this->menu=array(
	array('label'=>'List Venda', 'url'=>array('index')),
	array('label'=>'Create Venda', 'url'=>array('create')),
	array('label'=>'Update Venda', 'url'=>array('update', 'id'=>$model->cod_venda)),
	array('label'=>'Delete Venda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_venda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Venda', 'url'=>array('admin')),
);
?>

<h1>View Venda #<?php echo $model->cod_venda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_venda',
		'filial_cod_filial',
		'funcionario_cod_funcionario',
		'cliente_cod_cliente',
		'data_2',
		'valor_total',
		'forma_pagamento',
	),
)); ?>
