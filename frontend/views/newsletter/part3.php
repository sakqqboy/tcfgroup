<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12  pr12 mt-50">
    <?php
    if (isset($import) && count($import) > 0) {
        $i = 0;
        foreach ($import as $port) :
    ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="<?= Path::backendUrl() . $port['image'] ?>" style="width: 100%;">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <p class="title-import mt-10"><?= $port['title'] ?></p> <br>
                    <p class="title-zero"><?= $port['detail'] ?></p> <br>
                    <p class="circle-icon"><a href="#read more" class="no-underline-new1"> <?= $port['detail2'] ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                        </a>

                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) { ?>
        <div class=" col-12 text-end mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $port['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
        </div>
    <?php
    }
    ?>
</div>