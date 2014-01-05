<?php
/* @var $this ServicoController */
/* @var $model Servico */

$this->breadcrumbs=array(
	'Serviços'=>array('index'),
	$model->cod_servico,
);

$this->menu=array(
	array('label'=>'Listar Serviço', 'url'=>array('index')),
	array('label'=>'Cadastrar Serviço', 'url'=>array('create')),
	array('label'=>'Editar Serviço', 'url'=>array('update', 'id'=>$model->cod_servico)),
	array('label'=>'Deletar Serviço', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_servico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manipular Serviço', 'url'=>array('admin')),
);
?>

<h1>Ver Serviço ID: <?php echo $model->cod_servico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_servico',
		'filial_cod_filial',
		'descricao',
		'valor',
	),
)); ?>
