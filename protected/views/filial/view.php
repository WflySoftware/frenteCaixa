<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filiais'=>array('index'),
	$model->cod_filial,
);

$this->menu=array(
	array('label'=>'Listar Filiais', 'url'=>array('index')),
	array('label'=>'Cadastrar Filial', 'url'=>array('create')),
	array('label'=>'Editar Filial', 'url'=>array('update', 'id'=>$model->cod_filial)),
	array('label'=>'Deletar Filial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_filial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manipular Filial', 'url'=>array('admin')),
);
?>

<h1>Ver Filial ID:<?php echo $model->cod_filial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_filial',
		'nome',
		'endereco',
		'estado_caixa',
		'pontos',
	),
)); ?>
