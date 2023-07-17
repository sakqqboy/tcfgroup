<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 Kaicho-color">
    <div class="row">
        <?php
        if (isset($aboutfounder) && count($aboutfounder) > 0) {
            $i = 0;
            foreach ($aboutfounder  as  $foun) :
        ?>
                <div class="col-lg-6 col-md- col-12">
                    <img src="<?= Path::backendUrl() . $foun['image'] ?>" class="img-Kaicho-color">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="col-12 home-about">
                        <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $foun['title'] ?>
                    </div>
                    <div class="col-10 detail-about">
                        <p><?= $foun['detail'] ?></p>

                        <p> <?= $foun['detail2'] ?></p>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) { ?>
        <div class=" col-12 text-end mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $foun['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
        </div>
    <?php
    }
    ?>
</div>