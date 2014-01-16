<?php
/* @var $this FuncionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcionários',
);

$this->menu=array(
	array('label'=>'Cadastrar Funcionário', 'url'=>array('create')),
	array('label'=>'Manipular Funcionário', 'url'=>array('admin')),
);
?>

<h1>Funcion&aacute;rios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
