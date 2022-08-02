<?php

namespace frontend\models;

use Yii;

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
}
