<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "boglanish".
 *
 * @property int $id
 * @property string $ism
 * @property string $email
 * @property string $mavzu
 * @property string $Text
 */
class Boglanish extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'boglanish';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ism', 'email', 'mavzu', 'Text'], 'required'],
            [['Text'], 'string'],
            [['ism', 'mavzu'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => 'Ism',
            'email' => 'Email',
            'mavzu' => 'Mavzu',
            'Text' => 'Text',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BoglanishQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BoglanishQuery(get_called_class());
    }
}
