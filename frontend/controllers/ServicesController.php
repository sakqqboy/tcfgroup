<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Branch;
use frontend\models\tokyoconsulting\ContentBranch;
use frontend\models\tokyoconsulting\ContentBranchDetail;
use frontend\models\tokyoconsulting\Country;
use frontend\models\tokyoconsulting\Member;
use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\web\Controller;

class ServicesController extends Controller
{
	public function actionIndex($hash)
	{
		$userInThisBranch = 0;
		$canEdit = [];
		$branchName = $hash;
		$countryName = $hash;
		$dropdown = $hash;
		$ther = [];
		$together = [];
		$contribute = [];
		$understanding = [];
		$companymarket  = [];
		$newservices = [];
		$shapestar = [];
		$support = [];
		$related = [];
		$development = [];
		$nameslider = [];
		$selectioncountry = [];
		$garmenticon = [];
		$serleft = [];
		$serright = [];
		$branchserpage = [];
		$imgcountrydetail = [];
		$topiccountrydetail = [];
		$businessdetail = [];
		$wikiimage = [];
		$busi = [];


		$branch = Branch::find()->where(["branchName" => $branchName, "status" => 1])->asArray()->one();
		$country = Country::find()->where(["countryName" => $countryName, "status" => 1])->asArray()->all();

		$dropdown = Country::find()->where(["status" => 1, "hasBranch" => 1])
			->orderBy('countryName')
			->asArray()
			->all();


		if (isset($branch) && !empty($branch)) {
			$busi = ContentBranch::find()
				->where(['contentName' => "Business", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($busi) && !empty($busi)) {
				$businessdetail = ContentBranchDetail::find()
					->where(["contentBranchId" => $busi["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$wiki = ContentBranch::find()
				->where(['contentName' => "Wikipic", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($wiki) && !empty($wiki)) {
				$wikiimage = ContentBranchDetail::find()
					->where(["contentBranchId" => $wiki["contentBranchId"], "status" => 1])
					->asArray()
					->one();
			}
		}
		if (isset($branch) && !empty($branch)) {
			$bsp = ContentBranch::find()
				->where(['contentName' => "Branch", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($bsp) && !empty($bsp)) {
				$branchserpage = ContentBranchDetail::find()
					->where(["contentBranchId" => $bsp["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$ther = ContentBranch::find()
				->where(['contentName' => "Together", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($ther) && !empty($ther)) {
				$together = ContentBranchDetail::find()
					->where(["contentBranchId" => $ther["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$tri = ContentBranch::find()
				->where(['contentName' => "Contribute", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($tri) && !empty($tri)) {
				$contribute = ContentBranchDetail::find()
					->where(["contentBranchId" => $tri["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$standing = ContentBranch::find()
				->where(['contentName' => "Understanding", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($standing) && !empty($standing)) {
				$understanding = ContentBranchDetail::find()
					->where(["contentBranchId" => $standing["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$s = ContentBranch::find()
				->where(['contentName' => "Newservices", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($s) && !empty($s)) {
				$newservices = ContentBranchDetail::find()
					->where(["contentBranchId" => $s["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$nmlider = ContentBranch::find()
				->where(['contentName' => "Nameslider", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($nmlider) && !empty($nmlider)) {
				$nameslider = ContentBranchDetail::find()
					->where(["contentBranchId" => $nmlider["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$shape = ContentBranch::find()
				->where(['contentName' => "Shapestar", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($shape) && !empty($shape)) {
				$shapestar = ContentBranchDetail::find()
					->where(["contentBranchId" => $shape["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$sup = ContentBranch::find()
				->where(['contentName' => "Support", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($sup) && !empty($sup)) {
				$support = ContentBranchDetail::find()
					->where(["contentBranchId" => $sup["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$marketing = ContentBranch::find()
				->where(['contentName' => "Companymarket", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($marketing) && !empty($marketing)) {
				$companymarket = ContentBranchDetail::find()
					->where(["contentBranchId" => $marketing["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$lected = ContentBranch::find()
				->where(['contentName' => "Related", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($lected) && !empty($lected)) {
				$related = ContentBranchDetail::find()
					->where(["contentBranchId" => $lected["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$dave = ContentBranch::find()
				->where(['contentName' => "Development", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($dave) && !empty($dave)) {
				$development = ContentBranchDetail::find()
					->where(["contentBranchId" => $dave["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$sl = ContentBranch::find()
				->where(['contentName' => "ServiceLeft", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($sl) && !empty($sl)) {
				$serleft = ContentBranchDetail::find()
					->where(["contentBranchId" => $sl["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$sr = ContentBranch::find()
				->where(['contentName' => "Serviceright", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($sr) && !empty($sr)) {
				$serright = ContentBranchDetail::find()
					->where(["contentBranchId" => $sr["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$imgcountry = ContentBranch::find()
				->where(['contentName' => "Imagecountry", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($imgcountry) && !empty($imgcountry)) {
				$imgcountrydetail = ContentBranchDetail::find()
					->where(["contentBranchId" => $imgcountry["contentBranchId"], "status" => 1])
					->asArray()
					->one();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$topiccountry = ContentBranch::find()
				->where(['contentName' => "Topiccountry", "branchId" => $branch["branchId"]])
				->asArray()
				->one();
			if (isset($topiccountry) && !empty($topiccountry)) {
				$topiccountrydetail = ContentBranchDetail::find()
					->where(["contentBranchId" => $topiccountry["contentBranchId"], "status" => 1])
					->asArray()
					->all();
			}
		}

		if (isset($branch) && !empty($branch)) {
			$icon5 = Content::find()
				->where(["contentName" => "Garmenticon"])
				->asArray()
				->one();
			if (isset($icon5) && !empty($icon5)) {
				$garmenticon = ContentDetail::find()
					->where(["contentId" => $icon5["contentId"], "status" => 1])
					->asArray()
					->all();
			}
		}

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

		return $this->render('services', [
			"ther" => $ther,
			"together" => $together,
			"contribute" => $contribute,
			"understanding" => $understanding,
			"standing" => $standing,
			"companymarket" => $companymarket,
			"newservices" => $newservices,
			"shapestar" => $shapestar,
			"shape" => $shape,
			"support" => $support,
			"related" => $related,
			"development" => $development,
			"nameslider" => $nameslider,
			"selectioncountry" => $selectioncountry,
			"imgcountrydetail" => $imgcountrydetail,
			"garmenticon" => $garmenticon,
			"userInThisBranch" => $userInThisBranch,
			"canEdit" => $canEdit,
			"branchName" => $branchName,
			"country" => $country,
			"s" => $s,
			"marketing" => $marketing,
			"serleft" => $serleft,
			"serright" => $serright,
			"sr" => $sr,
			"sl" => $sl,
			"dropdown" => $dropdown,
			"bsp" => $bsp,
			"branchserpage" => $branchserpage,
			"topiccountrydetail" => $topiccountrydetail,
			"topiccountry" => $topiccountry,
			"tri" => $tri,
			"businessdetail" => $businessdetail,
			"busi" => $busi,
			"wikiimage" => $wikiimage,
			"wiki" => $wiki,
			"branchId" => $branch['branchId'],

		]);
	}
}
