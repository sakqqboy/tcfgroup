<?php

namespace frontend\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\ContentBranch;
use backend\models\tokyoconsulting\ContentBranchDetail;
use backend\models\tokyoconsulting\Country;
use backend\models\tokyoconsulting\Member;
use backend\models\tokyoconsulting\MemberHasType;
use common\models\ModelMaster;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use Yii;

/**
 * Site controller
 */
class AboutUsCountryController extends Controller
{
    public function actionIndex($hash)
    {

        $userInThisBranch = 0;
        $canEdit = [];
        $branchName = $hash;
        $countryName = $hash;
        $bannerabout = [];
        $historytokyo = [];
        $branches = [];
        $establishment = [];
        $extendinglocation = [];
        $tokyoconsulting = [];
        $brand = [];
        $thegrowth = [];
        $globalexpansion = [];
        $aboutfounder = [];

        $branch = Branch::find()->where(["branchName" => $branchName, "status" => 1])->asArray()->one();
        $country = Country::find()->where(["countryName" => $countryName, "status" => 1])->asArray()->all();

        if (isset($branch) && !empty($branch)) {
            $abo = ContentBranch::find()
                ->where(['contentName' => "Bannerabout", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($abo) && !empty($abo)) {
                $bannerabout = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $abo["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $has = ContentBranch::find()
                ->where(['contentName' => "Historytokyo", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($has) && !empty($has)) {
                $historytokyo = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $has["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $ches = ContentBranch::find()
                ->where(['contentName' => "Branches", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($ches) && !empty($ches)) {
                $branches = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $ches["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $lishment = ContentBranch::find()
                ->where(['contentName' => "Establishment", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($lishment) && !empty($lishment)) {
                $establishment = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $lishment["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $exten = ContentBranch::find()
                ->where(['contentName' => "Extendinglocation", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($exten) && !empty($exten)) {
                $extendinglocation = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $exten["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $tokyosul = ContentBranch::find()
                ->where(['contentName' => "Tokyoconsulting", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($tokyosul) && !empty($tokyosul)) {
                $tokyoconsulting = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $tokyosul["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $expansion = ContentBranch::find()
                ->where(['contentName' => "Brand", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($expansion) && !empty($expansion)) {
                $brand = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $expansion["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $the = ContentBranch::find()
                ->where(['contentName' => "Thegrowth", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($the) && !empty($the)) {
                $thegrowth = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $the["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $ball = ContentBranch::find()
                ->where(['contentName' => "Globalexpansion", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($ball) && !empty($ball)) {
                $globalexpansion = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $ball["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $foun = ContentBranch::find()
                ->where(['contentName' => "Aboutfounder", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($foun) && !empty($foun)) {
                $aboutfounder = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $foun["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }


        $canEdit = 0;
        if (Yii::$app->user->id) {
            $memberId = Yii::$app->user->id;
            $membertype = MemberHasType::find()
                ->select("mt.memberTypeName")
                ->JOIN("LEFT JOIN", "member_type mt", "member_has_type.memberTypeId = mt.memberTypeId")
                //->leftJoin('member_type', 'member_type.memberTypeId = member_has_type.memberTypeId')
                ->where([
                    "member_has_type.memberId" => $memberId,
                    "memberTypeName" => ["Administrator", "Creater", "Approver", "Frontend", "Backend"]
                ])
                ->asArray()
                ->all();

            if (isset($membertype) && count($membertype) > 0) {
                $canEdit = 1;
            }
            $member = Member::find()
                ->select('b.branchId')
                ->JOIN("LEFT JOIN", "branch b", "b.branchId=member.branchId")
                ->where(["member.memberId" => $memberId, "b.branchName" => $hash])
                ->one();
            if (isset($member) && !empty($member)) {
                $userInThisBranch = 1;
            }
            $memberTypeAdmin = MemberHasType::find()
                ->select("mt.memberTypeName")
                ->JOIN("LEFT JOIN", "member_type mt", "member_has_type.memberTypeId = mt.memberTypeId")
                //->leftJoin('member_type', 'member_type.memberTypeId = member_has_type.memberTypeId')
                ->where([
                    "member_has_type.memberId" => $memberId,
                    "memberTypeName" => "Administrator"
                ])
                ->asArray()
                ->one();

            if (isset($memberTypeAdmin) && !empty($memberTypeAdmin)) {

                $userInThisBranch = 1;
            }
        }

        return $this->render('aboutuscountry', [
            "bannerabout" => $bannerabout,
            "historytokyo" => $historytokyo,
            "branches" => $branches,
            "establishment" => $establishment,
            "extendinglocation" => $extendinglocation,
            "tokyoconsulting" => $tokyoconsulting,
            "brand" => $brand,
            "thegrowth" => $thegrowth,
            "globalexpansion" => $globalexpansion,
            "aboutfounder" => $aboutfounder,
            "country" => $country,
            "userInThisBranch" => $userInThisBranch,
            "canEdit" => $canEdit,
            "branchName" => $branchName,
        ]);
    }
}
