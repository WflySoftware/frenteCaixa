<?php
/* @var $this ServicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serviços',
);

$this->menu=array(
	array('label'=>'Cadastrar Serviço', 'url'=>array('create')),
	array('label'=>'Manipular Serviço', 'url'=>array('admin')),
);
?>

<h1>Servi&ccedil;os</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
