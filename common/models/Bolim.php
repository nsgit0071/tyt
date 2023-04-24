<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bolim".
 *
 * @property int $id
 * @property string $Bolim
 */
class Bolim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bolim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Bolim'], 'required'],
            [['Bolim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Bolim' => 'Bolim',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BolimQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BolimQuery(get_called_class());
    }
}
