<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ovqatlar;

/**
 * OvqatlarSearch represents the model behind the search form of `backend\models\Ovqatlar`.
 */
class OvqatlarSearch extends Ovqatlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'narxi'], 'integer'],
            [['nomi', 'turi', 'rasmi'], 'safe'],
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
        $query = Ovqatlar::find();

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
            'narxi' => $this->narxi,
        ]);

        $query->andFilterWhere(['like', 'nomi', $this->nomi])
            ->andFilterWhere(['like', 'turi', $this->turi])
            ->andFilterWhere(['like', 'rasmi', $this->rasmi]);

        return $dataProvider;
    }
}
