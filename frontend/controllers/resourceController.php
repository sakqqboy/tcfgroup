<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\web\Controller;

class ResourceController extends Controller
{
	public function actionIndex($hash)
	{
		$resource = Content::find()
			->where(["contentName" => "Bannerresource"])
			->asArray()
			->one();

		$tio = Content::find()
			->where(["contentName" => "National"])
			->asArray()
			->one();

		$des = Content::find()
			->where(["contentName" => "Description"])
			->asArray()
			->one();

		$blede = Content::find()
			->where(["contentName" => "Tabledetail"])
			->asArray()
			->one();

		$bannerresource = [];
		$national = [];
		$description = [];
		$tabledetail = [];

		if (isset($resource) && !empty($resource)) {
			$bannerresource = ContentDetail::find()
				->where(["contentId" => $resource["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($tio) && !empty($tio)) {
			$national = ContentDetail::find()
				->where(["contentId" => $tio["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($des) && !empty($des)) {
			$description = ContentDetail::find()
				->where(["contentId" => $des["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($blede) && !empty($blede)) {
			$tabledetail = ContentDetail::find()
				->where(["contentId" => $blede["contentId"], "status" => 1])
				->asArray()
				->all();
		}


		return $this->render('resources', [
			"bannerresource" => $bannerresource,
			"national" => $national,
			"description" => $description,
			"tabledetail" => $tabledetail,
		]);
	}
}
