<?php
/* @var $this FornecedorController */
/* @var $model Fornecedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fornecedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos <span class="required">*</span> Obrigat&oacute;rios.</p>

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
		<?php echo $form->labelEx($model,'nome_fantasia'); ?>
		<?php echo $form->textField($model,'nome_fantasia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome_fantasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razao_social'); ?>
		<?php echo $form->textField($model,'razao_social',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'razao_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inscricao_estadual'); ?>
		<?php echo $form->textField($model,'inscricao_estadual',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'inscricao_estadual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_com'); ?>
		<?php echo $form->textField($model,'telefone_com',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telefone_com'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_cel'); ?>
		<?php echo $form->textField($model,'telefone_cel',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telefone_cel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'representante'); ?>
		<?php echo $form->textField($model,'representante',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_rep'); ?>
		<?php echo $form->textField($model,'telefone_rep',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telefone_rep'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->