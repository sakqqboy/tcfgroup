<?php

namespace backend\models\tokyoconsulting\master;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property integer $contentId
 * @property string $contentName
 * @property string $title
 * @property string $detail
 * @property integer $status
 * @property string $createDateTime
 * @property string $updateDateTime
 */
class ContentMaster extends \common\models\ModelMaster
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'contentId' => 'Content ID',
            'contentName' => 'Content Name',
            'title' => 'Title',
            'detail' => 'Detail',
            'status' => 'Status',
            'createDateTime' => 'Create Date Time',
            'updateDateTime' => 'Update Date Time',
        ];
    }
}
