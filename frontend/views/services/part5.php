<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>


<div class="col-12 pr12 background-establish pb-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($topiccountry) && count($topiccountry) > 0) {

            ?>
                <div class="col-12 title-establish">
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $topiccountry['title'] ?>
                </div>
                <div class="col-12 title-select">
                    <p> <?= $topiccountry['detail'] ?></p>
                </div>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($topiccountry['contentBranchId'])) { ?>
                    <div class="col-12 text-end">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $topiccountry['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            <?php
            }
            ?>

            <div class="col-12 pr12 mt-50">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-4 select-country1">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs) :
                                if ($i < 8) {
                        ?>
                                    <a class="no-underline1" href="<?= Yii::$app->homeUrl . $bs['url'] ?>">
                                        <p>
                                            <img src="<?= Path::backendUrl() . $bs['image'] ?>">
                                            <?= $bs['title'] ?>
                                        </p>
                                    </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>

                    <div class="col-lg-3 col-md-6 col-4 select-country2">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs2) :
                                if ($i > 7 && $i < 16) {
                        ?>
                                    <a class="no-underline1" href="<?= Yii::$app->homeUrl . $bs2['url'] ?>">
                                        <p>
                                            <img src="<?= Path::backendUrl() . $bs2['image'] ?>" class="<?= $bs2['title'] == 'Japan' ? 'width-japan' : '' ?>">
                                            <?= $bs2['title'] ?>
                                        </p>
                                    </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-lg-4 col-md-6 col-4 select-country3">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs3) :
                                if ($i > 15 && $i < 24) {
                        ?>
                                    <a class="no-underline1" href="<?= Yii::$app->homeUrl . $bs3['url'] ?>">
                                        <p>
                                            <img src="<?= Path::backendUrl() . $bs3['image'] ?>">
                                            <?= $bs3['title'] ?>
                                        </p>
                                    </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-6 col-4 select-country4">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs4) :
                                if ($i > 23 && $i < 26) {
                        ?>
                                    <a class="no-underline1" href="<?= Yii::$app->homeUrl . $bs4['url'] ?>">
                                        <p>
                                            <img src="<?= Path::backendUrl() . $bs4['image'] ?>" class="<?= $bs4['title'] == 'Nigeria' ? 'width-japan' : '' ?>">
                                            <?= $bs4['title'] ?>
                                        </p>
                                    </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($bsp['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $bsp['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($imgcountrydetail) && count($imgcountrydetail) > 0) {
            ?>
                <div class="col-lg-12 col-md-6">
                    <img src=" <?= Path::backendUrl()  . $imgcountrydetail['image'] ?>" class="width-group">
                </div>
            <?php
            }
            ?>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($imgcountrydetail['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $imgcountrydetail['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>