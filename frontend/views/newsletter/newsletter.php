<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'newsletter';
?>

<?php
$isShow = Part::IsShow('newsletter-part1', $branchId);
?>
<div class="col-12" id="newsletter-part1" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?= $this->render('part1', [
        "newsletter" => $newsletter,
        "new" => $new,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
        "isShow" => $isShow,
        "branchId" => $branchId,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('newsletter-part2', $branchId);
?>
<div class="col-12" id="newsletter-part2" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part2" onchange="javascript:showContentBranch('newsletter-part2', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-newsletter-part2">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part2', [
        "tp" => $tp,
        "topic" => $topic,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('newsletter-part3', $branchId);
?>
<div class="col-12" id="newsletter-part3" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
<<<<<<< HEAD
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part3" onchange="javascript:showContentBranch('newsletter-part3', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
=======
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part3" onchange="javascript:showContent('newsletter-part3')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
>>>>>>> 3befbd4eb5b01cad72ccf9d96651dadbebfbc0e9
                <label class="form-check-label" for="switch-newsletter-part3">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part3', [
        "import" => $import,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('newsletter-part4', $branchId);
?>
<div class="col-12" id="newsletter-part4" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
<<<<<<< HEAD
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part4" onchange="javascript:showContentBranch('newsletter-part4', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
=======
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part4" onchange="javascript:showContent('newsletter-part4')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
>>>>>>> 3befbd4eb5b01cad72ccf9d96651dadbebfbc0e9
                <label class="form-check-label" for="switch-newsletter-part4">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part4', [
        "olderposts" => $olderposts,
        "asset" => $asset,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('newsletter-part5', $branchId);
?>
<div class="col-12" id="newsletter-part5" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
<<<<<<< HEAD
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part5" onchange="javascript:showContentBranch('newsletter-part5', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
=======
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part5" onchange="javascript:showContent('newsletter-part5')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
>>>>>>> 3befbd4eb5b01cad72ccf9d96651dadbebfbc0e9
                <label class="form-check-label" for="switch-newsletter-part5">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part5', [
        "taxassessment1" => $taxassessment1,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('newsletter-part6', $branchId);
?>
<div class="col-12" id="newsletter-part6" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
<<<<<<< HEAD
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part6" onchange="javascript:showContentBranch('newsletter-part6', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
=======
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part6" onchange="javascript:showContent('newsletter-part6')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
>>>>>>> 3befbd4eb5b01cad72ccf9d96651dadbebfbc0e9
                <label class="form-check-label" for="switch-newsletter-part6">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part6', [
        "taxassessment2" => $taxassessment2,
        "olderposts" => $olderposts,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
$isShow = Part::IsShow('newsletter-part7', $branchId);
?>
<div class="col-12" id="newsletter-part7" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
<<<<<<< HEAD
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part7" onchange="javascript:showContentBranch('newsletter-part7', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? '1' : 'checked' ?>>
=======
                <input class="form-check-input" type="checkbox" role="switch" id="switch-newsletter-part7" onchange="javascript:showContent('newsletter-part7')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
>>>>>>> 3befbd4eb5b01cad72ccf9d96651dadbebfbc0e9
                <label class="form-check-label" for="switch-newsletter-part7">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part7', [
        "footerbangladresh" => $footerbangladresh,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>