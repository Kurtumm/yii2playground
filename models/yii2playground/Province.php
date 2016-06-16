<?php

namespace app\models\yii2playground;

use Yii;
use \app\models\yii2playground\master\ProvinceMaster;

/**
* This is the model class for table "province".
*
* @property integer $provinceId
* @property string $provinceCode
* @property string $provinceName
* @property integer $geographyId
*/

class Province extends \app\models\yii2playground\master\ProvinceMaster{
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
