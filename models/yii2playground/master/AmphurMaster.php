<?php

namespace app\models\yii2playground\master;

use Yii;

/**
 * This is the model class for table "amphur".
 *
 * @property integer $amphurId
 * @property string $amphurCode
 * @property string $amphurName
 * @property integer $geographyId
 * @property integer $provinceId
 */
class AmphurMaster extends \app\models\ModelMaster
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'amphur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amphurCode', 'amphurName'], 'required'],
            [['geographyId', 'provinceId'], 'integer'],
            [['amphurCode'], 'string', 'max' => 45],
            [['amphurName'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'amphurId' => 'Amphur ID',
            'amphurCode' => 'Amphur Code',
            'amphurName' => 'Amphur Name',
            'geographyId' => 'Geography ID',
            'provinceId' => 'Province ID',
        ];
    }
}
