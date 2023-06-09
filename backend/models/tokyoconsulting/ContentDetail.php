<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\ContentDetailMaster;

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

class ContentDetail extends \backend\models\tokyoconsulting\master\ContentDetailMaster{
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
