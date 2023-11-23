<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\MemberHasType;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use Yii;

/**
 * Site controller
 */
class CareerController extends Controller
{
    public function actionIndex()
    {

        $jobtcf = Content::find()
            ->where(["contentName" => "Career"])
            ->asArray()
            ->one();

        $the = Content::find()
            ->where(["contentName" => "Future"])
            ->asArray()
            ->one();

        $more = Content::find()
            ->where(["contentName" => "Learnmore"])
            ->asArray()
            ->one();

        $ex = Content::find()
            ->where(["contentName" => "Explore"])
            ->asArray()
            ->one();

        $ap = Content::find()
            ->where(["contentName" => "Apply"])
            ->asArray()
            ->one();

        $pr = Content::find()
            ->where(["contentName" => "Professional"])
            ->asArray()
            ->one();

        $cu = Content::find()
            ->where(["contentName" => "Culture"])
            ->asArray()
            ->one();

        $vo = Content::find()
            ->where(["contentName" => "Video"])
            ->asArray()
            ->one();

        $di = Content::find()
            ->where(["contentName" => "Discovercountry"])
            ->asArray()
            ->one();

        $in = Content::find()
            ->where(["contentName" => "Incountry"])
            ->asArray()
            ->one();

        $sh = Content::find()
            ->where(["contentName" => "Show"])
            ->asArray()
            ->one();

        $btc = Content::find()
            ->where(["contentName" => "Badge"])
            ->asArray()
            ->one();

        $cd = Content::find()
            ->where(["contentName" => "Card"])
            ->asArray()
            ->one();

        $ft = Content::find()
            ->where(["contentName" => "Footercontact"])
            ->asArray()
            ->one();

        $career = [];
        $future = [];
        $learnmore = [];
        $explore = [];
        $apply = [];
        $professional = [];
        $culture = [];
        $video = [];
        $discovercountry = [];
        $incountry = [];
        $show = [];
        $badge = [];
        $card = [];
        $footercontact = [];

        if (isset($jobtcf) && !empty($jobtcf)) {
            $career = ContentDetail::find()
                ->where(["contentId" => $jobtcf["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($the) && !empty($the)) {
            $future = ContentDetail::find()
                ->where(["contentId" => $the["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($more) && !empty($more)) {
            $learnmore = ContentDetail::find()
                ->where(["contentId" => $more["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ex) && !empty($ex)) {
            $explore = ContentDetail::find()
                ->where(["contentId" => $ex["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ap) && !empty($ap)) {
            $apply = ContentDetail::find()
                ->where(["contentId" => $ap["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($pr) && !empty($pr)) {
            $professional = ContentDetail::find()
                ->where(["contentId" => $pr["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($cu) && !empty($cu)) {
            $culture =  ContentDetail::find()
                ->where(["contentId" => $cu["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($vo) && !empty($vo)) {
            $video =  ContentDetail::find()
                ->where(["contentId" => $vo["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($di) && !empty($di)) {
            $discovercountry =  ContentDetail::find()
                ->where(["contentId" => $di["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($in) && !empty($in)) {
            $incountry =  ContentDetail::find()
                ->where(["contentId" => $in["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($sh) && !empty($sh)) {
            $show =  ContentDetail::find()
                ->where(["contentId" => $sh["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($btc) && !empty($btc)) {
            $badge =  ContentDetail::find()
                ->where(["contentId" => $btc["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($cd) && !empty($cd)) {
            $card =  ContentDetail::find()
                ->where(["contentId" => $cd["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ft) && !empty($ft)) {
            $footercontact =  ContentDetail::find()
                ->where(["contentId" => $ft["contentId"], "status" => 1])
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
                    "mt.memberTypeName" => "Administrator"
                ])
                ->asArray()
                ->one();
        }

        if (isset($memberTypeAdmin) && !empty($memberTypeAdmin)) {

            $admin = 1;
        }

        return $this->render('career', [
            "career" => $career,
            "future" => $future,
            "learnmore" => $learnmore,
            "explore" => $explore,
            "apply" => $apply,
            "professional" => $professional,
            "culture" => $culture,
            "video" => $video,
            "discovercountry" => $discovercountry,
            "incountry" => $incountry,
            "show" => $show,
            "badge" => $badge,
            "card" => $card,
            "footercontact" => $footercontact,
            "admin" => $admin,
            "vo" => $vo,
            "sh" => $sh,
        ]);
    }
}
