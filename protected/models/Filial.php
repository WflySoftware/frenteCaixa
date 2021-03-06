<?php

/**
 * This is the model class for table "filial".
 *
 * The followings are the available columns in table 'filial':
 * @property string $cod_filial
 * @property string $nome
 * @property string $endereco
 * @property integer $estado_caixa
 * @property integer $pontos
 */
class Filial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'filial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estado_caixa, pontos', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>50),
			array('endereco', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_filial, nome, endereco, estado_caixa, pontos', 'safe', 'on'=>'search'),
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
			'clientes'=>array(self::HAS_MANY, 'Clientes', 'filial_cod_filial'),
			'fornecedores'=>array(self::HAS_MANY, 'Fornecedor', 'filial_cod_filial'),
			'funcionarios'=>array(self::HAS_MANY, 'Funcionario', 'filial_cod_filial'),
			'produtos'=>array(self::HAS_MANY, 'Produto', 'filial_cod_filial'),
			'servicos'=>array(self::HAS_MANY, 'Servico', 'filial_cod_filial'),
			'vendas'=>array(self::HAS_MANY, 'Venda', 'filial_cod_filial'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_filial' => 'ID ',
			'nome' => 'Nome',
			'endereco' => 'Endereço',
			'estado_caixa' => 'Estado de Caixa',
			'pontos' => 'Pontos',
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

		$criteria->compare('cod_filial',$this->cod_filial,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('estado_caixa',$this->estado_caixa);
		$criteria->compare('pontos',$this->pontos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Filial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
