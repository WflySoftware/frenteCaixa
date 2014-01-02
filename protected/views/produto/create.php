<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Produto', 'url'=>array('index')),
	array('label'=>'Manipular Produtos', 'url'=>array('admin')),
);
?>

<h1>Criar Produto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>