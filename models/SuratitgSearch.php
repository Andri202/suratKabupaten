<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Suratitg;

/**
 * SuratitgSearch represents the model behind the search form about `app\models\Suratitg`.
 */
class SuratitgSearch extends Suratitg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jenisKelamin'], 'integer'],
            [['nama', 'tempatLahir', 'tanggalLahir', 'agama', 'kewarganegaraan', 'pekerjaan', 'alamat', 'tempatKerja'], 'safe'],
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
        $query = Suratitg::find();

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
            'jenisKelamin' => $this->jenisKelamin,
            'tanggalLahir' => $this->tanggalLahir,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempatLahir', $this->tempatLahir])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tempatKerja', $this->tempatKerja]);

        return $dataProvider;
    }
}
