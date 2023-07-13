<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>
<div class="col-12 pr12 bk-busi">
    <div class="row">
        <div class="col-lg-1">
            <!-- Empty Space -->
        </div>
        <div class="col-lg-8 col-md-12 col-12">
            <div class="col-12 mt-5 title-busi">
                <?php
                if (isset($busi) && !empty($busi)) {
                ?>
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $busi['title'] ?>
                <?php
                }
                ?>
            </div>
            <div class="col-9 Bs1">
                <?php
                    if (isset($busi) && !empty($busi)) {
                ?>
                <?= $busi['detail'] ?>
                <?php
                    }
                ?>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($busi['contentBranchId'])) {
            ?>
                <div class="col-12 text-end pr12 mt-5">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $busi['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
            <div class="row">
                <?php
                if (isset($businessdetail) && count($businessdetail) > 0) {
                    $i = 0;
                    foreach ($businessdetail as $bsdt) :
                ?>
                        <div class="col-3 cardbusiness">

                            <div class="col-12 cardbu">
                                <p class="card-title card-title-bu">
                                    <img src="<?= Path::backendUrl() . $bsdt['image'] ?>" class="<?= $bsdt['title'] == 'ICT & Electronics' ? 'width-ict' : '' ?>">
                                    <?= $bsdt['title'] ?>
                                </p>
                                <p class="card-text cardbudetail"><?= $bsdt['detail'] ?></p>
                            </div>
                        </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($busi['contentBranchId'])) {
                ?>
                    <div class="col-12 text-end pr12 mt-5">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $busi['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-3 col-md-12 col-12">
                <?php
                if (isset($wikiimage) && !empty($wikiimage)) {
                ?>
                    <img class="imgwiki" src="<?= Path::backendUrl() . $wikiimage['image'] ?>">
                <?php
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($wikiimage['contentBranchId'])) {
                ?>
                    <div class="col-12 text-end pr12 mt-5">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $wikiimage['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-12">
            <img class="nation-flag" src="<?= Path::backendUrl() ?>image/img/sad.png">
        </div>
    </div>
</div>