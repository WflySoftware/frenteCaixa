<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filials'=>array('index'),
	$model->cod_filial=>array('view','id'=>$model->cod_filial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Filial', 'url'=>array('index')),
	array('label'=>'Create Filial', 'url'=>array('create')),
	array('label'=>'View Filial', 'url'=>array('view', 'id'=>$model->cod_filial)),
	array('label'=>'Manage Filial', 'url'=>array('admin')),
);
?>

<h1>Update Filial <?php echo $model->cod_filial; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>