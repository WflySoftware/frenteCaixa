<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filials'=>array('index'),
	$model->cod_filial,
);

$this->menu=array(
	array('label'=>'List Filial', 'url'=>array('index')),
	array('label'=>'Create Filial', 'url'=>array('create')),
	array('label'=>'Update Filial', 'url'=>array('update', 'id'=>$model->cod_filial)),
	array('label'=>'Delete Filial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_filial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Filial', 'url'=>array('admin')),
);
?>

<h1>View Filial #<?php echo $model->cod_filial; ?></h1>

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
