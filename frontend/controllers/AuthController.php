<?php

namespace frontend\controllers;
use yii\filters\auth\HttpBasicAuth;
use yii\rest\ActiveController;

class AuthController extends ActiveController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
        ];
        return $behaviors;
    }

    public function actionAuth(){
        return "hello fdsfds";
    }

}