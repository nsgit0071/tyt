<?php

namespace common\models;
use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "haqida".
 *
 * @property int $id
 * @property string $rasm
 * @property string $nomi
 * @property string $text
 * @property string $qoshimcha
 */
class Haqida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'haqida';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['rasm', 'nomi', 'text', 'qoshimcha'], 'required'],
            [['qoshimcha'], 'string'],
            [['rasm','file'], 'string', 'max' => 200],
            [['nomi'], 'string', 'max' => 100],
            [['text'], 'string', 'max' => 900],
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
            'nomi' => 'Nomi',
            'text' => 'Text',
            'qoshimcha' => 'Qoshimcha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\HaqidaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HaqidaQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->rasm;
    }
}
