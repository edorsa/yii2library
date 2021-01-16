<?php

namespace vendor\edorsa\yii2library\src\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\edorsa\yii2library\src\models\Kirala;

/**
 * KiralaSearch represents the model behind the search form of `vendor\edorsa\yii2library\src\models\Kirala`.
 */
class KiralaSearch extends Kirala
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kiraid', 'okulnumber'], 'integer'],
            [['name', 'surname', 'kitapadi', 'kitapyazari', 'created_at', 'updated_at'], 'safe'],
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
        $query = Kirala::find();

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
            'kiraid' => $this->kiraid,
            'okulnumber' => $this->okulnumber,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'kitapadi', $this->kitapadi])
            ->andFilterWhere(['like', 'kitapyazari', $this->kitapyazari]);

        return $dataProvider;
    }
}
