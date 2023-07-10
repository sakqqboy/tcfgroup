<?php

namespace frontend\models\tokyoconsulting;

use Yii;
use \frontend\models\tokyoconsulting\master\ContentBranchMaster;

/**
 * This is the model class for table "content_branch".
 *
 * @property integer $contentBranchId
 * @property string $contentName
 * @property integer $branchId
 * @property string $title
 * @property string $detail
 * @property integer $status
 * @property string $createDateTime
 * @property string $updateDateTime
 */

class ContentBranch extends \frontend\models\tokyoconsulting\master\ContentBranchMaster
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

    public static function footerMoreAbout()
    {
        $footmore = ContentBranch::find()->where(["contentName" => 'Footermoreabout'])->asArray()->one();
        $detailmore = ContentBranchDetail::find()->where(["contentBranchId" => $footmore["contentBranchId"]])->all();
        $contentBranchId = $footmore["contentBranchId"];
        $datamore = [
            "contentBranchId" => $contentBranchId,
            "title" => $footmore["title"],
            "detailmore" => $detailmore
        ];
        return $datamore;
    }

    public static function footerExploreTcf()
    {
        $footexp = ContentBranch::find()->where(["contentName" => 'Footerexplore'])->asArray()->one();
        $detailexp = ContentBranchDetail::find()->where(["contentBranchId" => $footexp["contentBranchId"]])->all();
        $contentBranchId = $footexp["contentBranchId"];
        $dataexplorebranch = [
            "contentBranchId" => $contentBranchId,
            "title" => $footexp["title"],
            "detailexp" => $detailexp
        ];
        return $dataexplorebranch;
    }

    public static function footerPopular()
    {
        $footpopu = ContentBranch::find()->where(["contentName" => 'Footerpopular'])->asArray()->one();
        $detailpopu = ContentBranchDetail::find()->where(["contentBranchId" => $footpopu["contentBranchId"]])->all();
        $contentBranchId = $footpopu["contentBranchId"];
        $datapopu = [
            "contentBranchId" => $contentBranchId,
            "title" => $footpopu["title"],
            "detailpopu" => $detailpopu
        ];
        return $datapopu;
    }

    public static function footerCountryBranch()
    {
        $footbranch = ContentBranch::find()->where(["contentName" => 'Footerbranch'])->asArray()->one();
        $detailbranch = ContentBranchDetail::find()->where(["contentBranchId" => $footbranch["contentBranchId"]])->all();
        $contentBranchId = $footbranch["contentBranchId"];
        $databranch = [
            "contentBranchId" => $contentBranchId,
            "title" => $footbranch["title"],
            "detailbranch" => $detailbranch
        ];
        return $databranch;
    }
}
