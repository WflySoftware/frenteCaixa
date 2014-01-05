<?php
/* @var $this ServicoController */
/* @var $model Servico */

$this->breadcrumbs=array(
	'Serviços'=>array('index'),
	'Cadastro',
);

$this->menu=array(
	array('label'=>'Listar Serviços', 'url'=>array('index')),
	array('label'=>'Manipular Serviço', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Servico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>