<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\TeamPositionMaster;

/**
* This is the model class for table "team_position".
*
* @property integer $id
* @property string $name
* @property integer $status
* @property string $createDateTime
* @property string $updateDateTime
*/

class TeamPosition extends \backend\models\tokyoconsulting\master\TeamPositionMaster{
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
