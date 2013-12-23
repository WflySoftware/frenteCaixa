<?php
/* @var $this ServicoController */
/* @var $model Servico */

$this->breadcrumbs=array(
	'Servicos'=>array('index'),
	$model->cod_servico=>array('view','id'=>$model->cod_servico),
	'Update',
);

$this->menu=array(
	array('label'=>'List Servico', 'url'=>array('index')),
	array('label'=>'Create Servico', 'url'=>array('create')),
	array('label'=>'View Servico', 'url'=>array('view', 'id'=>$model->cod_servico)),
	array('label'=>'Manage Servico', 'url'=>array('admin')),
);
?>

<h1>Update Servico <?php echo $model->cod_servico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>