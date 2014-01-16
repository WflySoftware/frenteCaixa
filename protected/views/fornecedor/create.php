<?php
/* @var $this FornecedorController */
/* @var $model Fornecedor */

$this->breadcrumbs=array(
	'Fornecedores'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Fornecedores', 'url'=>array('index')),
	array('label'=>'Manipular Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Fornecedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>