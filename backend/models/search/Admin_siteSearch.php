<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AdminSite;

/**
 * Admin_SiteSearch represents the model behind the search form of `common\models\AdminSite`.
 */
class Admin_SiteSearch extends AdminSite
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tel'], 'integer'],
            [['logo', 'imgf', 'imgs', 'imgt', 'hero_h1', 'hero_h2', 'about_n', 'about_t', 'news_n', 'news_t', 'books_n', 'books_t', 'counts_n', 'team_n', 'team_t', 'contact_n', 'contact_t', 'map_link', 'location', 'email', 'status', 'telegram_link', 'facebook_link', 'instagram_link', 'youtube_link'], 'safe'],
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
        $query = AdminSite::find();

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
            'tel' => $this->tel,
        ]);

        $query->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'imgf', $this->imgf])
            ->andFilterWhere(['like', 'imgs', $this->imgs])
            ->andFilterWhere(['like', 'imgt', $this->imgt])
            ->andFilterWhere(['like', 'hero_h1', $this->hero_h1])
            ->andFilterWhere(['like', 'hero_h2', $this->hero_h2])
            ->andFilterWhere(['like', 'about_n', $this->about_n])
            ->andFilterWhere(['like', 'about_t', $this->about_t])
            ->andFilterWhere(['like', 'news_n', $this->news_n])
            ->andFilterWhere(['like', 'news_t', $this->news_t])
            ->andFilterWhere(['like', 'books_n', $this->books_n])
            ->andFilterWhere(['like', 'books_t', $this->books_t])
            ->andFilterWhere(['like', 'counts_n', $this->counts_n])
            ->andFilterWhere(['like', 'team_n', $this->team_n])
            ->andFilterWhere(['like', 'team_t', $this->team_t])
            ->andFilterWhere(['like', 'contact_n', $this->contact_n])
            ->andFilterWhere(['like', 'contact_t', $this->contact_t])
            ->andFilterWhere(['like', 'map_link', $this->map_link])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'telegram_link', $this->telegram_link])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'instagram_link', $this->instagram_link])
            ->andFilterWhere(['like', 'youtube_link', $this->youtube_link]);

        return $dataProvider;
    }
}
