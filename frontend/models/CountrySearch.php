<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Country;

/**
 * CountrySearch represents the model behind the search form of `frontend\models\Country`.
 */
class CountrySearch extends Country
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countryId', 'continentId', 'hasBranch', 'status'], 'integer'],
            [['countryName', 'flag', 'lat', 'lng', 'createDateTime', 'updateDateTime'], 'safe'],
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
        $query = Country::find();

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
            'countryId' => $this->countryId,
            'continentId' => $this->continentId,
            'hasBranch' => $this->hasBranch,
            'status' => $this->status,
            'createDateTime' => $this->createDateTime,
            'updateDateTime' => $this->updateDateTime,
        ]);

        $query->andFilterWhere(['like', 'countryName', $this->countryName])
            ->andFilterWhere(['like', 'flag', $this->flag])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'lng', $this->lng]);

        return $dataProvider;
    }
}
