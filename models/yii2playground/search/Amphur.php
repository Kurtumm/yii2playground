<?php

namespace app\models\yii2playground\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\yii2playground\Amphur as AmphurModel;

/**
 * Amphur represents the model behind the search form about `app\models\yii2playground\Amphur`.
 */
class Amphur extends AmphurModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amphurId', 'geographyId', 'provinceId'], 'integer'],
            [['amphurCode', 'amphurName'], 'safe'],
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
        $query = AmphurModel::find();

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
            'amphurId' => $this->amphurId,
            'geographyId' => $this->geographyId,
            'provinceId' => $this->provinceId,
        ]);

        $query->andFilterWhere(['like', 'amphurCode', $this->amphurCode])
            ->andFilterWhere(['like', 'amphurName', $this->amphurName]);

        return $dataProvider;
    }
}