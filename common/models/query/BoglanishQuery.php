<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Boglanish]].
 *
 * @see \common\models\Boglanish
 */
class BoglanishQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Boglanish[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Boglanish|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
