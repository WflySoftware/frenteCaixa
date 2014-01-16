<?php

/**
 * This is the model class for table "venda".
 *
 * The followings are the available columns in table 'venda':
 * @property string $cod_venda
 * @property string $filial_cod_filial
 * @property string $funcionario_cod_funcionario
 * @property string $cliente_cod_cliente
 * @property string $data_2
 * @property double $valor_total
 * @property string $forma_pagamento
 */
class Venda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'venda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filial_cod_filial, funcionario_cod_funcionario, cliente_cod_cliente', 'required'),
			array('forma_pagamento', 'length', 'max'=>100),
			array('valor_total', 'numerical'),
			array('filial_cod_filial, funcionario_cod_funcionario, cliente_cod_cliente', 'length', 'max'=>10),
			array('data_2', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_venda, filial_cod_filial, funcionario_cod_funcionario, cliente_cod_cliente, data_2, valor_total, forma_pagamento', 'safe', 'on'=>'search'),
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
			'filial'=>array(self::HAS_ONE, 'Filial', 'filial_cod_filial'),
			'funcionario'=>array(self::HAS_ONE, 'Funcionario', 'funcionario_cod_funcionario')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_venda' => 'ID',
			'filial_cod_filial' => 'Filial',
			'funcionario_cod_funcionario' => 'Funcionário',
			'cliente_cod_cliente' => 'Cliente',
			'data_2' => 'Data',
			'valor_total' => 'Valor Total',
			'forma_pagamento' => 'Forma de Pagamento',
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

		$criteria->compare('cod_venda',$this->cod_venda,true);
		$criteria->compare('filial_cod_filial',$this->filial_cod_filial,true);
		$criteria->compare('funcionario_cod_funcionario',$this->funcionario_cod_funcionario,true);
		$criteria->compare('cliente_cod_cliente',$this->cliente_cod_cliente,true);
		$criteria->compare('data_2',$this->data_2,true);
		$criteria->compare('valor_total',$this->valor_total);
		$criteria->compare('forma_pagamento',$this->forma_pagamento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Venda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
