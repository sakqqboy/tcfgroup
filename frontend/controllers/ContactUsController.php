<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\ContactUs;
use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\Country;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\db\Expression;
use yii\web\Controller;

class ContactUsController extends Controller
{
	public function actionIndex()
	{
		$contact = [];
		$footercontact = [];
		$disclaimer = [];
		$dropdown = [];
		$subtopicDetail = [];
		$app = [];

		$dropdown = Country::find()->where("status=1")
			->orderBy('countryName')
			->asArray()
			->all();

		$subtopic = Content::find()
			->where(['contentName' => "Subtopic"])
			->asArray()
			->one();
		if (isset($subtopic) && !empty($subtopic)) {
			$subtopicDetail = ContentDetail::find()
				->where(["contentId" => $subtopic["contentId"], "status" => 1])
				->asArray()
				->one();
		}
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
		$application = Content::find()
			->where(["contentName" => "Application"])
			->asArray()
			->one();
		if (isset($application) && !empty($application)) {
			$app = ContentDetail::find()
				->where(["contentId" => $application["contentId"], "status" => 1])
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
			"admin" => $admin,
			"dropdown" => $dropdown,
			"subtopic" => $subtopic,
			"subtopicDetail" => $subtopicDetail,
			"application" => $application,
			"app" => $app,

		]);
	}
	public function actionSaveContact()
	{
		$res = [];
		if (isset($_POST["hearus"])) {
			//throw new Exception(print_r(Yii::$app->request->post(), true));
			$contact = new ContactUs();
			$contact->hearUs = $_POST["hearus"];
			$contact->countryName = $_POST["countryname"];
			$contact->fullName = $_POST["fullname"];
			$contact->birthdate = $_POST["birthdate"];
			$contact->address = $_POST["address"];
			$contact->cityName = $_POST["cityname"];
			$contact->postalCode = $_POST["postalcode"];
			$contact->email = $_POST["email"];
			$contact->phoneNumber = $_POST["phonenumber"];
			$contact->image = $_POST["image"];
			$contact->createDateTime = new Expression('NOW()');
			$contact->updateDateTime = new Expression('NOW()');

			if ($contact->save(false)) {
				$res["status"] = true;
			}
		}
		return json_encode($res);
	}
}
