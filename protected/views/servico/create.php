<?php
/* @var $this ServicoController */
/* @var $model Servico */

$this->breadcrumbs=array(
	'Serviços'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Serviços', 'url'=>array('index')),
	array('label'=>'Manipular Serviç', 'url'=>array('admin')),
);
?>

<h1>Create Servico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>