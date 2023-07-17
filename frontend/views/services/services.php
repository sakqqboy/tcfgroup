<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;
use yii\bootstrap5\Carousel;

$this->title = 'services';
?>

<?php
    $isShow = Part::IsShow('services-part1', $branchId);
?>
<div class="col-12" id="services-part1" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part1" onchange="javascript:showContent('services-part1')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-services-part1">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part1', [
        "together" => $together,
        "ther" => $ther,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('services-part2', $branchId);
?>
<div class="col-12" id="services-part2" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part2" onchange="javascript:showContent('services-part2')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-services-part2">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
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

<?php
    $isShow = Part::IsShow('services-part3', $branchId);
?>
<div class="col-12" id="services-part3" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part3" onchange="javascript:showContent('services-part3')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-services-part3">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
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

<?php
    $isShow = Part::IsShow('services-part4', $branchId);
?>
<div class="col-12" id="services-part4" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part4" onchange="javascript:showContent('services-part4')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-services-part4">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
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

<?php
    $isShow = Part::IsShow('services-part5', $branchId);
?>
<div class="col-12" id="services-part5" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part5" onchange="javascript:showContent('services-part5')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-services-part5">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
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

<?php
    $isShow = Part::IsShow('services-part6', $branchId);
?>
<div class="col-12" id="services-part6" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part6" onchange="javascript:showContent('services-part6')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-services-part6">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
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

<?php
    $isShow = Part::IsShow('services-part7', $branchId);
?>
<div class="col-12" id="services-part7" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part7" onchange="javascript:showContent('services-part7')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-services-part7">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
<?= $this->render('part7', [
    "dropdown" => $dropdown,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "branchName" => $branchName,
]) ?>