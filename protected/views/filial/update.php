<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filiais'=>array('index'),
	$model->cod_filial=>array('view','id'=>$model->cod_filial),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Filiais', 'url'=>array('index')),
	array('label'=>'Cadastrar Filial', 'url'=>array('create')),
	array('label'=>'Ver Filial', 'url'=>array('view', 'id'=>$model->cod_filial)),
	array('label'=>'Manipularfa Filial', 'url'=>array('admin')),
);
?>

<h1>Editar Filial ID:<?php echo $model->cod_filial; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>