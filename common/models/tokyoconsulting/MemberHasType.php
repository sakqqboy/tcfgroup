<?php

namespace common\models\tokyoconsulting;

use Yii;
use \common\models\tokyoconsulting\master\MemberHasTypeMaster;

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

class MemberHasType extends \common\models\tokyoconsulting\master\MemberHasTypeMaster{
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
