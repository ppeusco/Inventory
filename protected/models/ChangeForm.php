<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangeForm
 *
 * @author pablo
 */
class ChangeForm extends CFormModel {
    public $password;
    public $password_new;
    public $password_new_repeat;
    
    public function rules() {
        return array(
            array('password, password_new, password_new_repeat', 'required'),
            array('password_new','compare'),
            array('password','verify')
        );
    }
    
    public function verify($attribute, $params) {
        $model = Usuario::model()->findByPk(Yii::app()->user->id);
        if($model->password !== MD5($this->password)) {
            $this->addError('password','Password incorrect');
        }
    }
    
    public function change() {
        if (!$this->hasErrors()) {
            $model = Usuario::model()->findByPk(Yii::app()->user->id);
            $model->password = MD5($this->password_new);
            return $model->save();
        }
        return false;
    }
    
    
    public function attributeLabels() {
        return array(
            'password' => 'Password',
            'password_new' => 'New Password',
            'password_new_repeat' => 'Confirm password'
        );
    }
    
    
}
