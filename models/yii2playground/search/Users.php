<?php

namespace app\models\yii2playground\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\yii2playground\Users as UsersModel;

/**
 * Users represents the model behind the search form about `app\models\yii2playground\Users`.
 */
class Users extends UsersModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'status', 'loginFailed'], 'integer'],
            [['username', 'password', 'firstName', 'lastName', 'email', 'image', 'url'], 'safe'],
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
        $query = UsersModel::find();

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
            'userId' => $this->userId,
            'status' => $this->status,
            'loginFailed' => $this->loginFailed,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
