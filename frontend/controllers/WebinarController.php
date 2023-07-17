<?php

namespace frontend\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\ContentBranch;
use backend\models\tokyoconsulting\ContentBranchDetail;
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
class WebinarController extends Controller
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
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */

    public function actionIndex($hash)
    {

        $branchName = $hash;
        $webinarvideo = [];
        $detailvideo = [];
        $bangladresh = [];
        $bangladreshDetail = [];
        $webinar = [];
        $webinarDetail = [];
        $register = [];
        $webinarplaylist = [];
        $participants  = [];
        $comment = [];
        $meet = [];
        $freedetail = [];
        $userInThisBranch = 0;

        $branch = Branch::find()
            ->where(["branchName" => $branchName, "status" => 1])
            ->asArray()
            ->one();
        if (isset($branch) && !empty($branch)) {
            $binar = ContentBranch::find()
                ->where(['title' => "When People changes Their Perspective", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($binar) && !empty($binar)) {
                $webinarvideo = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $binar["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $video = ContentBranch::find()
                ->where(['contentName' => "detailvideo", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($video) && !empty($video)) {
                $detailvideo = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $video["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $bangladresh = ContentBranch::find()
                ->where(['contentName' => "Bangladresh", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($bangladresh) && !empty($bangladresh)) {
                $bangladreshDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $bangladresh["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->one();
            }

            $webinar = ContentBranch::find()
                ->where(['contentName' => "Webinar", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($webinar) && !empty($webinar)) {
                $webinarDetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $webinar["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $regis = ContentBranch::find()
                ->where(['contentName' => "Register", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($regis) && !empty($regis)) {
                $register = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $regis["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $playlist = ContentBranch::find()
                ->where(['contentName' => "webinarplaylist", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($playlist) && !empty($playlist)) {
                $webinarplaylist = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $playlist["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $pants = ContentBranch::find()
                ->where(['contentName' => "Participants", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($pants) && !empty($pants)) {
                $participants = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $pants["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $com = ContentBranch::find()
                ->where(['contentName' => "Comment", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($com) && !empty($com)) {
                $comment = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $com["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $mee = ContentBranch::find()
                ->where(['contentName' => "Meet", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($mee) && !empty($mee)) {
                $meet = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $mee["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }

            $free = ContentBranch::find()
                ->where(['contentName' => "Free", "branchId" => $branch["branchId"]])
                ->asArray()
                ->one();
            if (isset($free) && !empty($free)) {
                $freedetail = ContentBranchDetail::find()
                    ->where(["contentBranchId" => $free["contentBranchId"], "status" => 1])
                    ->orderBy("createDateTime")
                    ->asArray()
                    ->all();
            }
        }

        $py = Content::find()
            ->where(["contentName" => "Player1"])
            ->asArray()
            ->one();

        $pla = Content::find()
            ->where(["contentName" => "Player2"])
            ->asArray()
            ->one();

        $player1 = [];
        $player2 = [];

        if (isset($py) && !empty($py)) {
            $player1 = ContentDetail::find()
                ->where(["contentId" => $py["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pla) && !empty($pla)) {
            $player2 = ContentDetail::find()
                ->where(["contentId" => $pla["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        // throw new Exception(count($webinar));
        // throw new Exception(count($everyweek));
        // throw new Exception(count($question));

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

        return $this->render('webinar', [
            "binar" => $binar,
            "webinarvideo" => $webinarvideo,
            "detailvideo" => $detailvideo,
            "bangladresh" => $bangladresh,
            "bangladreshDetail" => $bangladreshDetail,
            "webinar" => $webinar,
            "register" => $register,
            "webinarplaylist" => $webinarplaylist,
            "player1" => $player1,
            "player2" => $player2,
            "participants" => $participants,
            "comment" => $comment,
            "meet" => $meet,
            "freedetail" => $freedetail,
            "canEdit" => $canEdit,
            "userInThisBranch" => $userInThisBranch,
            "webinarDetail" => $webinarDetail,
            "branchName" => $branchName,
            "branchId" => $branch['branchId'],
        ]);
    }

    public function actionWebinarVideo()
    {

        $pagevideo = Content::find()
            ->where(["contentName" => "Pagewebinarvideo"])
            ->asArray()
            ->one();

        $name1 = Content::find()
            ->where(["contentName" => "Namevideo"])
            ->asArray()
            ->one();

        $mary = Content::find()
            ->where(["contentName" => "Summary"])
            ->asArray()
            ->one();

        $subfree = Content::find()
            ->where(["contentName" => "Subwebinar"])
            ->asArray()
            ->one();

        $py = Content::find()
            ->where(["contentName" => "Player1"])
            ->asArray()
            ->one();

        $pla = Content::find()
            ->where(["contentName" => "Player2"])
            ->asArray()
            ->one();

        $playlist = Content::find()
            ->where(["contentName" => "webinarplaylist"])
            ->asArray()
            ->one();

        $pagewebinarvideo = [];
        $namevideo = [];
        $summary = [];
        $subwebinar = [];
        $player1 = [];
        $player2 = [];
        $webinarplaylist = [];

        if (isset($pagevideo) && !empty($pagevideo)) {
            $pagewebinarvideo = ContentDetail::find()
                ->where(["contentId" => $pagevideo["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($name1) && !empty($name1)) {
            $namevideo = ContentDetail::find()
                ->where(["contentId" => $name1["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($mary) && !empty($mary)) {
            $summary = ContentDetail::find()
                ->where(["contentId" => $mary["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($subfree) && !empty($subfree)) {
            $subwebinar = ContentDetail::find()
                ->where(["contentId" => $subfree["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($py) && !empty($py)) {
            $player1 = ContentDetail::find()
                ->where(["contentId" => $py["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pla) && !empty($pla)) {
            $player2 = ContentDetail::find()
                ->where(["contentId" => $pla["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($playlist) && !empty($playlist)) {
            $webinarplaylist = ContentDetail::find()
                ->where(["contentId" => $playlist["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        $admin = 0;
        if (Yii::$app->user->id) {
            $memberTypeAdmin = MemberHasType::find()
                ->select("mt.memberTypeName")
                ->JOIN("LEFT JOIN", "member_type mt", "member_has_type.memberTypeId = mt.memberTypeId")
                //->leftJoin('member_type', 'member_type.memberTypeId = member_has_type.memberTypeId')
                ->where([
                    "member_has_type.memberId" => Yii::$app->user->id,
                    "memberTypeName" => "Administrator"
                ])
                ->asArray()
                ->one();
        }

        if (isset($memberTypeAdmin) && !empty($memberTypeAdmin)) {

            $admin = 1;
        }

        return $this->render('webinar-video', [
            "pagewebinarvideo" => $pagewebinarvideo,
            "namevideo" => $namevideo,
            "summary" => $summary,
            "subwebinar" => $subwebinar,
            "admin" => $admin,
            "player1" => $player1,
            "player2" => $player2,
            "webinarplaylist" => $webinarplaylist
        ]);
    }
}
