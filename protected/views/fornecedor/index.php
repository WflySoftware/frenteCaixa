<?php
/* @var $this FornecedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fornecedores',
);

$this->menu=array(
	array('label'=>'Cadastrar Fornecedor', 'url'=>array('create')),
	array('label'=>'Manipular Fornecedor', 'url'=>array('admin')),
);
?>

<h1>Fornecedores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
