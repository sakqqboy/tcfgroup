<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'webinar';
//throw new Exception(print_r($branchName,true));
?>

<?php
    $isShow = Part::IsShow('webinar-part1', $branchId);
?>
<div class="col-12" id="webinar-part1" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?= $this->render('part1', [
        "webinarvideo" => $webinarvideo,
        "detailvideo" => $detailvideo,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
        "isShow" => $isShow,
        "branchId" => $branchId,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('webinar-part2', $branchId);
?>
<div class="col-12" id="webinar-part2" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part2" onchange="javascript:showContentBranch('webinar-part2', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-webinar-part2">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part2', [
        "bangladresh" => $bangladresh,
        "bangladreshDetail" => $bangladreshDetail,
        "webinar" => $webinar,
        "webinarDetail" => $webinarDetail,
        "register" => $register,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('webinar-part3', $branchId);
?>
<div class="col-12" id="webinar-part3" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part3" onchange="javascript:showContentBranch('webinar-part3', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-webinar-part3">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part3', [
        "webinarplaylist" => $webinarplaylist,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('webinar-part4', $branchId);
?>
<div class="col-12" id="webinar-part4" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part4" onchange="javascript:showContentBranch('webinar-part4', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-webinar-part4">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part4', [
        "player1" => $player1,
        "player2" => $player2,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('webinar-part5', $branchId);
?>
<div class="col-12" id="webinar-part5" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part5" onchange="javascript:showContentBranch('webinar-part5', <?= $branchId ?>)" value="<?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-webinar-part5">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part5') ?>
</div>

<?php
    $isShow = Part::IsShow('webinar-part6', $branchId);
?>
<div class="col-12" id="webinar-part6" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part6" onchange="javascript:showContentBranch('webinar-part6', <?= $branchId ?>)" value="<?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-webinar-part6">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part6', [
        "participants" => $participants,
        "comment" => $comment,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('webinar-part7', $branchId);
?>
<div class="col-12" id="webinar-part7" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part7" onchange="javascript:showContentBranch('webinar-part7', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-webinar-part7">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part7', [
        "meet" => $meet,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<?php
    $isShow = Part::IsShow('webinar-part8', $branchId);
?>
<div class="col-12" id="webinar-part8" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : ''?>">
    <?php
        if($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-webinar-part8" onchange="javascript:showContentBranch('webinar-part8', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-webinar-part8">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part8', [
        "freedetail" => $freedetail,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>