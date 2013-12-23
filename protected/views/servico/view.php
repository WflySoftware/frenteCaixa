<?php
/* @var $this ServicoController */
/* @var $model Servico */

$this->breadcrumbs=array(
	'Servicos'=>array('index'),
	$model->cod_servico,
);

$this->menu=array(
	array('label'=>'List Servico', 'url'=>array('index')),
	array('label'=>'Create Servico', 'url'=>array('create')),
	array('label'=>'Update Servico', 'url'=>array('update', 'id'=>$model->cod_servico)),
	array('label'=>'Delete Servico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_servico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servico', 'url'=>array('admin')),
);
?>

<h1>View Servico #<?php echo $model->cod_servico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_servico',
		'filial_cod_filial',
		'descricao',
		'valor',
	),
)); ?>
