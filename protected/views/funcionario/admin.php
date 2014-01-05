<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionários'=>array('index'),
	'Manipular',
);

$this->menu=array(
	array('label'=>'Listar Funcionários', 'url'=>array('index')),
	array('label'=>'Cadastrar Funcionário', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#funcionario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manipular Funcion&aacute;rios</h1>

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
	'id'=>'funcionario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod_funcionario',
		'filial_cod_filial',
		'nome',
		'cpf',
		'rg',
		'orgao',
		/*
		'data_expedicao',
		'data_nascimento',
		'telefone_cel',
		'telefone_casa',
		'endereco',
		'tipo_contrato',
		'data_admissao',
		'salario',
		'email',
		'login',
		'senha',
		'funcao',
		'banco',
		'agencia',
		'conta',
		'cidade',
		'cargo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
