<?php
/* @var $this ServicoController */
/* @var $model Servico */

$this->breadcrumbs=array(
	'Serviços'=>array('index'),
	$model->cod_servico=>array('view','id'=>$model->cod_servico),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Servicos', 'url'=>array('index')),
	array('label'=>'Cadastrar Serviço', 'url'=>array('create')),
	array('label'=>'Ver Serviços', 'url'=>array('view', 'id'=>$model->cod_servico)),
	array('label'=>'Manipular Serviços', 'url'=>array('admin')),
);
?>

<h1>Editar Servico ID:<?php echo $model->cod_servico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>