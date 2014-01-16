<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Manipular Cliente', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>