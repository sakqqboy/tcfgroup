<?php

namespace common\models\tokyoconsulting;

use Yii;
use \common\models\tokyoconsulting\master\SectionMaster;

/**
* This is the model class for table "section".
*
* @property integer $sectionId
* @property string $sectionName
* @property integer $branchId
* @property string $sectionDetail
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class Section extends \common\models\tokyoconsulting\master\SectionMaster{
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
