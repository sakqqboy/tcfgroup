<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'about us country';
?>

<?php
$isShow = Part::IsShow('aboutuscountry-part1', $branchId);
?>

<div class="col-12" id="aboutuscountry-part1" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?= $this->render('part1', [
        "bannerabout" => $bannerabout,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
        "isShow" => $isShow,
        "branchId" => $branchId,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('aboutuscountry-part2', $branchId);
?>
<div class="col-12" id="aboutuscountry-part2" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutuscountry-part2" onchange="javascript:showContentBranch('aboutuscountry-part2', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutuscountry-part2">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part2', [
        "historytokyo" => $historytokyo,
        "branches" => $branches,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('aboutuscountry-part3', $branchId);
?>
<div class="col-12" id="aboutuscountry-part3" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutuscountry-part3" onchange="javascript:showContentBranch('aboutuscountry-part3', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutuscountry-part3">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
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

<?php
$isShow = Part::IsShow('aboutuscountry-part4', $branchId);
?>
<div class="col-12" id="aboutuscountry-part4" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutuscountry-part4" onchange="javascript:showContentBranch('aboutuscountry-part4', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutuscountry-part4">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part4', [
        "aboutfounder" => $aboutfounder,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>