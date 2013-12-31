<?php
/* @var $this VendaController */
/* @var $model Venda */

$this->breadcrumbs=array(
	'Vendas'=>array('index'),
	$model->cod_venda=>array('view','id'=>$model->cod_venda),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'Listar Vendas', 'url'=>array('index')),
	array('label'=>'Criar Venda', 'url'=>array('create')),
	array('label'=>'Ver Venda', 'url'=>array('view', 'id'=>$model->cod_venda)),
	array('label'=>'Manipular Venda', 'url'=>array('admin')),
);
?>

<h1>Atualizar Venda <?php echo $model->cod_venda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>