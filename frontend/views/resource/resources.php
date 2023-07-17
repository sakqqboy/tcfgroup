<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'contact';
?>

<?php
    $isShow = Part::IsShow('resources-part1', $branchId);
?>
<div class="col-12" id="resources-part1" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-resources-part1" onchange="javascript:showContent('resources-part1')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-resources-part1">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part1', [
        "bannerresource" => $bannerresource,
        "resource" => $resource,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('resources-part2', $branchId);
?>
<div class="col-12" id="resources-part2" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-resources-part2" onchange="javascript:showContent('resources-part2')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-resources-part2">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part2', [
        "national" => $national,
        "tio" => $tio,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('resources-part3', $branchId);
?>
<div class="col-12" id="resources-part3" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-resources-part3" onchange="javascript:showContent('resources-part3')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-resources-part3 ">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
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


<?php
    $isShow = Part::IsShow('resources-part4', $branchId);
?>
<div class="col-12" id="resources-part4" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-resources-part4" onchange="javascript:showContent('resources-part4')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-resources-part4 ">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
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