<?php

namespace frontend\models\tokyoconsulting;

use Yii;
use \frontend\models\tokyoconsulting\master\PartMaster;

/**
* This is the model class for table "part".
*
* @property integer $partId
* @property string $partName
* @property integer $branchId
* @property string $expirde
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class Part extends \frontend\models\tokyoconsulting\master\PartMaster{
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
    public static function IsShow($partId) {
        $isshow = Part::find()
        ->select('status')
        ->where(['partName' => $partId])
        ->one();
        if(isset($isshow) && !empty($isshow)) {
            return $isshow -> status;
        } else {
            return 0;
        }
    }
}
