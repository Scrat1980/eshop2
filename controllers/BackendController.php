<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;

class BackendController extends Controller
{
    public $layout = 'admin_panel';

    public function actionIndex()
    {
        return $this->redirect( '/index.php?r=product%2Findex' );
    }

//    public function actionUpload()
//    {
//        $model = new UploadForm();
//
//        if (Yii::$app->request->isPost) {
//            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
//            if ($model->upload()) {
//                // file is uploaded successfully
//                return $this->render('upload', ['model' => $model]);
//            }
//        }
//
//        return $this->render('upload', ['model' => $model]);
//    }

}