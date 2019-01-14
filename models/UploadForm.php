<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use DateTime;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $date = new DateTime();
            $name = $date->format('Y_m_d_H_i_s_ms');
            $path = 'uploads/'
                . $name
                . '.'
                . $this->imageFile->extension;
            $this->imageFile->saveAs( $path );

            return $path;
        } else {
            return false;
        }
    }
}