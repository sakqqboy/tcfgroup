<?php

namespace frontend\models\tokyoconsulting;

use Yii;
use \frontend\models\tokyoconsulting\master\ContentBranchDetailMaster;

/**
* This is the model class for table "content_branch_detail".
*
* @property integer $contentBranchDetailId
* @property integer $contentBranchId
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

class ContentBranchDetail extends \frontend\models\tokyoconsulting\master\ContentBranchDetailMaster{
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
