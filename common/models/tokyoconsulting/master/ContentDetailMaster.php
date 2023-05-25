<?php

namespace common\models\tokyoconsulting\master;

use Yii;

/**
* This is the model class for table "content_detail".
*
    * @property integer $contentDetailId
    * @property integer $contentId
    * @property string $title
    * @property string $detail
    * @property string $detail2
    * @property string $detail3
    * @property string $detail4
    * @property string $detail5
    * @property string $detail6
    * @property string $detail7
    * @property string $image
    * @property string $url
    * @property integer $status
    * @property string $createDatetime
    * @property string $updateDatetime
*/
class ContentDetailMaster extends \common\models\ModelMaster
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'content_detail';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
            [['contentId'], 'required'],
            [['contentId'], 'integer'],
            [['detail', 'detail2', 'detail3', 'detail4', 'detail5', 'detail6', 'detail7'], 'string'],
            [['createDatetime', 'updateDatetime'], 'safe'],
            [['title', 'image', 'url'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 6],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'contentDetailId' => 'Content Detail ID',
    'contentId' => 'Content ID',
    'title' => 'Title',
    'detail' => 'Detail',
    'detail2' => 'Detail2',
    'detail3' => 'Detail3',
    'detail4' => 'Detail4',
    'detail5' => 'Detail5',
    'detail6' => 'Detail6',
    'detail7' => 'Detail7',
    'image' => 'Image',
    'url' => 'Url',
    'status' => 'Status',
    'createDatetime' => 'Create Datetime',
    'updateDatetime' => 'Update Datetime',
];
}
}
