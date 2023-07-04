<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Branch;
use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentBranch;
use frontend\models\tokyoconsulting\ContentBranchDetail;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\Country;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\db\Expression;
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
	public function actionUpdateContentBranch()
	{

		$content = Content::find()->where(["contentName" => "branch"])->one();
		if (isset($content) && !empty($content)) {
			$contentDetail = ContentDetail::find()
				->where(["contentId" => $content->contentId])
				->andWhere("title!='Bangladesh'")
				->all();

			foreach ($contentDetail as $cd) :
				$branch = Branch::find()->select('branchId')
					->where(["status" => 1, "branchName" => $cd["title"]])
					->one();
				$start = 467;
				while ($start < 495) {
					$contentBranch = ContentBranch::find()->where(["contentBranchId" => $start])->one();
					if (isset($contentBranch) && !empty($contentBranch)) {
						$newContentBranch = new ContentBranch();
						$newContentBranch->contentName = $contentBranch->contentName;
						$newContentBranch->branchId = $branch->branchId;
						$newContentBranch->title = $contentBranch->title;
						$newContentBranch->detail = $contentBranch->title;
						$newContentBranch->status = $contentBranch->status;
						$newContentBranch->createDateTime = $contentBranch->createDateTime;
						$newContentBranch->updateDateTime = $contentBranch->updateDateTime;
						if ($newContentBranch->save(false)) {
							$newContentBranchId = Yii::$app->db->lastInsertID;
							$contentBranchDetail = ContentBranchDetail::find()
								->where(["contentBranchId" => $contentBranch->contentBranchId])
								->all();
							if (isset($contentBranchDetail) && count($contentBranchDetail) > 0) {
								foreach ($contentBranchDetail as $cbd) :
									$newContentBranchDetail = new ContentBranchDetail();
									$newContentBranchDetail->contentBranchId = $newContentBranchId;
									$newContentBranchDetail->title = $cbd->title;
									$newContentBranchDetail->detail = $cbd->detail;
									$newContentBranchDetail->detail2 = $cbd->detail2;
									$newContentBranchDetail->detail3 = $cbd->detail3;
									$newContentBranchDetail->detail4 = $cbd->detail4;
									$newContentBranchDetail->detail5 = $cbd->detail5;
									$newContentBranchDetail->detail6 = $cbd->detail6;
									$newContentBranchDetail->detail7 = $cbd->detail7;
									$newContentBranchDetail->image = $cbd->image;
									$newContentBranchDetail->url = $cbd->url;
									$newContentBranchDetail->status = $cbd->status;
									$newContentBranchDetail->createDatetime = $cbd->createDatetime;
									$newContentBranchDetail->updateDatetime = $cbd->updateDatetime;
									$newContentBranchDetail->save(false);
								endforeach;
							}
						}
					}
					$start++;
				}


			endforeach;
		}
	}
	public function actionUpdateBranch()
	{
		$content = Content::find()->where(["contentName" => "branch"])->one();
		if (isset($content) && !empty($content)) {
			$contentDetail = ContentDetail::find()->where(["contentId" => $content->contentId])->all();
			foreach ($contentDetail as $cd) :
				$branch = Branch::find()->where(["status" => 1, "branchName" => $cd["title"]])->one();
				$country = Country::find()->where(["countryName" => $cd["title"]])->one();
				if (isset($country) && !empty($country)) {
					$countryId = $country->countryId;
				} else {
					$countryId = 0;
				}
				if (!isset($branch) || empty($branch)) {
					$branch = new Branch();
					$branch->branchName = $cd["title"];
					$branch->countryId = $countryId;
					$branch->status = 1;
					$branch->createDateTime = new Expression('NOW()');
					$branch->updateDateTime = new Expression('NOW()');
					$branch->save(false);
				}
			endforeach;
		}
	}
}
