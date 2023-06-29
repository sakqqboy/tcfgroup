<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\web\Controller;

class ContactUsController extends Controller
{
	public function actionIndex()
	{
		$contact = [];
		$footercontact = [];
		$disclaimer = [];
		$contactContent = Content::find()
			->where(["contentName" => "Contact"])
			->asArray()
			->one();
		if (isset($contactContent) && !empty($contactContent)) {
			$contact = ContentDetail::find()
				->where(["contentId" => $contactContent["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		$footercontactContent = Content::find()
			->where(["contentName" => "Footercontact"])
			->asArray()
			->one();
		if (isset($footercontactContent) && !empty($footercontactContent)) {
			$footercontact = ContentDetail::find()
				->where(["contentId" => $footercontactContent["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		$disclaimerContent = Content::find()
			->where(["contentName" => "Disclaimer"])
			->asArray()
			->one();
		if (isset($disclaimerContent) && !empty($disclaimerContent)) {
			$disclaimer = ContentDetail::find()
				->where(["contentId" => $disclaimerContent["contentId"], "status" => 1])
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
		return $this->render('contact', [
			"contact" => $contact,
			"contactContent" => $contactContent,
			"footercontact" => $footercontact,
			"footercontactContent" => $footercontactContent,
			"disclaimer" => $disclaimer,
			"disclaimerContent" => $disclaimerContent,
			"admin" => $admin
		]);
	}
}
