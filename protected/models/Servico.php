<?php

/**
 * This is the model class for table "servico".
 *
 * The followings are the available columns in table 'servico':
 * @property string $cod_servico
 * @property string $filial_cod_filial
 * @property string $descricao
 * @property double $valor
 */
class Servico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servico';
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
			array('valor', 'numerical'),
			array('filial_cod_filial', 'length', 'max'=>10),
			array('descricao', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_servico, filial_cod_filial, descricao, valor', 'safe', 'on'=>'search'),
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
			'cod_servico' => 'ID',
			'filial_cod_filial' => 'Filial',
			'descricao' => 'Descrição',
			'valor' => 'Valor',
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

		$criteria->compare('cod_servico',$this->cod_servico,true);
		$criteria->compare('filial_cod_filial',$this->filial_cod_filial,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('valor',$this->valor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
