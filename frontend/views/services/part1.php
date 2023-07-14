<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12" style="height: 731.5px;margin-top:90px;">
    <?php
    if (isset($together) && !empty($together)) {
        $i = 0;
        foreach ($together as $tg) :
    ?>
            <div class="col-12" style="z-index:-1;">
                <div class="col-12">
                    <img src="<?= Path::backendUrl() . $tg['image'] ?>" class="width1">
                </div>
                <div class="col-12">
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
            </div>
        <?php
            $i++;
        endforeach;
    }
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($ther['contentBranchId'])) {
        ?>
        <div class="col-12 text-end pr12" style="padding-right:0px;margin-top:90px;">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $ther['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $ther['contentBranchId']]) ?>" target="_blank">Edit[BG](<?= $branchName ?>)</a>
        </div>
    <?php
    }
    ?>
</div>