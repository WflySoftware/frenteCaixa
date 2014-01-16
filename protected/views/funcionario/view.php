<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionários'=>array('index'),
	$model->cod_funcionario,
);

$this->menu=array(
	array('label'=>'Listar Funcionários', 'url'=>array('index')),
	array('label'=>'Cadastrar Funcionário', 'url'=>array('create')),
	array('label'=>'Editar Funcionário', 'url'=>array('update', 'id'=>$model->cod_funcionario)),
	array('label'=>'Deletar Funcionário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_funcionario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manipular Funcionários', 'url'=>array('admin')),
);
?>

<h1>Ver Funcionário ID:<?php echo $model->cod_funcionario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_funcionario',
		'filial_cod_filial',
		'nome',
		'cpf',
		'rg',
		'orgao',
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
	),
)); ?>
