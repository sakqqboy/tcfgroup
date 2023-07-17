<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'about us country';
?>

<div class="col-12" id="aboutuscountry-part1">
    <?= $this->render('part1', [
        "bannerabout" => $bannerabout,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="aboutuscountry-part2">
    <?= $this->render('part2', [
        "historytokyo" => $historytokyo,
        "branches" => $branches,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="aboutuscountry-part3">
    <?= $this->render('part3', [
        "establishment" => $establishment,
        "extendinglocation" => $extendinglocation,
        "tokyoconsulting" => $tokyoconsulting,
        "brand" => $brand,
        "thegrowth" => $thegrowth,
        "globalexpansion" => $globalexpansion,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="aboutuscountry-part4">
    <?= $this->render('part4', [
        "aboutfounder" => $aboutfounder,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>