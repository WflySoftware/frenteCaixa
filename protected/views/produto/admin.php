<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	'Manipular',
);

$this->menu=array(
	array('label'=>'Listar Produto', 'url'=>array('index')),
	array('label'=>'Criar Produto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#produto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manipular Produtos</h1>

<p>
Voc&ecirc;  tamb&eacute;m pode pesquisar pelos operadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>), no in&iacute;cio de cada um dos seus valores de pesquisa para especificar como a compara&ccedil;&atilde;o deve ser feita.
</p>

<?php echo CHtml::link('Pesquisa Avan&ccedil;ada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'produto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_produto',
		'filial_cod_filial',
		'descricao',
		'valor_compra',
		'valor_venda',
		'cod_barras',
		/*
		'quantidade',
		'data_aquisicao',
		'data_validade',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
