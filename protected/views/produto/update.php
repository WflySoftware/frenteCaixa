<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->cod_produto=>array('view','id'=>$model->cod_produto),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Produtos', 'url'=>array('index')),
	array('label'=>'Cadastrar Produto', 'url'=>array('create')),
	array('label'=>'Ver Produto', 'url'=>array('view', 'id'=>$model->cod_produto)),
	array('label'=>'Manipular Produto', 'url'=>array('admin')),
);
?>

<h1>Editar Produto ID:<?php echo $model->cod_produto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>