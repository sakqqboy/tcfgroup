<?php

namespace backend\models\tokyoconsulting;

use Yii;
use \backend\models\tokyoconsulting\master\TeamMaster;

/**
 * This is the model class for table "team".
 *
 * @property integer $teamId
 * @property string $teamName
 * @property integer $branchId
 * @property integer $sectionId
 * @property string $teamDetail
 * @property integer $status
 * @property string $createDateTime
 * @property string $updateDateTime
 */

class Team extends \backend\models\tokyoconsulting\master\TeamMaster
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

    public static function teamName($teamId)
    {
        $team = Team::find()->where(["teamId" => $teamId])->asArray()->one();
        if (isset($team) && !empty($team)) {
            return $team["teamName"];
        } else {
            return null;
        }
    }
}
