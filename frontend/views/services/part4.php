<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 ">
    <div class="row">
        <div class="col-12 title-frequently">
            <?php
            if (isset($shape) && !empty($shape)) {
            ?>
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"><?= $shape['title'] ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($shape['contentBranchId'])) { ?>
                    <div class="col-12">
                        <a class="btn btn-warning bt-line mt-2" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $shape['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <?php
            if (isset($shapestar) && count($shapestar) > 0) {
                $i = 0;
                foreach ($shapestar as $shape) :
                    if ($i < 4) {
            ?>

                        <p class="form-legal" id="content2-legal-<?= $i ?>" onmouseover="javascript:showLegal2(<?= $i ?>)">
                            <?= $shape['title'] ?></p>

                        <p class="form-legal-copy" style="display: none;" id="content2-legal2-<?= $i ?>" onmouseleave="javascript:showLegal1(<?= $i ?>)"><?= $shape['title'] ?></p>

            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($shape['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $shape['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-4 col-12 show-text-home">
            <div class="col-12">
                <?php
                if (isset($support) && count($support) > 0) {
                    $i = 0;
                    foreach ($support as $sup) :
                        if ($i < 6) {
                ?>
                            <p class="font-text"> <?= $sup['title'] ?></p>
                            <p class="services-name"> <?= $sup['detail'] ?></p>
                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($sup['contentBranchId'])) { ?>
                <div class="col-12 text-end mb-2">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sup['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-4 col-12 show-ser">
            <div class="col-12">
                <?php
                if (isset($companymarket) && count($companymarket) > 0) {
                    $i = 0;
                    foreach ($companymarket as $cm) :
                        if ($i < 4) {
                ?>
                            <p class="font-text"><?= $cm['title'] ?></p>
                            <p class="services-name"><?= $cm['detail'] ?></p>
                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
                <a href="#" class="none-underline">
                    <?php
                    if (isset($marketing) && !empty($marketing)) {
                    ?>
                        <p class="text-end mt-50"><?= $marketing['detail'] ?><i class="fa fa-chevron-right" aria-hidden="true"></i></p>
                    <?php
                    }
                    ?>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($marketing['contentBranchId'])) { ?>
                        <div class="col-12 text-end">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $marketing['contentBranchId']]) ?>" target="_blank">Edit(Show)(<?= $branchName ?>)</a>
                        </div>
                    <?php
                    }
                    ?>
                </a>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($marketing['contentBranchId'])) { ?>
                <div class="col-12 text-end mt-3">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $marketing['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="col-lg-3 col-md-6 col-12 show-text-home">
            <div class="col-12 name-show-text-home" style="font-family: 'klavika'; font-weight:100;">
                <?php
                if (isset($related) && count($related) > 0) {
                    $i = 0;
                    foreach ($related as $lected) :

                ?>
                        <p class="related"><?= $lected['title'] ?></p>
                        <p class="services-name"><?= $lected['detail'] ?></p>
                        <p class="services-name"><?= $lected['detail2'] ?></p>
                        <p class="services-name"><?= $lected['detail3'] ?></p>
                        <p class="services-name"><?= $lected['detail4'] ?></p>
                        <p class="name-ask mt-50"><?= $lected['detail5'] ?> </p>
                        <p class="services-name"><?= $lected['detail6'] ?></p>
                        <div class="alert alert-primary" role="alert">
                            <a href="#wiki.com"><img src="<?= Path::backendUrl() . $lected['image'] ?>"></a>
                        </div>
                <?php

                        $i++;
                    endforeach;
                }
                ?>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($lected['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $lected['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>