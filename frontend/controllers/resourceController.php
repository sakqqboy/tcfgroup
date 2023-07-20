<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Branch;
use frontend\models\tokyoconsulting\Client;
use frontend\models\tokyoconsulting\ContentBranch;
use frontend\models\tokyoconsulting\ContentBranchDetail;
use frontend\models\tokyoconsulting\Country;
use frontend\models\tokyoconsulting\Member;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\db\Expression;
use yii\web\Controller;

class ResourceController extends Controller
{
	public function actionIndex($hash)
	{
		$branchName = $hash;
		$countryName = $hash;
		$dropdown = $hash;
		$bannerresource = [];
		$national = [];
		$description = [];
		$tabledetail = [];
		$legalDetail = [];
		$branch = Branch::find()
			->where(["branchName" => $branchName, "status" => 1])
			->asArray()
			->one();

		$country = Country::find()
			->where(["countryName" => $countryName, "status" => 1])
			->asArray()
			->all();

		$dropdown = Country::find()->where("status=1")
			->orderBy('countryName')
			->asArray()
			->all();
		$resource = ContentBranch::find()
			->where(['contentName' => "Bannerresource", "branchId" => $branch["branchId"]])
			->asArray()
			->one();
		if (isset($resource) && !empty($resource)) {
			$bannerresource = ContentBranchDetail::find()
				->where(["contentBranchId" => $resource["contentBranchId"], "status" => 1])
				->asArray()
				->all();
		}

		$tio = ContentBranch::find()
			->where(['contentName' => "National", "branchId" => $branch["branchId"]])
			->asArray()
			->one();
		if (isset($tio) && !empty($tio)) {
			$national = ContentBranchDetail::find()
				->where(["contentBranchId" => $tio["contentBranchId"], "status" => 1])
				->asArray()
				->all();
		}

		$des = ContentBranch::find()
			->where(['contentName' => "Description", "branchId" => $branch["branchId"]])
			->asArray()
			->one();
		if (isset($des) && !empty($des)) {
			$description = ContentBranchDetail::find()
				->where(["contentBranchId" => $des["contentBranchId"], "status" => 1])
				->asArray()
				->all();
		}

		$blede = ContentBranch::find()
			->where(['contentName' => "Tabledetail", "branchId" => $branch["branchId"]])
			->asArray()
			->one();
		if (isset($blede) && !empty($blede)) {
			$tabledetail = ContentBranchDetail::find()
				->where(["contentBranchId" => $blede["contentBranchId"], "status" => 1])
				->asArray()
				->all();
		}

		$legal = ContentBranch::find()
			->where(['title' => "Connect Experts", "branchId" => $branch["branchId"]])
			->asArray()
			->one();
		if (isset($legal) && !empty($legal)) {
			$legalDetail = ContentBranchDetail::find()
				->where(["contentBranchId" => $legal["contentBranchId"], "status" => 1])
				->asArray()
				->one();
		}

		$canEdit = 0;
		$userInThisBranch = 0;
		if (isset(Yii::$app->user->id)) {
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
		return $this->render('resources', [
			"branchName" => $branchName,
			"country" => $country,
			"dropdown" => $dropdown,
			"canEdit" => $canEdit,
			"userInThisBranch" => $userInThisBranch,
			"resource" => $resource,
			"tio" => $tio,
			"des" => $des,
			"blede" => $blede,
			"legal" => $legal,
			"bannerresource" => $bannerresource,
			"national" => $national,
			"description" => $description,
			"tabledetail" => $tabledetail,
			"legalDetail" => $legalDetail,
			"branchId" => $branch['branchId'],
		]);
	}
	public function actionSaveClient()
	{
		$res = [];
		if (isset($_POST["country"])) {
			// throw new exception(print_r(Yii::$app->request->post(), true));
			$client = new Client();
			$client->countryId = $_POST["country"];
			$client->typePerson = $_POST["typeperson"];
			$client->company = $_POST["company"];
			$client->name = $_POST["name"];
			$client->position = $_POST["position"];
			$client->email = $_POST["email"];
			$client->phoneNumber = $_POST["phonenumber"];
			$client->businessType = $_POST["businesstype"];
			$client->question = $_POST["question"];
			$client->detail = $_POST["detail"];
			$client->createDateTime = new Expression('NOW()');
			$client->updateDateTime = new Expression('NOW()');

			if ($client->save(false)) {
				$res["status"] = true;
			}
		}
		return json_encode($res);
	}
}
