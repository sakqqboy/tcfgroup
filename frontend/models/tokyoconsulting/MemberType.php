<?php

namespace frontend\models\tokyoconsulting;

use Yii;
use \frontend\models\tokyoconsulting\master\MemberTypeMaster;

/**
* This is the model class for table "member_type".
*
* @property integer $memberTypeId
* @property string $memberTypeName
* @property integer $status
* @property string $createDatetime
* @property string $updateDatetime
*/

class MemberType extends \frontend\models\tokyoconsulting\master\MemberTypeMaster{
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
