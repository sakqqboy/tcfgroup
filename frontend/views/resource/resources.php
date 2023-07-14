<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'contact';
?>

<div class="col-12" id="resources-part1">
    <?= $this->render('part1', [
        "bannerresource" => $bannerresource,
        "resource" => $resource,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="resources-part2">
    <?= $this->render('part2', [
        "national" => $national,
        "tio" => $tio,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="resources-part3">
    <?= $this->render('part3', [
        "description" => $description,
        "tabledetail" => $tabledetail,
        "des" => $des,
        "blede" => $blede,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="resources-part4">
    <?= $this->render('part4', [
        "legalDetail" => $legalDetail,
        "legal" => $legal,
        "country" => $country,
        "dropdown" => $dropdown,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>