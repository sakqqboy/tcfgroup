<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\PositionMaster;

/**
* This is the model class for table "position".
*
* @property integer $positionId
* @property integer $branchId
* @property string $positionName
* @property string $positionDetail
* @property integer $level
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class Position extends \backend\models\tokyoconsulting\master\PositionMaster{
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
