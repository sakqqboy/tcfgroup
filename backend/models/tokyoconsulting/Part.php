<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\PartMaster;

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

class Part extends \backend\models\tokyoconsulting\master\PartMaster{
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
