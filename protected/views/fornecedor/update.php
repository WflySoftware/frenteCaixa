<?php
/* @var $this FornecedorController */
/* @var $model Fornecedor */

$this->breadcrumbs=array(
	'Fornecedores'=>array('index'),
	$model->cod_fornecedor=>array('view','id'=>$model->cod_fornecedor),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Fornecedores', 'url'=>array('index')),
	array('label'=>'Cadastrar Fornecedor', 'url'=>array('create')),
	array('label'=>'Ver Fornecedor', 'url'=>array('view', 'id'=>$model->cod_fornecedor)),
	array('label'=>'Manipular Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Editar Fornecedor ID:<?php echo $model->cod_fornecedor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>