<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cod_cliente,
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Cadastrar Cliente', 'url'=>array('create')),
	array('label'=>'Editar Cliente', 'url'=>array('update', 'id'=>$model->cod_cliente)),
	array('label'=>'Deletar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_cliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manipular Cliente', 'url'=>array('admin')),
);
?>

<h1>Ver Cliente ID:<?php echo $model->cod_cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_cliente',
		'filial_cod_filial',
		'nome',
		'cpf',
		'endereco',
		'telefone',
		'email',
		'data_nascimento',
	),
)); ?>
