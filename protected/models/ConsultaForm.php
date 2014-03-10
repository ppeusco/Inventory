<?php

class ConsultaForm extends CFormModel
{
    public $almacen;
    
    public function rules()
    {
        return array(
            array('almacen','required'),
            array('almacen','numerical','integerOnly'=>true)
        );
    }
    
    public function attributeLabels() 
    {
        return array(
            'almacen' => 'Almacen',
        );
    }
    
    public function getExistencias()
    {
        $model = Almacen::model()->with('productosAlmacen')->together()->findByPk($this->almacen);
        return $model;
    }
}
