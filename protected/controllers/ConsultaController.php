<?php

class ConsultaController extends Controller {

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
    
    public function actionIndex()
    {
        $model = new ConsultaForm;
        
        if (isset($_POST['ConsultaForm']))
        {
            $model->attributes = $_POST['ConsultaForm'];
            if ($model->validate())
            {
                
            }    
        }    
        $this->render('index', array('model'=>$model));
    }
}

