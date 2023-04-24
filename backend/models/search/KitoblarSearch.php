<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kitoblar;

/**
 * KitoblarSearch represents the model behind the search form of `common\models\Kitoblar`.
 */
class KitoblarSearch extends Kitoblar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['rasm', 'nomi', 'Text', 'rasmm', 'bolim'], 'safe'],
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
        $query = Kitoblar::find();

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
            ->andFilterWhere(['like', 'Text', $this->Text])
            ->andFilterWhere(['like', 'rasmm', $this->rasmm])
            ->andFilterWhere(['like', 'bolim', $this->bolim]);

        return $dataProvider;
    }
}
