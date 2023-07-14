<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($establishment) && count($establishment) > 0) {
            $i = 0;

            foreach ($establishment as $lishment) :
        ?>
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="row mt-50 pl-40">
                        <div class="col-4 item1">
                            <?= $lishment['title'] ?>
                        </div>
                        <div class="col-1 item2">
                            <p class="number-year"> <?= $lishment['detail'] ?></p>
                            <img src="<?= Path::backendUrl() ?>image/img/img22.png" class="img22">
                        </div>
                        <div class="col-2 item3">
                            <?= $lishment['detail2'] ?>
                        </div>
                        <div class="col-5 item4">
                            <img src="<?= Path::backendUrl() . $lishment['image'] ?>" class="picture-1">
                        </div>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $lishment['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                        <hr>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($extendinglocation) && count($extendinglocation) > 0) {
            $i = 0;
            foreach ($extendinglocation as $exten) :
        ?>
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="row mt-50 pl-40">
                        <div class="col-4 item5">
                            <?= $exten['title'] ?>
                        </div>
                        <div class="col-1 item2">
                            <p class="number-year"> <?= $exten['detail'] ?></p>
                            <img src="<?= Path::backendUrl() ?>image/img/img22.png" class="img22">
                        </div>
                        <div class="col-2 item7">
                            <?= $exten['detail2'] ?>
                        </div>
                        <div class="col-5 item4">
                            <img src="<?= Path::backendUrl() . $exten['image'] ?>" class="picture-1">
                        </div>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $exten['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                        <hr>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>


<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($tokyoconsulting) && count($tokyoconsulting) > 0) {
            $i = 0;
            foreach ($tokyoconsulting  as  $tokyosul) :
        ?>
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="row mt-50 pl-40">
                        <div class="col-4 item1">
                            <?= $tokyosul['title'] ?>
                        </div>
                        <div class="col-1 item2">
                            <p class="number-year"> <?= $tokyosul['detail'] ?></p>
                            <img src="<?= Path::backendUrl() ?>image/img/img22.png" class="img22">
                        </div>
                        <div class="col-2 item3">
                            <?= $tokyosul['detail2'] ?> </div>
                        <div class="col-5 item4">
                            <img src="<?= Path::backendUrl() . $tokyosul['image'] ?>" class="picture-1">
                        </div>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $tokyosul['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                        <hr>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>


<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($brand) && count($brand) > 0) {
            $i = 0;
            foreach ($brand  as  $expansion) :
        ?>
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="row mt-50 pl-40">
                        <div class="col-4 item5">
                            <?= $expansion['title'] ?>
                        </div>
                        <div class="col-1 item2">
                            <p class="number-year"> <?= $expansion['detail'] ?></p>
                            <img src="<?= Path::backendUrl() ?>image/img/img22.png" class="img22">
                        </div>
                        <div class="col-2 item7">
                            <?= $expansion['detail2'] ?>
                        </div>
                        <div class="col-5 item4">
                            <img src="<?= Path::backendUrl() . $expansion['image'] ?>" class="picture-1">
                        </div>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $expansion['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                        <hr>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

    </div>
</div>


<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($thegrowth) && count($thegrowth) > 0) {
            $i = 0;
            foreach ($thegrowth  as  $the) :
        ?>
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="row mt-50 pl-40">
                        <div class="col-4 item1">
                            <?= $the['title'] ?>
                        </div>
                        <div class="col-1 item2">
                            <p class="number-year"> <?= $the['detail'] ?></p>
                            <img src="<?= Path::backendUrl() ?>image/img/img22.png" class="img22">
                        </div>
                        <div class="col-2 item3">
                            <?= $the['detail2'] ?>
                        </div>
                        <div class="col-5 item4">
                            <img src="<?= Path::backendUrl() . $the['image'] ?>" class="picture-1">
                        </div>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $the['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                        <hr>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($globalexpansion) && count($globalexpansion) > 0) {
            $i = 0;
            foreach ($globalexpansion  as  $ball) :
        ?>
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="row mt-50 pl-40">
                        <div class="col-4 item5">
                            <?= $ball['title'] ?>
                        </div>
                        <div class="col-1 item2">
                            <p class="number-year"> <?= $ball['detail'] ?></p>
                            <img src="<?= Path::backendUrl() ?>image/img/img22.png" class="img22">
                        </div>
                        <div class="col-2 item7">
                            <?= $ball['detail2'] ?>
                        </div>
                        <div class="col-5 item4">
                            <img src="<?= Path::backendUrl() . $ball['image'] ?>" class="picture-1">
                        </div>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $ball['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                        <hr>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

    </div>
</div>