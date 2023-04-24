<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Haqida;

/**
 * HaqidaSearch represents the model behind the search form of `common\models\Haqida`.
 */
class HaqidaSearch extends Haqida
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['rasm', 'nomi', 'text', 'qoshimcha'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Haqida::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'rasm', $this->rasm])
            ->andFilterWhere(['like', 'nomi', $this->nomi])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'qoshimcha', $this->qoshimcha]);

        return $dataProvider;
    }
}
