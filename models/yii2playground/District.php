<?php

namespace app\models\yii2playground;

use Yii;
use \app\models\yii2playground\master\DistrictMaster;

/**
* This is the model class for table "district".
*
* @property integer $districtId
* @property string $districtCode
* @property string $districtName
* @property integer $amphurId
* @property integer $provinceId
* @property integer $geographyId
*/

class District extends \app\models\yii2playground\master\DistrictMaster{
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
