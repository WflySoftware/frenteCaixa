<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->cod_produto=>array('view','id'=>$model->cod_produto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Produto', 'url'=>array('index')),
	array('label'=>'Create Produto', 'url'=>array('create')),
	array('label'=>'View Produto', 'url'=>array('view', 'id'=>$model->cod_produto)),
	array('label'=>'Manage Produto', 'url'=>array('admin')),
);
?>

<h1>Update Produto <?php echo $model->cod_produto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>