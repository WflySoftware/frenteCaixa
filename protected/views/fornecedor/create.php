<?php
/* @var $this FornecedorController */
/* @var $model Fornecedor */

$this->breadcrumbs=array(
	'Fornecedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Fornecedores', 'url'=>array('index')),
	array('label'=>'Manipular Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Criar Fornecedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>