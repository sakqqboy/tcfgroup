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
class NewsletterController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    //  'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */

    public function actionIndex($hash)
    {

        $footerbangla = Content::find()
            ->where(["contentName" => "Footerbangladresh"])
            ->asArray()
            ->one();


        $userInThisBranch = 0;
        $canEdit = [];
        $branchName = $hash;
        $countryName = $hash;
        $new = [];
        $newsletter = [];
        $import = [];
        $olderposts = [];
        $ol = [];
        $asset = [];
        $taxassessment1 = [];
        $taxassessment2 = [];
        $footerbangladresh = [];
        $topic = [];
        $tp = [];

        $branch = Branch::find()->where(["branchName" => $branchName, "status" => 1])->asArray()->one();
        $country = Country::find()->where(["countryName" => $countryName, "status" => 1])->asArray()->all();


        if (isset($branch) && !empty($branch)) {
            $new = ContentBranch::find()
                ->where(['title' => "Newsletter", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($new) && !empty($new)) {
                $newsletter = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $new["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $tp = ContentBranch::find()
                ->where(['contentName' => "topicnewsletter", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($tp) && count($tp) > 0) {
                $topic = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $tp["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $port = ContentBranch::find()
                ->where(['contentName' => "importnewsletter", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($port) && count($port) > 0) {
                $import = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $port["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $ol = ContentBranch::find()
                ->where(['contentName' => "Olderposts", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($ol) && count($ol) > 0) {
                $olderposts = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $ol["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $set = ContentBranch::find()
                ->where(['contentName' => "Asset", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($set) && count($set) > 0) {
                $asset = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $set["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $tax = ContentBranch::find()
                ->where(['contentName' => "Taxassessment1", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($set) && count($tax) > 0) {
                $taxassessment1 = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $tax["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }

        if (isset($branch) && !empty($branch)) {
            $ment = ContentBranch::find()
                ->where(['contentName' => "Taxassessment2", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($ment) && count($ment) > 0) {
                $taxassessment2 = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $ment["contentBranchId"], "status" => 1])
                    ->asArray()
                    ->all();
            }
        }


        if (isset($footerbangla) && !empty($footerbangla)) {
            $footerbangladresh = ContentDetail::find()
                ->where(["contentId" => $footerbangla["contentId"], "status" => 1])
                ->asArray()
                ->all();
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

        // throw new Exception(count($topic));
        // throw new Exception(count($taxassessment1));
        // throw new Exception(count($taxassessment2));

        return $this->render('newsletter', [
            "new" => $new,
            "newsletter" => $newsletter,
            "import" => $import,
            "olderposts" => $olderposts,
            "asset" => $asset,
            "taxassessment1" => $taxassessment1,
            "taxassessment2" => $taxassessment2,
            "footerbangladresh" => $footerbangladresh,
            "topic" => $topic,
            "tp" => $tp,
            "country" => $country,
            "userInThisBranch" => $userInThisBranch,
            "canEdit" => $canEdit,
            "branchName" => $branchName,
        ]);
    }
}
