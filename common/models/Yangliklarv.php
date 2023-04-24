<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yangliklarv".
 *
 * @property int $id
 * @property string $tube_link
 * @property string $nomi
 * @property string $Text
 * @property string $qoshimcha
 */
class Yangliklarv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yangliklarv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tube_link', 'nomi', 'Text', 'qoshimcha'], 'required'],
            [['tube_link'], 'string', 'max' => 1200],
            [['nomi', 'Text', 'qoshimcha'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tube_link' => 'Tube Link',
            'nomi' => 'Nomi',
            'Text' => 'Text',
            'qoshimcha' => 'Qoshimcha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\YangliklarvQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\YangliklarvQuery(get_called_class());
    }
}
