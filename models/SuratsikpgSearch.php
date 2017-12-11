<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Suratsikpg;

/**
 * SuratsikpgSearch represents the model behind the search form about `app\models\Suratsikpg`.
 */
class SuratsikpgSearch extends Suratsikpg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'tempatLahir', 'tanggalLahir', 'tempatGigi', 'noSipg', 'noStrpg', 'maxBerlaku'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Suratsikpg::find();

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
            'tanggalLahir' => $this->tanggalLahir,
            'maxBerlaku' => $this->maxBerlaku,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempatLahir', $this->tempatLahir])
            ->andFilterWhere(['like', 'tempatGigi', $this->tempatGigi])
            ->andFilterWhere(['like', 'noSipg', $this->noSipg])
            ->andFilterWhere(['like', 'noStrpg', $this->noStrpg]);

        return $dataProvider;
    }
}
