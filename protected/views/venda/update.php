<?php
/* @var $this VendaController */
/* @var $model Venda */

$this->breadcrumbs=array(
	'Vendas'=>array('index'),
	$model->cod_venda=>array('view','id'=>$model->cod_venda),
	'Update',
);

$this->menu=array(
	array('label'=>'List Venda', 'url'=>array('index')),
	array('label'=>'Create Venda', 'url'=>array('create')),
	array('label'=>'View Venda', 'url'=>array('view', 'id'=>$model->cod_venda)),
	array('label'=>'Manage Venda', 'url'=>array('admin')),
);
?>

<h1>Update Venda <?php echo $model->cod_venda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>