<?php

/**
 * This is the model class for table "tbl_productos_almacenes".
 *
 * The followings are the available columns in table 'tbl_productos_almacenes':
 * @property integer $id
 * @property integer $almacen_id
 * @property integer $producto_id
 * @property integer $existencia
 *
 * The followings are the available model relations:
 * @property Almacenes $almacen
 * @property Productos $producto
 */
class ProductoAlmacen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_productos_almacenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('almacen_id, producto_id, existencia', 'required'),
			array('almacen_id, producto_id, existencia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, almacen_id, producto_id, existencia', 'safe', 'on'=>'search'),
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
			'almacen' => array(self::BELONGS_TO, 'Almacenes', 'almacen_id'),
			'producto' => array(self::BELONGS_TO, 'Productos', 'producto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'almacen_id' => 'Almacen',
			'producto_id' => 'Producto',
			'existencia' => 'Existencia',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('almacen_id',$this->almacen_id);
		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('existencia',$this->existencia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductoAlmacen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
