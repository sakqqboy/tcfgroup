<?php

namespace common\models\tokyoconsulting;

use Yii;
use \common\models\tokyoconsulting\master\BranchMaster;

/**
* This is the model class for table "branch".
*
* @property integer $branchId
* @property string $branchName
* @property integer $countryId
* @property string $flag
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class Branch extends \common\models\tokyoconsulting\master\BranchMaster{
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
