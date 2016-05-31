<?php

namespace back\controllers;

class KotController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
