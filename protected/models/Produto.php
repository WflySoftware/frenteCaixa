<?php

/**
 * This is the model class for table "produto".
 *
 * The followings are the available columns in table 'produto':
 * @property string $cod_produto
 * @property string $filial_cod_filial
 * @property string $descricao
 * @property double $valor_compra
 * @property double $valor_venda
 * @property string $cod_barras
 * @property integer $quantidade
 * @property string $data_aquisicao
 * @property string $data_validade
 */
class Produto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produto';
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
			array('quantidade', 'numerical', 'integerOnly'=>true),
			array('valor_compra, valor_venda', 'numerical'),
			array('filial_cod_filial', 'length', 'max'=>10),
			array('descricao', 'length', 'max'=>100),
			array('cod_barras', 'length', 'max'=>50),
			array('data_aquisicao, data_validade', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_produto, filial_cod_filial, descricao, valor_compra, valor_venda, cod_barras, quantidade, data_aquisicao, data_validade', 'safe', 'on'=>'search'),
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
			'cod_produto' => 'Cod Produto',
			'filial_cod_filial' => 'Filial Cod Filial',
			'descricao' => 'Descricao',
			'valor_compra' => 'Valor Compra',
			'valor_venda' => 'Valor Venda',
			'cod_barras' => 'Cod Barras',
			'quantidade' => 'Quantidade',
			'data_aquisicao' => 'Data Aquisicao',
			'data_validade' => 'Data Validade',
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

		$criteria->compare('cod_produto',$this->cod_produto,true);
		$criteria->compare('filial_cod_filial',$this->filial_cod_filial,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('valor_compra',$this->valor_compra);
		$criteria->compare('valor_venda',$this->valor_venda);
		$criteria->compare('cod_barras',$this->cod_barras,true);
		$criteria->compare('quantidade',$this->quantidade);
		$criteria->compare('data_aquisicao',$this->data_aquisicao,true);
		$criteria->compare('data_validade',$this->data_validade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Produto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
