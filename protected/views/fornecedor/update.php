<?php
/* @var $this FornecedorController */
/* @var $model Fornecedor */

$this->breadcrumbs=array(
	'Fornecedors'=>array('index'),
	$model->cod_fornecedor=>array('view','id'=>$model->cod_fornecedor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fornecedor', 'url'=>array('index')),
	array('label'=>'Create Fornecedor', 'url'=>array('create')),
	array('label'=>'View Fornecedor', 'url'=>array('view', 'id'=>$model->cod_fornecedor)),
	array('label'=>'Manage Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Update Fornecedor <?php echo $model->cod_fornecedor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>