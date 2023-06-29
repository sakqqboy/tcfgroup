<?php

namespace frontend\controllers;

use backend\models\tokyoconsulting\MemberHasType;
use yii\web\Controller;
use common\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use Yii;

/**
 * Site controller
 */
class ServiceController extends Controller
{

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


    public function actionIndex()
    {
        $admin = 0;
        if (Yii::$app->user->id) {
            $memberTypeAdmin = MemberHasType::find()
                ->select("memberTypeName")
                ->leftJoin('member_type', 'member_type.memberTypeId = member_has_type.memberTypeId')
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


        $r = Content::find()
            ->where(["contentName" => "Services"])
            ->asArray()
            ->one();

        $s = Content::find()
            ->where(["contentName" => "Bannerservices"])
            ->asArray()
            ->one();

        $x = Content::find()
            ->where(["contentName" => "Box"])
            ->asArray()
            ->one();

        $t = Content::find()
            ->where(["contentName" => "Item"])
            ->asArray()
            ->one();

        $d = Content::find()
            ->where(["contentName" => "Detail"])
            ->asArray()
            ->one();

        $tokyo = Content::find()
            ->where(["contentName" => "Picturegraphics"])
            ->asArray()
            ->one();

        $o = Content::find()
            ->where(["contentName" => "Founder"])
            ->asArray()
            ->one();

        $u = Content::find()
            ->where(["contentName" => "Star"])
            ->asArray()
            ->one();
        $v = Content::find()
            ->where(["contentName" => "Itemstar"])
            ->asArray()
            ->one();

        $g = Content::find()
            ->where(["contentName" => "Data"])
            ->asArray()
            ->one();

        $w = Content::find()
            ->where(["contentName" => "Drive"])
            ->asArray()
            ->one();

        $q = Content::find()
            ->where(["contentName" => "Button"])
            ->asArray()
            ->one();

        $tcf = Content::find()
            ->where(["contentName" => "Best"])
            ->asArray()
            ->one();

        $pic = Content::find()
            ->where(["contentName" => "Accounting"])
            ->asArray()
            ->one();

        $table = Content::find()
            ->where(["contentName" => "Taxation"])
            ->asArray()
            ->one();

        $select = Content::find()
            ->where(["contentName" => "Stage"])
            ->asArray()
            ->one();

        $bk = Content::find()
            ->where(["contentName" => "Background"])
            ->asArray()
            ->one();

        $mos = Content::find()
            ->where(["contentName" => "Most"])
            ->asArray()
            ->one();

        $tryin = Content::find()
            ->where(["contentName" => "Countryindex2"])
            ->asArray()
            ->one();


        $services = [];
        $bannerservices = [];
        $box = [];
        $item = [];
        $detail = [];
        $picturegraphics = [];
        $founder = [];
        $star = [];
        $itemstar = [];
        $data = [];
        $drive = [];
        $button = [];
        $best = [];
        $accounting = [];
        $taxation = [];
        $stage = [];
        $background = [];
        $most = [];
        $countryindex2 = [];


        if (isset($r) && !empty($r)) {
            $services = ContentDetail::find()
                ->where(["contentId" => $r["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($s) && !empty($s)) {
            $bannerservices = ContentDetail::find()
                ->where(["contentId" => $s["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($x) && !empty($x)) {
            $box = ContentDetail::find()
                ->where(["contentId" => $x["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($t) && !empty($t)) {
            $item = ContentDetail::find()
                ->where(["contentId" => $t["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($d) && !empty($d)) {
            $detail = ContentDetail::find()
                ->where(["contentId" => $d["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tokyo) && !empty($tokyo)) {
            $picturegraphics = ContentDetail::find()
                ->where(["contentId" => $tokyo["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($o) && !empty($o)) {
            $founder = ContentDetail::find()
                ->where(["contentId" => $o["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($u) && !empty($u)) {
            $star = ContentDetail::find()
                ->where(["contentId" => $u["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($v) && !empty($v)) {
            $itemstar = ContentDetail::find()
                ->where(["contentId" => $v["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($g) && !empty($g)) {
            $data = ContentDetail::find()
                ->where(["contentId" => $g["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($w) && !empty($w)) {
            $drive = ContentDetail::find()
                ->where(["contentId" => $w["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($q) && !empty($q)) {
            $button = ContentDetail::find()
                ->where(["contentId" => $q["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tcf) && !empty($tcf)) {
            $best = ContentDetail::find()
                ->where(["contentId" => $tcf["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($pic) && !empty($pic)) {
            $accounting = ContentDetail::find()
                ->where(["contentId" => $pic["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($table) && !empty($table)) {
            $taxation = ContentDetail::find()
                ->where(["contentId" => $table["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($select) && !empty($select)) {
            $stage = ContentDetail::find()
                ->where(["contentId" => $select["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($bk) && !empty($bk)) {
            $background = ContentDetail::find()
                ->where(["contentId" => $bk["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($mos) && !empty($mos)) {
            $most = ContentDetail::find()
                ->where(["contentId" => $mos["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($tryin) && !empty($tryin)) {
            $countryindex2 = ContentDetail::find()
                ->where(["contentId" => $tryin["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        return $this->render('services', [
            "services" => $services,
            "bannerservices" => $bannerservices,
            "box" => $box,
            "item" => $item,
            "detail" => $detail,
            "picturegraphics" => $picturegraphics,
            "founder" => $founder,
            "star" => $star,
            "itemstar" => $itemstar,
            "data" => $data,
            "drive" => $drive,
            "button" => $button,
            "best" => $best,
            "accounting" => $accounting,
            "taxation" => $taxation,
            "stage" => $stage,
            "background" => $background,
            "most" => $most,
            "countryindex2" => $countryindex2,
            "admin" => $admin

        ]);
    }
}
