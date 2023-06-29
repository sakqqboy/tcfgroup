<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\web\Controller;

class AboutUsController extends Controller
{
	public function actionIndex()
	{
		$vision = [];
		$existence = [];
		$strategy = [];
		$should = [];
		$consultinggroup = [];
		$footer = [];
		$footercontact = [];
		$visionContent = Content::find()
			->where(["contentName" => "Vision"])
			->asArray()
			->one();
		if (isset($visionContent) && !empty($visionContent)) {
			$vision = ContentDetail::find()
				->where(["contentId" => $visionContent["contentId"], "status" => 1])
				->asArray()
				->all();
		}

		$existenceContent = Content::find()
			->where(["contentName" => "Existence"])
			->asArray()
			->one();
		if (isset($existenceContent) && !empty($existenceContent)) {
			$existence = ContentDetail::find()
				->where(["contentId" => $existenceContent["contentId"], "status" => 1])
				->asArray()
				->all();
		}

		$strategyContent = Content::find()
			->where(["contentName" => "Strategy"])
			->asArray()
			->one();
		if (isset($strategyContent) && !empty($strategyContent)) {
			$strategy = ContentDetail::find()
				->where(["contentId" => $strategyContent["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		$shouldContent = Content::find()
			->where(["contentName" => "Should"])
			->asArray()
			->one();
		if (isset($shouldContent) && !empty($shouldContent)) {
			$should = ContentDetail::find()
				->where(["contentId" => $shouldContent["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		$group = Content::find()
			->where(["contentName" => "Consultinggroup"])
			->asArray()
			->one();
		if (isset($group) && !empty($group)) {
			$consultinggroup = ContentDetail::find()
				->where(["contentId" => $group["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		$footerContent = Content::find()
			->where(["contentName" => "Footer"])
			->asArray()
			->one();
		if (isset($footerContent) && !empty($footerContent)) {
			$footer = ContentDetail::find()
				->where(["contentId" => $footerContent["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		$ftContact = Content::find()
			->where(["contentName" => "Footercontact"])
			->asArray()
			->one();
		if (isset($ftContact) && !empty($ftContact)) {
			$footercontact = ContentDetail::find()
				->where(["contentId" => $ftContact["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		$admin = 0;
		if (Yii::$app->user->id) {
			$memberTypeAdmin = MemberHasType::find()
				->select("mt.memberTypeName")
				->JOIN("LEFT JOIN", "member_type mt", "member_has_type.memberTypeId = mt.memberTypeId")
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
		return $this->render('about', [
			"visionContent" => $visionContent,
			"vision" => $vision,
			"existence" => $existence,
			"existenceContent" => $existenceContent,
			"strategy" => $strategy,
			"strategyContent" => $strategyContent,
			"should" => $should,
			"shouldContent" => $shouldContent,
			"consultinggroup" => $consultinggroup,
			"group" => $group,
			"footer" => $footer,
			"footerContent" => $footerContent,
			"footercontact" => $footercontact,
			"ftContact" => $ftContact,
			"admin" => $admin
		]);
	}
}
