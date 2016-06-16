<?php

namespace app\models\yii2playground;

use Yii;
use \app\models\yii2playground\master\UserFilesMaster;

/**
* This is the model class for table "user_files".
*
* @property integer $userFilesId
* @property integer $userId
* @property string $url
*/

class UserFiles extends \app\models\yii2playground\master\UserFilesMaster{
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
