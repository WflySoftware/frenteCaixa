<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filiais'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Filiais', 'url'=>array('index')),
	array('label'=>'Manipular Filial', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Filial</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>