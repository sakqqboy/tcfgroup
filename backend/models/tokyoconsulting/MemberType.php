<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\MemberTypeMaster;

/**
* This is the model class for table "member_type".
*
* @property integer $memberTypeId
* @property string $memberTypeName
* @property integer $status
* @property string $createDatetime
* @property string $updateDatetime
*/

class MemberType extends \backend\models\tokyoconsulting\master\MemberTypeMaster{
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
    public static function memberTypeName($memberTypeId)
    {
        if ($memberTypeId != '') {
            $membertype = MemberType::find()->where(["memberTypeId" => $memberTypeId])->asArray()->one();
            if (isset($membertype) && !empty($membertype)) {
                //    throw new Exception(print_r($branch,true));
                return $membertype["memberTypeName"];
            } else {
                // $branch = Branch::find() -> where(["branchI" => $branchId]) -> asArray() -> one();
                return null;
            }
        } else {
            return null;
        }
    }
}
