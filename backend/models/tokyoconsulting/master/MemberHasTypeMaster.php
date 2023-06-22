<?php

namespace backend\models\tokyoconsulting\master;

use Yii;

/**
* This is the model class for table "member_has_type".
*
    * @property integer $memberHasTypeId
    * @property integer $memberTypeId
    * @property integer $memberId
    * @property integer $status
    * @property string $createDatetime
    * @property string $updateDatetime
*/
class MemberHasTypeMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'member_has_type';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['memberTypeId', 'memberId'], 'required'],
            [['memberTypeId', 'memberId'], 'integer'],
            [['createDatetime', 'updateDatetime'], 'safe'],
            [['status'], 'string', 'max' => 10],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'memberHasTypeId' => 'Member Has Type ID',
    'memberTypeId' => 'Member Type ID',
    'memberId' => 'Member ID',
    'status' => 'Status',
    'createDatetime' => 'Create Datetime',
    'updateDatetime' => 'Update Datetime',
];
}
}
