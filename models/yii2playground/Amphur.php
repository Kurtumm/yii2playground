<?php

namespace app\models\yii2playground;

use Yii;
use \app\models\yii2playground\master\AmphurMaster;

/**
* This is the model class for table "amphur".
*
* @property integer $amphurId
* @property string $amphurCode
* @property string $amphurName
* @property integer $geographyId
* @property integer $provinceId
*/

class Amphur extends \app\models\yii2playground\master\AmphurMaster{
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
