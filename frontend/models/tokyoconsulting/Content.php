<?php

namespace frontend\models\tokyoconsulting;

use Yii;
use \frontend\models\tokyoconsulting\master\ContentMaster;

/**
 * This is the model class for table "content".
 *
 * @property integer $contentId
 * @property string $contentName
 * @property integer $status
 * @property string $createDateTime
 * @property string $updateDateTime
 */

class Content extends \frontend\models\tokyoconsulting\master\ContentMaster
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
    public static function footerBranch()
    {
        $dataArr = [];
        $branch = Content::find()->where(["contentName" => 'Branchfooter'])->asArray()->one();
        if (isset($branch) && !empty($branch)) {
            $detail = ContentDetail::find()->where(["contentId" => $branch["contentId"]])->all();
            $contentId = $branch["contentId"];
            $dataArr = [
                "contentId" => $contentId,
                "title" => $branch["title"],
                "detail" => $detail
            ];
        }

        return $dataArr;
    }

    public static function footerExplore()
    {
        $dataexplore = [];
        $explore = Content::find()->where(["contentName" => 'Explores'])->asArray()->one();
        if (isset($explore) && !empty($explore)) {
            $detailex = ContentDetail::find()->where(["contentId" => $explore["contentId"]])->all();
            $contentId = $explore["contentId"];
            $dataexplore = [
                "title" => $explore["title"],
                "contentId" => $contentId,
                "detailex" => $detailex
            ];
        }
        return $dataexplore;
    }

    public static function footerPopular()
    {
        $datapopular = [];
        $popular = Content::find()->where(["contentName" => 'Popular'])->asArray()->one();
        if (isset($popular) && !empty($popular)) {
            $detailpop = ContentDetail::find()->where(["contentId" => $popular["contentId"]])->all();
            $contentId = $popular["contentId"];
            $datapopular = [
                "title" => $popular["title"],
                "contentId" => $contentId,
                "detailpop" => $detailpop
            ];
        }
        return $datapopular;
    }

    public static function footerLogo()
    {
        $datalofoot = [];
        $logofooter = Content::find()->where(["contentName" => 'Logofooter'])->asArray()->one();
        if (isset($logofooter) && !empty($logofooter)) {
            $detaillogo = ContentDetail::find()->where(["contentId" => $logofooter["contentId"]])->one();
            $contentId = $logofooter["contentId"];
            $datalofoot = [
                "title" => $logofooter["title"],
                "contentId" => $contentId,
                "detaillogo" => $detaillogo,
            ];
        }
        return $datalofoot;
    }
}
