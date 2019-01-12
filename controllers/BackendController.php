<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BackendController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'admin_panel';
        return $this->render( 'index' );
    }
}