<?php

namespace backend\models\tokyoconsulting\master;

use Yii;

/**
* This is the model class for table "content_branch".
*
    * @property integer $contentBranchId
    * @property string $contentName
    * @property integer $branchId
    * @property string $title
    * @property string $detail
    * @property integer $status
    * @property string $createDateTime
    * @property string $updateDateTime
*/
class ContentBranchMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'content_branch';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['branchId'], 'required'],
            [['branchId'], 'integer'],
            [['detail'], 'string'],
            [['createDateTime', 'updateDateTime'], 'safe'],
            [['contentName', 'title'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 6],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'contentBranchId' => 'Content Branch ID',
    'contentName' => 'Content Name',
    'branchId' => 'Branch ID',
    'title' => 'Title',
    'detail' => 'Detail',
    'status' => 'Status',
    'createDateTime' => 'Create Date Time',
    'updateDateTime' => 'Update Date Time',
];
}
}
