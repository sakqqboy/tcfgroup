<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12">
    <?php
    if (isset($meet) && count($meet) > 0) {
        $i = 0;
        foreach ($meet as $mee) :
    ?>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $mee['title'] ?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
                    <?= $mee['detail'] ?>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div class="col-12">
    <?php
    if (isset($meet) && count($meet) > 0) {
        $i = 0;
        foreach ($meet as $mee) :
    ?>
            <img src="<?= Path::backendUrl() ?>image/img/ceo.png" class="img-ceo">
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div class="col-12 pr12">
    <?php
    if (isset($meet) && count($meet) > 0) {
        $i = 0;
        foreach ($meet as $mee) :
    ?>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $mee['detail2'] ?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
                    <?= $mee['detail3'] ?>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div class="col-12 text-end mt-3 mb-3">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($mee["contentBranchId"])) {
    ?>
        <span class="col-12 text-end">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $mee['contentBranchId']]) ?>" target="_blank">Edit (TP)(<?= $branchName ?>)</a>
        </span>
    <?php
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($mee["contentBranchId"])) {
    ?>
        <span class="col-12 text-end">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $mee['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
        </span>
    <?php
    }
    ?>
</div>