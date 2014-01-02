<?php
/* @var $this FornecedorController */
/* @var $model Fornecedor */

$this->breadcrumbs=array(
	'Fornecedor'=>array('index'),
	'Manipular',
);

$this->menu=array(
	array('label'=>'Listar Fornecedor', 'url'=>array('index')),
	array('label'=>'Cadastrar Fornecedor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fornecedor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manipular Fornecedores</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fornecedor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_fornecedor',
		'filial_cod_filial',
		'nome_fantasia',
		'cnpj',
		'razao_social',
		'inscricao_estadual',
		/*
		'estado',
		'email',
		'endereco',
		'telefone_com',
		'telefone_cel',
		'cidade',
		'representante',
		'telefone_rep',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
