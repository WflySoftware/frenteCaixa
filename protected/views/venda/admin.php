<?php
/* @var $this VendaController */
/* @var $model Venda */

$this->breadcrumbs=array(
	'Vendas'=>array('index'),
	'Manipular',
);

$this->menu=array(
	array('label'=>'Listar Vendas', 'url'=>array('index')),
	array('label'=>'Criar Venda', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#venda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manipular Vendas</h1>

<p>
Você também pode pesquisar pelos operadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>), no início de cada um dos seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'venda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_venda',
		'filial_cod_filial',
		'funcionario_cod_funcionario',
		'cliente_cod_cliente',
		'data_2',
		'valor_total',
		'forma_pagamento',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
