<?php

namespace common\models\tokyoconsulting\master;

use Yii;

/**
* This is the model class for table "member_type".
*
    * @property integer $memberTypeId
    * @property string $memberTypeName
    * @property integer $status
    * @property string $createDatetime
    * @property string $updateDatetime
*/
class MemberTypeMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'member_type';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['createDatetime', 'updateDatetime'], 'safe'],
            [['memberTypeName'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 10],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'memberTypeId' => 'Member Type ID',
    'memberTypeName' => 'Member Type Name',
    'status' => 'Status',
    'createDatetime' => 'Create Datetime',
    'updateDatetime' => 'Update Datetime',
];
}
}
