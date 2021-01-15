<?php

namespace mosaka0\hayvanlar\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use mosaka0\hayvanlar\models\Hayvanlarsil;

/**
 * HayvanlarsilSearch represents the model behind the search form of `mosaka0\hayvanlar\models\Hayvanlarsil`.
 */
class HayvanlarsilSearch extends Hayvanlarsil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['isim', 'kilo', 'boy', 'tür'], 'safe'],
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
        $query = Hayvanlarsil::find();

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

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'kilo', $this->kilo])
            ->andFilterWhere(['like', 'boy', $this->boy])
            ->andFilterWhere(['like', 'tür', $this->tür]);

        return $dataProvider;
    }
}
