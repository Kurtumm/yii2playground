<?php

namespace app\models\yii2playground;

use Yii;
use \app\models\yii2playground\master\UserProfilesMaster;

/**
* This is the model class for table "user_profiles".
*
* @property integer $userProfilesId
* @property integer $userId
* @property string $address
* @property integer $provinceId
* @property string $mobile
*/

class UserProfiles extends \app\models\yii2playground\master\UserProfilesMaster{
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
