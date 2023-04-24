<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yangliklar".
 *
 * @property int $id
 * @property string $rasm
 * @property string $nomi
 * @property string $text
 * @property string $qosimcha
 */
class Yangliklar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yangliklar';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['rasm', 'nomi', 'text', 'qosimcha'], 'required'],
            [['rasm', 'text'], 'string', 'max' => 200],
//            [['rasm','file'], 'extension' => 'pdf' ],
            [['nomi'], 'string', 'max' => 70],
            [['qosimcha'], 'string', 'max' => 255],
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
            'qosimcha' => 'Qosimcha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\YangliklarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\YangliklarQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->rasm;
    }

}
