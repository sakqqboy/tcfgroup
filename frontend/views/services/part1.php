<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
    if($canEdit == 1 && $userInThisBranch == 1) {
?>
    <div class="col-12" style="margin-top: 90px; margin-bottom: -85px;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-services-part1" onchange="javascript:showContent('services-part1')" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-services-part1">Show</label>
        </div>
    </div>
<?php
    }
?>
<?php
if (isset($together) && !empty($together)) {
    $i = 0;
    foreach ($together as $tg) :
?>

        <div class="col-12 banner-box-service">
            <img src="<?= Path::backendUrl() . $tg['image'] ?>" class="width1">
        </div>
        <div class="col-12 banner-text-service">
            <div class="col-12  serviecs-h1">
                <p> <?= $tg['title'] ?></p>
            </div>
            <div class="col-12 serviecs-h2">
                <p> <?= $tg['detail'] ?></p>
            </div>
            <div class="offset-1 col-11">
                <button type="button" class="btn btn-primary button-start"> <?= $tg['detail2'] ?></button>
            </div>
        </div>
<?php
        $i++;
    endforeach;
}
?>
<?php
if ($canEdit == 1 && $userInThisBranch == 1 && isset($ther['contentBranchId'])) {
?>
    <div class="col-12 text-end pr12" style="padding-right:0px;margin-top:80px;">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $ther['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $ther['contentBranchId']]) ?>" target="_blank">Edit[BG](<?= $branchName ?>)</a>
    </div>
<?php
}
?>