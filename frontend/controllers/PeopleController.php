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
class PeopleController extends Controller
{
    public function actionIndex()
    {

        $at = Content::find()
            ->where(["contentName" => "People"])
            ->asArray()
            ->one();

        $our = Content::find()
            ->where(["contentName" => "Textmain"])
            ->asArray()
            ->one();

        $person = Content::find()
            ->where(["contentName" => "Personnel"])
            ->asArray()
            ->one();

        $uno = Content::find()
            ->where(["contentName" => "Kuno"])
            ->asArray()
            ->one();

        $meetting = Content::find()
            ->where(["contentName" => "Global"])
            ->asArray()
            ->one();

        $incountry = Content::find()
            ->where(["contentName" => "Insider"])
            ->asArray()
            ->one();

        $work = Content::find()
            ->where(["contentName" => "Doctrines"])
            ->asArray()
            ->one();



        $people = [];
        $textmain = [];
        $personnel = [];
        $kuno = [];
        $global = [];
        $insider = [];
        $doctrines = [];

        if (isset($at) && !empty($at)) {
            $people = ContentDetail::find()
                ->where(["contentId" => $at["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($our) && !empty($our)) {
            $textmain = ContentDetail::find()
                ->where(["contentId" => $our["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($person) && !empty($person)) {
            $personnel = ContentDetail::find()
                ->where(["contentId" => $person["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($uno) && !empty($uno)) {
            $kuno = ContentDetail::find()
                ->where(["contentId" => $uno["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }

        if (isset($meetting) && !empty($meetting)) {
            $global = ContentDetail::find()
                ->where(["contentId" => $meetting["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($incountry) && !empty($incountry)) {
            $insider = ContentDetail::find()
                ->where(["contentId" => $incountry["contentId"], "status" => 1])
                ->asArray()
                ->all();
        }
        if (isset($work) && !empty($work)) {
            $doctrines = ContentDetail::find()
                ->where(["contentId" => $work["contentId"], "status" => 1])
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

        return $this->render('people', [
            "people" => $people,
            "textmain" => $textmain,
            "personnel" => $personnel,
            "kuno" => $kuno,
            "global" => $global,
            "insider" => $insider,
            "doctrines" => $doctrines,
            "admin" => $admin,
        ]);
    }
}
