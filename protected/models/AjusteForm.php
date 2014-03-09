<?php

class AjusteForm extends CFormModel {

    public $almacen;
    public $producto;
    public $cantidad;
    public $signo;

    public function rules() {
        return array(
            array('almacen,producto,cantidad,signo', 'required'),
            array('almacen,producto,cantidad,signo', 'numerical','integerOnly' => true),
        );
    }

    public function attributeLabels() {
        return array(
            'almacen' => 'Almacen',
            'producto' => 'Producto',
            'cantidad' => 'Cantidad',
            'signo' => 'Signo',
        );
    }
    
    public function ajustar()
    {
        return true;
    }
    
    public function signosList()
    {
        $model = array(
            array('id' => '1','value' => 'Add'),
            array('id' => '-1','value' => 'Deduct'),
        );
        return CHtml::listData($model,'id','value');
    }

}
