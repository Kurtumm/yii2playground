<?php

namespace app\models\yii2playground\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\yii2playground\District as DistrictModel;

/**
 * District represents the model behind the search form about `app\models\yii2playground\District`.
 */
class District extends DistrictModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['districtId', 'amphurId', 'provinceId', 'geographyId'], 'integer'],
            [['districtCode', 'districtName'], 'safe'],
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
        $query = DistrictModel::find();

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
            'districtId' => $this->districtId,
            'amphurId' => $this->amphurId,
            'provinceId' => $this->provinceId,
            'geographyId' => $this->geographyId,
        ]);

        $query->andFilterWhere(['like', 'districtCode', $this->districtCode])
            ->andFilterWhere(['like', 'districtName', $this->districtName]);

        return $dataProvider;
    }
}
