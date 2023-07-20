<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\MemberHasType;
use yii\web\Controller;
use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use Yii;

/**
 * Site controller
 */
class PhilosophyController extends Controller
{
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


        $l = Content::find()
            ->where(["contentName" => "Pagemain"])
            ->asArray()
            ->one();

        $m = Content::find()
            ->where(["contentName" => "Philosophy"])
            ->asArray()
            ->one();

        $we = Content::find()
            ->where(["contentName" => "Work"])
            ->asArray()
            ->one();

        $shot = Content::find()
            ->where(["contentName" => "Playshot1"])
            ->asArray()
            ->one();

        $hs = Content::find()
            ->where(["contentName" => "Playshot2"])
            ->asArray()
            ->one();

        $gi = Content::find()
            ->where(["contentName" => "Give"])
            ->asArray()
            ->one();

        $suc = Content::find()
            ->where(["contentName" => "Success"])
            ->asArray()
            ->one();

        $or = Content::find()
            ->where(["contentName" => "Playshot3"])
            ->asArray()
            ->one();

        $ly = Content::find()
            ->where(["contentName" => "Playshot4"])
            ->asArray()
            ->one();

        $ti = Content::find()
            ->where(["contentName" => "Gratitude"])
            ->asArray()
            ->one();

        $pagemain = [];
        $philosophy = [];
        $work = [];
        $playshot1 = [];
        $playshot2 = [];
        $give = [];
        $success = [];
        $playshot3 = [];
        $playshot4 = [];
        $gratitude = [];

        if (isset($l) && !empty($l)) {
            $pagemain = ContentDetail::find()
                ->where(["contentId" => $l["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($m) && !empty($m)) {
            $philosophy = ContentDetail::find()
                ->where(["contentId" => $m["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($we) && !empty($we)) {
            $work = ContentDetail::find()
                ->where(["contentId" => $we["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($shot) && !empty($shot)) {
            $playshot1 = ContentDetail::find()
                ->where(["contentId" => $shot["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($hs) && !empty($hs)) {
            $playshot2 = ContentDetail::find()
                ->where(["contentId" => $hs["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($gi) && !empty($gi)) {
            $give = ContentDetail::find()
                ->where(["contentId" => $gi["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($suc) && !empty($suc)) {
            $success = ContentDetail::find()
                ->where(["contentId" => $suc["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($or) && !empty($or)) {
            $playshot3 = ContentDetail::find()
                ->where(["contentId" => $or["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ly) && !empty($ly)) {
            $playshot4 = ContentDetail::find()
                ->where(["contentId" => $ly["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($ti) && !empty($ti)) {
            $gratitude = ContentDetail::find()
                ->where(["contentId" => $ti["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        // throw new Exception(count($pagemain));
        return $this->render('philosophy', [
            "pagemain" => $pagemain,
            "philosophy" => $philosophy,
            "work" => $work,
            "playshot1" => $playshot1,
            "playshot2" => $playshot2,
            "give" => $give,
            "success" => $success,
            "playshot3" => $playshot3,
            "playshot4" => $playshot4,
            "gratitude" => $gratitude,
            "admin" => $admin

        ]);
    }
}
