<?php

namespace app\models\yii2playground;

use Yii;
use \app\models\yii2playground\master\UsersMaster;

/**
* This is the model class for table "users".
*
* @property integer $userId
* @property integer $status
* @property string $username
* @property string $password
* @property integer $loginFailed
* @property string $firstName
* @property string $lastName
* @property string $email
* @property string $image
* @property string $url
*/

class Users extends \app\models\yii2playground\master\UsersMaster{
    /**
    * @inheritdoc
    */
    public function rules()
    {
        return array_merge(parent::rules(), []);
    }

    /**
    * @inheritdoc
    */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), []);
    }
}
