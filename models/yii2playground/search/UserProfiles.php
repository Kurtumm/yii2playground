<?php

namespace app\models\yii2playground\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\yii2playground\UserProfiles as UserProfilesModel;

/**
 * UserProfiles represents the model behind the search form about `app\models\yii2playground\UserProfiles`.
 */
class UserProfiles extends UserProfilesModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userProfilesId', 'userId', 'provinceId'], 'integer'],
            [['address', 'mobile'], 'safe'],
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
        $query = UserProfilesModel::find();

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
            'userProfilesId' => $this->userProfilesId,
            'userId' => $this->userId,
            'provinceId' => $this->provinceId,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'mobile', $this->mobile]);

        return $dataProvider;
    }
}
