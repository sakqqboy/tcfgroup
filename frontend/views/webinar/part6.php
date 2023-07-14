<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12" style="background-color: #F4F4F6;">
    <div class="col-12 pr12 mt-50">
        <div class="row">
            <?php
            if (isset($participants) && count($participants) > 0) {
                $i = 0;
                foreach ($participants  as $pants) :
            ?>
            <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $pants['title'] ?>
            </div>
            <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
                <?= $pants['detail'] ?>
            </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="col-12 text-end mt-3 mb-3">
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($pants["contentBranchId"])) {
                ?>
                <span class="col-12 text-end">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $pants['contentBranchId']]) ?>"
                        target="_blank">Edit (TP)(<?= $branchName ?>)</a>
                </span>
                <?php
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($pants["contentBranchId"])) {
                ?>
                <span class="col-12 text-end">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $pants['contentBranchId']]) ?>"
                        target="_blank">Edit (<?= $branchName ?>)</a>
                </span>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <div class="row">
        <?php
        if (isset($comment) && count($comment) > 0) {
            $i = 0;
            foreach ($comment as $com) :
        ?>
        <div class="col-lg-3 col-md-6 col-12 mt-50 pl-40">
            <div class="col-12 mt-20">
                <div class="card"
                    style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left:20px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            <?= $com['title'] ?>
                        </div>
                        <div class="d-flex text-black mt-20">
                            <div class="flex-shrink-0">
                                <img src="<?= Path::backendUrl() . $com['image'] ?>" class="img-minnie">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1"><?= $com['detail'] ?></h5>
                                <p class="mb-2 pb-1" style="color: #4F96FF;">
                                    <?= $com['detail2'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endforeach;
        }
        ?>
        <div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($com["contentBranchId"])) {
            ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $com['contentBranchId']]) ?>"
                    target="_blank">Edit (TP)(<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="col-12 mt-50">
        </div>
    </div>
</div>