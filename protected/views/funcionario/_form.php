<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos <span class="required">*</span> obrigatórios.</p>

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
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rg'); ?>
		<?php echo $form->textField($model,'rg',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orgao'); ?>
		<?php echo $form->textField($model,'orgao',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'orgao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_expedicao'); ?>
		<?php echo $form->textField($model,'data_expedicao'); ?>
		<?php echo $form->error($model,'data_expedicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_nascimento'); ?>
		<?php echo $form->textField($model,'data_nascimento'); ?>
		<?php echo $form->error($model,'data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_cel'); ?>
		<?php echo $form->textField($model,'telefone_cel',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telefone_cel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone_casa'); ?>
		<?php echo $form->textField($model,'telefone_casa',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'telefone_casa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_contrato'); ?>
		<?php echo $form->textField($model,'tipo_contrato'); ?>
		<?php echo $form->error($model,'tipo_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_admissao'); ?>
		<?php echo $form->textField($model,'data_admissao'); ?>
		<?php echo $form->error($model,'data_admissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salario'); ?>
		<?php echo $form->textField($model,'salario'); ?>
		<?php echo $form->error($model,'salario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao'); ?>
		<?php echo $form->error($model,'funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banco'); ?>
		<?php echo $form->textField($model,'banco',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'banco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agencia'); ?>
		<?php echo $form->textField($model,'agencia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'agencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conta'); ?>
		<?php echo $form->textField($model,'conta',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'conta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->