<?php

namespace common\models\tokyoconsulting;

use Yii;
use \common\models\tokyoconsulting\master\PartMaster;

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

class Part extends \common\models\tokyoconsulting\master\PartMaster{
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
