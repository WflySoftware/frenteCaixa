<?php

/**
 * This is the model class for table "fornecedor".
 *
 * The followings are the available columns in table 'fornecedor':
 * @property string $cod_fornecedor
 * @property string $filial_cod_filial
 * @property string $nome_fantasia
 * @property string $cnpj
 * @property string $razao_social
 * @property string $inscricao_estadual
 * @property string $estado
 * @property string $email
 * @property string $endereco
 * @property string $telefone_com
 * @property string $telefone_cel
 * @property string $cidade
 * @property string $representante
 * @property string $telefone_rep
 */
class Fornecedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fornecedor';
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
			array('nome_fantasia, estado, representante', 'length', 'max'=>100),
			array('cnpj, inscricao_estadual, cidade', 'length', 'max'=>50),
			array('razao_social, email, endereco', 'length', 'max'=>200),
			array('telefone_com, telefone_cel, telefone_rep', 'length', 'max'=>14),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_fornecedor, filial_cod_filial, nome_fantasia, cnpj, razao_social, inscricao_estadual, estado, email, endereco, telefone_com, telefone_cel, cidade, representante, telefone_rep', 'safe', 'on'=>'search'),
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
			'cod_fornecedor' => 'ID',
			'filial_cod_filial' => 'Filial',
			'nome_fantasia' => 'Nome Fantasia',
			'cnpj' => 'CNPJ',
			'razao_social' => 'Razão Social',
			'inscricao_estadual' => 'Inscrição Estadual',
			'estado' => 'Estado',
			'email' => 'Email',
			'endereco' => 'Endereço',
			'telefone_com' => 'Tel. Comercial',
			'telefone_cel' => 'Tel. Celular',
			'cidade' => 'Cidade',
			'representante' => 'Representante',
			'telefone_rep' => 'Tel. Representante',
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

		$criteria->compare('cod_fornecedor',$this->cod_fornecedor,true);
		$criteria->compare('filial_cod_filial',$this->filial_cod_filial,true);
		$criteria->compare('nome_fantasia',$this->nome_fantasia,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('razao_social',$this->razao_social,true);
		$criteria->compare('inscricao_estadual',$this->inscricao_estadual,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('telefone_com',$this->telefone_com,true);
		$criteria->compare('telefone_cel',$this->telefone_cel,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('representante',$this->representante,true);
		$criteria->compare('telefone_rep',$this->telefone_rep,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fornecedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
