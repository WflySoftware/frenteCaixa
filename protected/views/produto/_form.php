<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos <span class="required">*</span> obrigat&oacute;rios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="input">
		<?php echo $form->labelEx($model,'filial_cod_filial'); ?>
		<?php 
			$arrayFiliais = $this->consultarFiliais();
			for($i=0,$aux = 1;$i<count($arrayFiliais);$i++) {
				$auxArrayFiliais[$aux] = $arrayFiliais[$i]['nome'];
				$aux++;
			}
			
			echo $form->dropDownList($model, 'filial_cod_filial',$auxArrayFiliais
   				); 
			
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_compra'); ?>
		<?php echo $form->textField($model,'valor_compra'); ?>
		<?php echo $form->error($model,'valor_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_venda'); ?>
		<?php echo $form->textField($model,'valor_venda'); ?>
		<?php echo $form->error($model,'valor_venda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_barras'); ?>
		<?php echo $form->textField($model,'cod_barras',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cod_barras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade'); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_aquisicao'); ?>
		<?php echo $form->textField($model,'data_aquisicao'); ?>
		<?php echo $form->error($model,'data_aquisicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_validade'); ?>
		<?php echo $form->textField($model,'data_validade'); ?>
		<?php echo $form->error($model,'data_validade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->