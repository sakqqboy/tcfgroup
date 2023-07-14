<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Carousel;

$this->title = 'services';
?>

<div class="col-12" id="services-part1">
    <?= $this->render('part1', [
        "together" => $together,
        "ther" => $ther,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="services-part2">
    <?= $this->render('part2', [
    "businessdetail" => $businessdetail,
    "busi" => $busi,
    "wikiimage" => $wikiimage,
    "wiki" => $wiki,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>
</div>

<div class="col-12" id="services-part3">
    <?= $this->render('part3', [
    "standing" => $standing,
    "understanding" => $understanding,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "newservices" => $newservices,
    "nameslider" => $nameslider,
    "branchName" => $branchName,
]) ?>
</div>

<div class="col-12" id="services-part4">
    <?= $this->render('part4', [
    "shape" => $shape,
    "shapestar" => $shapestar,
    "support" => $support,
    "marketing" => $marketing,
    "companymarket" => $companymarket,
    "related" => $related,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "branchName" => $branchName,
]) ?>
</div>

<div class="col-12" id="services-part5">
    <?= $this->render('part5', [
    "topiccountry" => $topiccountry,
    "branchserpage" => $branchserpage,
    "bsp" => $bsp,
    "imgcountrydetail" => $imgcountrydetail,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "branchName" => $branchName,
]) ?>
</div>

<div class="col-12" id="services-part6">
    <?= $this->render('part6', [
    "sl" => $sl,
    "dropdown" => $dropdown,
    "serleft" => $serleft,
    "sr" => $sr,
    "serright" => $serright,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "branchName" => $branchName,
]) ?>
</div>

<?= $this->render('part7', [
    "dropdown" => $dropdown,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "branchName" => $branchName,
]) ?>