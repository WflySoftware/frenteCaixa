<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property string $cod_cliente
 * @property string $filial_cod_filial
 * @property string $nome
 * @property string $cpf
 * @property string $endereco
 * @property string $telefone
 * @property string $email
 * @property string $data_nascimento
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
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
			array('filial_cod_filial', 'length', 'max'=>10),
			array('nome', 'length', 'max'=>100),
			array('cpf, telefone', 'length', 'max'=>14),
			array('endereco, email', 'length', 'max'=>200),
			array('data_nascimento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_cliente, filial_cod_filial, nome, cpf, endereco, telefone, email, data_nascimento', 'safe', 'on'=>'search'),
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
			'filial'=>array(self::HAS_ONE, 'Filial', 'filial_cod_filial')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_cliente' => 'ID',
			'filial_cod_filial' => 'Filial',
			'nome' => 'Nome',
			'cpf' => 'CPF',
			'endereco' => 'Endereço',
			'telefone' => 'Telefone',
			'email' => 'Email',
			'data_nascimento' => 'Data de Nascimento',
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

		$criteria->compare('cod_cliente',$this->cod_cliente,true);
		$criteria->compare('filial_cod_filial',$this->filial_cod_filial,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
