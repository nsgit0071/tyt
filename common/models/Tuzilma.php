<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tuzilma".
 *
 * @property int $id
 * @property string $rasm
 * @property string $ism
 * @property string $familiya
 * @property string $mansab
 * @property string $telegram
 * @property string $instagram
 * @property string $facebook
 * @property string $tel
 * @property string $text
 */
class Tuzilma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuzilma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rasm', 'ism', 'familiya', 'mansab', 'telegram', 'instagram', 'facebook', 'tel', 'text'], 'required'],
            [['text'], 'string'],
            [['rasm'], 'string', 'max' => 200],
            [['ism', 'familiya', 'mansab', 'telegram', 'instagram', 'facebook'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rasm' => 'Rasm',
            'ism' => 'Ism',
            'familiya' => 'Familiya',
            'mansab' => 'Mansab',
            'telegram' => 'Telegram',
            'instagram' => 'Instagram',
            'facebook' => 'Facebook',
            'tel' => 'Tel',
            'text' => 'Text',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TuzilmaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TuzilmaQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->rasm;
    }
}
