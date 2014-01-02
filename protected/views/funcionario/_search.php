<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_funcionario'); ?>
		<?php echo $form->textField($model,'cod_funcionario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filial_cod_filial'); ?>
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
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rg'); ?>
		<?php echo $form->textField($model,'rg',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orgao'); ?>
		<?php echo $form->textField($model,'orgao',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_expedicao'); ?>
		<?php echo $form->textField($model,'data_expedicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_nascimento'); ?>
		<?php echo $form->textField($model,'data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_cel'); ?>
		<?php echo $form->textField($model,'telefone_cel',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_casa'); ?>
		<?php echo $form->textField($model,'telefone_casa',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_contrato'); ?>
		<?php echo $form->textField($model,'tipo_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_admissao'); ?>
		<?php echo $form->textField($model,'data_admissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salario'); ?>
		<?php echo $form->textField($model,'salario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcao'); ?>
		<?php echo $form->textField($model,'funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banco'); ?>
		<?php echo $form->textField($model,'banco',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agencia'); ?>
		<?php echo $form->textField($model,'agencia',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conta'); ?>
		<?php echo $form->textField($model,'conta',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->