<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->cod_produto,
);

$this->menu=array(
	array('label'=>'Listar Produto', 'url'=>array('index')),
	array('label'=>'Cadastrar Produto', 'url'=>array('create')),
	array('label'=>'Atualizar Produto', 'url'=>array('update', 'id'=>$model->cod_produto)),
	array('label'=>'Deletar Produto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_produto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manipular Produto', 'url'=>array('admin')),
);
?>

<h1>Ver Produto ID:<?php echo $model->cod_produto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_produto',
		'filial_cod_filial',
		'descricao',
		'valor_compra',
		'valor_venda',
		'cod_barras',
		'quantidade',
		'data_aquisicao',
		'data_validade',
	),
)); ?>
