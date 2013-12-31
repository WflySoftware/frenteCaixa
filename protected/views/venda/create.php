<?php
/* @var $this VendaController */
/* @var $model Venda */

$this->breadcrumbs=array(
	'Vendas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Vendas', 'url'=>array('index')),
	array('label'=>'Manipular Venda', 'url'=>array('admin')),
);
?>

<h1>Create Venda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>