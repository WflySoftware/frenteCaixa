<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property string $cod_funcionario
 * @property string $filial_cod_filial
 * @property string $nome
 * @property string $cpf
 * @property string $rg
 * @property string $orgao
 * @property string $data_expedicao
 * @property string $data_nascimento
 * @property string $telefone_cel
 * @property string $telefone_casa
 * @property string $endereco
 * @property integer $tipo_contrato
 * @property string $data_admissao
 * @property double $salario
 * @property string $email
 * @property string $login
 * @property string $senha
 * @property integer $funcao
 * @property string $banco
 * @property string $agencia
 * @property string $conta
 * @property string $cidade
 * @property string $cargo
 */
class Funcionario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filial_cod_filial', 'required'),
			array('tipo_contrato, funcao', 'numerical', 'integerOnly'=>true),
			array('salario', 'numerical'),
			array('filial_cod_filial, orgao, banco, agencia', 'length', 'max'=>10),
			array('nome', 'length', 'max'=>100),
			array('cpf, rg, telefone_cel, telefone_casa', 'length', 'max'=>14),
			array('endereco, email', 'length', 'max'=>200),
			array('login', 'length', 'max'=>25),
			array('senha', 'length', 'max'=>6),
			array('conta', 'length', 'max'=>7),
			array('cidade, cargo', 'length', 'max'=>50),
			array('data_expedicao, data_nascimento, data_admissao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_funcionario, filial_cod_filial, nome, cpf, rg, orgao, data_expedicao, data_nascimento, telefone_cel, telefone_casa, endereco, tipo_contrato, data_admissao, salario, email, login, senha, funcao, banco, agencia, conta, cidade, cargo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_funcionario' => 'ID',
			'filial_cod_filial' => 'Filial',
			'nome' => 'Nome',
			'cpf' => 'CPF',
			'rg' => 'RG',
			'orgao' => 'Orgão',
			'data_expedicao' => 'Data de Expedição',
			'data_nascimento' => 'Data de Nascimento',
			'telefone_cel' => 'Tel. Celular',
			'telefone_casa' => 'Tel. Residencial',
			'endereco' => 'Endereço',
			'tipo_contrato' => 'Tipo de Contrato',
			'data_admissao' => 'Data de Admissão',
			'salario' => 'Salário',
			'email' => 'Email',
			'login' => 'Login',
			'senha' => 'Senha',
			'funcao' => 'Função',
			'banco' => 'Banco',
			'agencia' => 'Agência',
			'conta' => 'Conta',
			'cidade' => 'Cidade',
			'cargo' => 'Cargo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cod_funcionario',$this->cod_funcionario,true);
		$criteria->compare('filial_cod_filial',$this->filial_cod_filial,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('rg',$this->rg,true);
		$criteria->compare('orgao',$this->orgao,true);
		$criteria->compare('data_expedicao',$this->data_expedicao,true);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);
		$criteria->compare('telefone_cel',$this->telefone_cel,true);
		$criteria->compare('telefone_casa',$this->telefone_casa,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('tipo_contrato',$this->tipo_contrato);
		$criteria->compare('data_admissao',$this->data_admissao,true);
		$criteria->compare('salario',$this->salario);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('funcao',$this->funcao);
		$criteria->compare('banco',$this->banco,true);
		$criteria->compare('agencia',$this->agencia,true);
		$criteria->compare('conta',$this->conta,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('cargo',$this->cargo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
