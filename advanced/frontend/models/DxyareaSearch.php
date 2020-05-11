<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dxyarea;

/**
 * DxyareaSearch represents the model behind the search form of `frontend\models\Dxyarea`.
 */
class DxyareaSearch extends Dxyarea
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['continentName', 'continentEnglishName', 'countryName', 'countryEnglishName', 'provinceName', 'provinceEnglishName', 'province_zipCode', 'province_confirmedCount', 'province_suspectedCount', 'province_curedCount', 'province_deadCount'], 'safe'],
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
        $query = Dxyarea::find();

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

        $query->andFilterWhere(['like', 'continentName', $this->continentName])
            ->andFilterWhere(['like', 'continentEnglishName', $this->continentEnglishName])
            ->andFilterWhere(['like', 'countryName', $this->countryName])
            ->andFilterWhere(['like', 'countryEnglishName', $this->countryEnglishName])
            ->andFilterWhere(['like', 'provinceName', $this->provinceName])
            ->andFilterWhere(['like', 'provinceEnglishName', $this->provinceEnglishName])
            ->andFilterWhere(['like', 'province_zipCode', $this->province_zipCode])
            ->andFilterWhere(['like', 'province_confirmedCount', $this->province_confirmedCount])
            ->andFilterWhere(['like', 'province_suspectedCount', $this->province_suspectedCount])
            ->andFilterWhere(['like', 'province_curedCount', $this->province_curedCount])
            ->andFilterWhere(['like', 'province_deadCount', $this->province_deadCount]);

        return $dataProvider;
    }
}
