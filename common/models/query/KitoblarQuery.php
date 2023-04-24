<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Kitoblar]].
 *
 * @see \common\models\Kitoblar
 */
class KitoblarQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Kitoblar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Kitoblar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
