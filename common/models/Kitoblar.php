<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kitoblar".
 *
 * @property int $id
 * @property string $rasm
 * @property string $nomi
 * @property string $Text
 * @property string $rasmm
 * @property string $bolim
 */
class Kitoblar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kitoblar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rasm', 'nomi', 'Text', 'rasmm', 'bolim'], 'required'],
            [['bolim'], 'string'],
            [['rasm', 'rasmm'], 'string', 'max' => 200],
            [['nomi'], 'string', 'max' => 70],
            [['Text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rasm' => 'File',
            'nomi' => 'Nomi',
            'Text' => 'Text',
            'rasmm' => 'Rasm',
            'bolim' => 'Bolim',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\KitoblarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\KitoblarQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->rasmm;
    }
    public function getImageUrlB(){
        return Yii::$app->params['backendUrl'].'file/'.$this->rasm;
    }
}
