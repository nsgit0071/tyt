<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yoshlar".
 *
 * @property int $id
 * @property string $rasm
 * @property string $nomi
 * @property string $Text
 * @property string $qoshimcha
 */
class Yoshlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yoshlar';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['rasm', 'nomi', 'Text', 'qoshimcha'], 'required'],
            [['Text'], 'string'],
            [['rasm', 'nomi', 'qoshimcha'], 'string', 'max' => 200],
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
            'Text' => 'Text',
            'qoshimcha' => 'Qoshimcha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\YoshlarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\YoshlarQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->rasm;
    }
}
