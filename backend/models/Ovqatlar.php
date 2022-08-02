<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "ovqatlar".
 *
 * @property int $id
 * @property string $nomi
 * @property string $turi
 * @property int $narxi
 * @property string $rasmi
 */
class Ovqatlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $imageFile;

    public static function tableName()
    {
        return 'ovqatlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'turi', 'narxi', 'rasmi'], 'required'],
            [['narxi'], 'integer'],
            [['nomi', 'turi', 'rasmi'], 'string', 'max' => 200],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
            'turi' => 'Turi',
            'narxi' => 'Narxi',
            'rasmi' => 'Rasmi',
        ];
    }

    public function upload()
    {
        $this->rasmi=$this->imageFile->baseName . '.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@frontend') . '/web/rasmlar/' . $this->imageFile->baseName . '.' . $this->imageFile->extension,false);
            return true;
        } else {
            return false;
        }
    }
}
