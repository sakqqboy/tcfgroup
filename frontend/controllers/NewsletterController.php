<?php

namespace frontend\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\ContentBranch;
use backend\models\tokyoconsulting\ContentBranchDetail;
use backend\models\tokyoconsulting\Country;
use backend\models\tokyoconsulting\Member;
use backend\models\tokyoconsulting\MemberHasType;
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

        $port = Content::find()
            ->where(["contentName" => "Import"])
            ->asArray()
            ->one();

        $ol = Content::find()
            ->where(["contentName" => "Olderposts"])
            ->asArray()
            ->one();

        $set = Content::find()
            ->where(["contentName" => "Asset"])
            ->asArray()
            ->one();

        $tax = Content::find()
            ->where(["contentName" => "Taxassessment1"])
            ->asArray()
            ->one();

        $ment = Content::find()
            ->where(["contentName" => "Taxassessment2"])
            ->asArray()
            ->one();

        $footerbangla = Content::find()
            ->where(["contentName" => "Footerbangladresh"])
            ->asArray()
            ->one();

        $tp = Content::find()
            ->where(["contentName" => "Topic"])
            ->asArray()
            ->one();

        $r = Content::find()
            ->where(["contentName" => "Services"])
            ->asArray()
            ->one();

        $userInThisBranch = 0;
        $branchName = $hash;
        $countryName = $hash;
        $new = [];
        $newsletter = [];
        $import = [];
        $olderposts = [];
        $asset = [];
        $taxassessment1 = [];
        $taxassessment2 = [];
        $footerbangladresh = [];
        $topic = [];
        $services = [];

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
                    ->one();
            }
        }
        if (isset($port) && !empty($port)) {
            $import = ContentDetail::find()
                ->where(["contentId" => $port["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ol) && !empty($ol)) {
            $olderposts = ContentDetail::find()
                ->where(["contentId" => $ol["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($set) && !empty($set)) {
            $asset = ContentDetail::find()
                ->where(["contentId" => $set["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tax) && !empty($tax)) {
            $taxassessment1 = ContentDetail::find()
                ->where(["contentId" => $tax["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ment) && !empty($ment)) {
            $taxassessment2 = ContentDetail::find()
                ->where(["contentId" => $ment["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($footerbangla) && !empty($footerbangla)) {
            $footerbangladresh = ContentDetail::find()
                ->where(["contentId" => $footerbangla["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tp) && !empty($tp)) {
            $topic = ContentDetail::find()
                ->where(["contentId" => $tp["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($r) && !empty($r)) {
            $services = ContentDetail::find()
                ->where(["contentId" => $r["contentId"], "status" => 1])
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
            "services" => $services,
            "country" => $country,
            "userInThisBranch" => $userInThisBranch,
            "canEdit" => $canEdit,
        ]);
    }
}
