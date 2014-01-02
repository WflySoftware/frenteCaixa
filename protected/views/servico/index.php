<?php
/* @var $this ServicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serviços',
);

$this->menu=array(
	array('label'=>'Criar Servico', 'url'=>array('create')),
	array('label'=>'Manipular Servico', 'url'=>array('admin')),
);
?>

<h1>Servicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
