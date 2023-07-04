<?php

namespace frontend\controllers;

use frontend\models\tokyoconsulting\Content;
use frontend\models\tokyoconsulting\ContentDetail;
use frontend\models\tokyoconsulting\MemberHasType;
use Yii;
use yii\web\Controller;

class ServicesController extends Controller
{
	public function actionIndex($hash)
	{
		$ther = Content::find()
			->where(["contentName" => "Together"])
			->asArray()
			->one();

		$tri = Content::find()
			->where(["contentName" => "Contribute"])
			->asArray()
			->one();

		$standing = Content::find()
			->where(["contentName" => "Understanding"])
			->asArray()
			->one();

		$marketing = Content::find()
			->where(["contentName" => "Companymarket"])
			->asArray()
			->one();

		$s = Content::find()
			->where(["contentName" => "Newservices"])
			->asArray()
			->one();

		$shape = Content::find()
			->where(["contentName" => "Shapestar"])
			->asArray()
			->one();

		$sup = Content::find()
			->where(["contentName" => "Support"])
			->asArray()
			->one();

		$lected = Content::find()
			->where(["contentName" => "Related"])
			->asArray()
			->one();

		$dave = Content::find()
			->where(["contentName" => "Development"])
			->asArray()
			->one();

		$nmlider = Content::find()
			->where(["contentName" => "Nameslider"])
			->asArray()
			->one();

		$newcountry = Content::find()
			->where(["contentName" => "Selectioncountry"])
			->asArray()
			->one();

		$icon5 = Content::find()
			->where(["contentName" => "Garmenticon"])
			->asArray()
			->one();

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




		if (isset($ther) && !empty($ther)) {
			$together = ContentDetail::find()
				->where(["contentId" => $ther["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($tri) && !empty($tri)) {
			$contribute = ContentDetail::find()
				->where(["contentId" => $tri["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($standing) && !empty($standing)) {
			$understanding = ContentDetail::find()
				->where(["contentId" => $standing["contentId"], "status" => 1])
				->asArray()
				->all();
		}

		if (isset($marketing) && !empty($marketing)) {
			$companymarket = ContentDetail::find()
				->where(["contentId" => $marketing["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($nmlider) && !empty($nmlider)) {
			$nameslider = ContentDetail::find()
				->where(["contentId" => $nmlider["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($s) && !empty($s)) {
			$newservices = ContentDetail::find()
				->where(["contentId" => $s["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($shape) && !empty($shape)) {
			$shapestar = ContentDetail::find()
				->where(["contentId" => $shape["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($sup) && !empty($sup)) {
			$support = ContentDetail::find()
				->where(["contentId" => $sup["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($lected) && !empty($lected)) {
			$related = ContentDetail::find()
				->where(["contentId" => $lected["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($dave) && !empty($dave)) {
			$development = ContentDetail::find()
				->where(["contentId" => $dave["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($newcountry) && !empty($newcountry)) {
			$selectioncountry = ContentDetail::find()
				->where(["contentId" => $newcountry["contentId"], "status" => 1])
				->asArray()
				->all();
		}
		if (isset($icon5) && !empty($icon5)) {
			$garmenticon = ContentDetail::find()
				->where(["contentId" => $icon5["contentId"], "status" => 1])
				->asArray()
				->all();
		}

		return $this->render('services', [
			"together" => $together,
			"contribute" => $contribute,
			"understanding" => $understanding,
			"companymarket" => $companymarket,
			"newservices" => $newservices,
			"shapestar" => $shapestar,
			"support" => $support,
			"related" => $related,
			"development" => $development,
			"nameslider" => $nameslider,
			"selectioncountry" => $selectioncountry,
			"garmenticon" => $garmenticon

		]);
	}
}
