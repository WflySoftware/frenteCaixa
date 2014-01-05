<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionários'=>array('index'),
	'Cadastro',
);

$this->menu=array(
	array('label'=>'Listar Funcionário', 'url'=>array('index')),
	array('label'=>'Manipular Funcionário', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Funcion&aacute;rio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>