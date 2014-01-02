<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionários'=>array('index'),
	$model->cod_funcionario=>array('view','id'=>$model->cod_funcionario),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'Listar Funcionários', 'url'=>array('index')),
	array('label'=>'Cadastrar Funcionário', 'url'=>array('create')),
	array('label'=>'Ver Funcionário', 'url'=>array('view', 'id'=>$model->cod_funcionario)),
	array('label'=>'Manipular Funcionário', 'url'=>array('admin')),
);
?>

<h1>Atualizar Funcionario ID:<?php echo $model->cod_funcionario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>