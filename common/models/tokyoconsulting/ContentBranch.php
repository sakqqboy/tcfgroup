<?php

namespace common\models\tokyoconsulting;

use Yii;
use \common\models\tokyoconsulting\master\ContentBranchMaster;

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

class ContentBranch extends \common\models\tokyoconsulting\master\ContentBranchMaster{
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
