<?php

namespace app\models\yii2playground;

use Yii;
use \app\models\yii2playground\master\GeographyMaster;

/**
* This is the model class for table "geography".
*
* @property integer $geographyId
* @property string $geographyName
*/

class Geography extends \app\models\yii2playground\master\GeographyMaster{
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
