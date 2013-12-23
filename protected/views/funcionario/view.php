<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->cod_funcionario,
);

$this->menu=array(
	array('label'=>'List Funcionario', 'url'=>array('index')),
	array('label'=>'Create Funcionario', 'url'=>array('create')),
	array('label'=>'Update Funcionario', 'url'=>array('update', 'id'=>$model->cod_funcionario)),
	array('label'=>'Delete Funcionario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_funcionario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>

<h1>View Funcionario #<?php echo $model->cod_funcionario; ?></h1>

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
