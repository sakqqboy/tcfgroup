<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\ContentMaster;

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

class Content extends \backend\models\tokyoconsulting\master\ContentMaster{
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
