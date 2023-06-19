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

class TeamPosition extends \backend\models\tokyoconsulting\master\TeamPositionMaster
{
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

    public static function name($teamPositionId)
    {
        $teampositions = TeamPosition::find()->where(["id" => $teamPositionId])->asArray()->one();
        if (isset($teampositions) && !empty($teampositions)) {
            return $teampositions["name"];
        } else {
            return null;
        }
    }
}
