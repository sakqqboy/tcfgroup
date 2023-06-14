<?php

namespace frontend\models\tokyoconsulting;

use Yii;
use \frontend\models\tokyoconsulting\master\SectionHasPositionMaster;

/**
* This is the model class for table "section_has_position".
*
* @property integer $spId
* @property integer $sectionId
* @property integer $positionId
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class SectionHasPosition extends \frontend\models\tokyoconsulting\master\SectionHasPositionMaster{
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
