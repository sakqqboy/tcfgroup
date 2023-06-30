<?php

namespace frontend\controllers;

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\ContentBranch;
use backend\models\tokyoconsulting\ContentBranchDetail;
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
                    ->asArray()
                    ->one();
            }
        }

        $icon = Content::find()
            ->where(["contentName" => "Everyweek"])
            ->asArray()
            ->one();

        $icon2 = Content::find()
            ->where(["contentName" => "Question"])
            ->asArray()
            ->one();

        $icon3 = Content::find()
            ->where(["contentName" => "Mins"])
            ->asArray()
            ->one();

        $la = Content::find()
            ->where(["contentName" => "Bangladresh"])
            ->asArray()
            ->one();

        $regis = Content::find()
            ->where(["contentName" => "Register"])
            ->asArray()
            ->one();

        $playlist = Content::find()
            ->where(["contentName" => "webinarplaylist"])
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

        $pants = Content::find()
            ->where(["contentName" => "Participants"])
            ->asArray()
            ->one();

        $com = Content::find()
            ->where(["contentName" => "Comment"])
            ->asArray()
            ->one();

        $mee = Content::find()
            ->where(["contentName" => "Meet"])
            ->asArray()
            ->one();
        
        $webinar = Content::find()
            ->where(["contentName" => "Webinar"])
            ->asArray()
            ->one();

        $binar = [];
        $webinarvideo = [];
        $everyweek = [];
        $question = [];
        $mins = [];
        $bangladresh = [];
        $register = [];
        $webinarplaylist = [];
        $player1 = [];
        $player2 = [];
        $participants  = [];
        $comment = [];
        $meet = [];
        $webinarDetail = [];

        if (isset($icon) && !empty($icon)) {
            $everyweek = ContentDetail::find()
                ->where(["contentId" => $icon["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($icon2) && !empty($icon2)) {
            $question = ContentDetail::find()
                ->where(["contentId" => $icon2["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($icon3) && !empty($icon3)) {
            $mins = ContentDetail::find()
                ->where(["contentId" => $icon3["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($la) && !empty($la)) {
            $bangladresh = ContentDetail::find()
                ->where(["contentId" => $la["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($register) && !empty($regis)) {
            $register = ContentDetail::find()
                ->where(["contentId" => $regis["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($playlist) && !empty($playlist)) {
            $webinarplaylist = ContentDetail::find()
                ->where(["contentId" => $playlist["contentId"], "status" => 1])
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
        if (isset($pants) && !empty($pants)) {
            $participants = ContentDetail::find()
                ->where(["contentId" => $pants["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($com) && !empty($com)) {
            $comment = ContentDetail::find()
                ->where(["contentId" => $com["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($mee) && !empty($mee)) {
            $meet = ContentDetail::find()
                ->where(["contentId" => $mee["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($webinar) && !empty($webinar)) {
            $webinarDetail = ContentDetail::find()
                ->where(["contentId" => $webinar["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        // throw new Exception(count($webinar));
        // throw new Exception(count($everyweek));
        // throw new Exception(count($question));

        $canEdit = 0;
        $userInThisBranch = 0;
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
            "everyweek" => $everyweek,
            "question" => $question,
            "mins" => $mins,
            "bangladresh" => $bangladresh,
            "webinar" => $webinar,
            "register" => $register,
            "webinarplaylist" => $webinarplaylist,
            "player1" => $player1,
            "player2" => $player2,
            "participants" => $participants,
            "comment" => $comment,
            "meet" => $meet,
            "canEdit" => $canEdit,
            "userInThisBranch" => $userInThisBranch,
            "webinarDetail" => $webinarDetail,
            "branchName" => $branchName
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