<?php

namespace backend\models\tokyoconsulting\master;

use Yii;

/**
* This is the model class for table "part".
*
    * @property integer $partId
    * @property string $partName
    * @property integer $branchId
    * @property string $expirde
    * @property integer $status
    * @property string $createDateTime
    * @property string $updateDateTime
*/
class PartMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'part';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['partName'], 'required'],
            [['branchId'], 'integer'],
            [['expirde', 'createDateTime', 'updateDateTime'], 'safe'],
            [['partName'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 10],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'partId' => 'Part ID',
    'partName' => 'Part Name',
    'branchId' => 'Branch ID',
    'expirde' => 'Expirde',
    'status' => 'Status',
    'createDateTime' => 'Create Date Time',
    'updateDateTime' => 'Update Date Time',
];
}
}
