<?php

namespace app\models\yii2playground\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\yii2playground\Province as ProvinceModel;

/**
 * Province represents the model behind the search form about `app\models\yii2playground\Province`.
 */
class Province extends ProvinceModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provinceId', 'geographyId'], 'integer'],
            [['provinceCode', 'provinceName'], 'safe'],
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
        $query = ProvinceModel::find();

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
            'provinceId' => $this->provinceId,
            'geographyId' => $this->geographyId,
        ]);

        $query->andFilterWhere(['like', 'provinceCode', $this->provinceCode])
            ->andFilterWhere(['like', 'provinceName', $this->provinceName]);

        return $dataProvider;
    }
}
