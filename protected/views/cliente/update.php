<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cod_cliente=>array('view','id'=>$model->cod_cliente),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Cadastrar Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->cod_cliente)),
	array('label'=>'Manipular Cliente', 'url'=>array('admin')),
);
?>

<h1>Editar Cliente ID:<?php echo $model->cod_cliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>