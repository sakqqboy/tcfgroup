<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12" style="margin-top: 80px;">
    <div class="col-12 title-Trending">
        <?php
        if (isset($bangladresh) && count($bangladresh) > 0) {
            $i = 0;
        ?>
            <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $bangladresh['title'] ?>
        <?php
        }
        ?>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-50">
                <?php
                if (isset($bangladreshDetail) && count($bangladreshDetail) > 0) {
                    $i = 0;
                ?>
                    <div class="row">
                        <div class="col-4 title-bangladesh">
                            <p><?= $bangladreshDetail['title'] ?> </p>
                        </div>
                        <div class="col-2">
                            <img src="<?= Path::backendUrl() . $bangladreshDetail['image'] ?>" class="img-woman">
                            <div class="alert alert-secondary  text-center">
                                <p class="table-calendar"> <i class="fa fa-calendar" aria-hidden="true"> June 2023</i></p>
                                <p> S&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;S
                                </p>
                                <p> 3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5 <button class="btn btn-primary calendar-button" type="button">6</button>&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;9
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-6 img-iconday">
                            <div class="row">
                                <div class="col-3">
                                    <span class="badge badg-dayss">
                                        <strong class="strong-days">09</strong>
                                        <p class="dayss">days</p>
                                    </span>
                                </div>
                                <div class="col-3">
                                    <span class="badge badg-dayss">
                                        <strong class="strong-days">14</strong>
                                        <p class="dayss">Hours</p>
                                    </span>
                                </div>
                                <div class="col-3">
                                    <span class="badge badg-dayss">
                                        <strong class="strong-days">35</strong>
                                        <p class="dayss">Mins</p>
                                    </span>
                                </div>
                                <div class="col-3">
                                    <span class="badge badg-dayss">
                                        <strong class="strong-days">42</strong>
                                        <p class="dayss">Secs</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++;
                }
                ?>
                <div class="col-12 text-end mt-1 mb-3">
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($bangladresh["contentBranchId"])) {
                    ?>
                        <span class="col-12 text-end">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $bangladresh['contentBranchId']]) ?>" target="_blank">Edit (TP)(<?= $branchName ?>)</a>
                        </span>
                    <?php
                    }
                    ?>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($bangladreshDetail["contentBranchId"])) {
                    ?>
                        <span class="col-12 text-end">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $bangladreshDetail['contentBranchId']]) ?>" target="_blank">Edit (IMG)(<?= $branchName ?>)</a>
                        </span>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <?php
                if (isset($webinar) && count($webinar) > 0) {
                    $i = 0;
                ?>
                    <div class="col-12 title-join">
                        <?= $webinar['title'] ?>
                    </div>
                    <div class="col-12 title-topic">
                        <p><img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $webinar['detail'] ?></p>
                    </div>
                <?php
                }
                ?>
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="accordion mt-20" id="accordionExample">
                            <?php
                            if (isset($webinarDetail) && count($webinarDetail) > 0) {
                                $i = 1;
                                foreach ($webinarDetail as $w) :
                            ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="<?= $w['contentBranchDetailId'] ?>">
                                            <button class="<?= $i == 1 ? 'accordion-button' : 'accordion-button collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#a<?= $w['contentBranchDetailId'] ?>" aria-expanded="true" aria-controls="<?= $w['contentBranchDetailId'] ?>">
                                                <?= $w['title'] ?>
                                            </button>
                                        </h2>
                                        <div id="a<?= $w['contentBranchDetailId'] ?>" class="accordion-collapse collapse <?= $i == 1 ? 'show' : '' ?>" aria-labelledby="<?= $w['contentBranchDetailId'] ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong><?= $w['detail'] ?></strong><br>
                                                <?= $w['detail2'] ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    $i++;
                                endforeach;
                            }
                            ?>
                            <div class="col-12 text-end mt-1 mb-3">
                                <?php
                                if ($canEdit == 1 && $userInThisBranch == 1 && isset($webinar["contentBranchId"])) {
                                ?>
                                    <span class="col-12 text-end">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $webinar['contentBranchId']]) ?>" target="_blank">Edit (TP)(<?= $branchName ?>)</a>
                                    </span>
                                <?php
                                }
                                ?>
                                <?php
                                if ($canEdit == 1 && $userInThisBranch == 1 && isset($w["contentBranchId"])) {
                                ?>
                                    <span class="col-12 text-end">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $w['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
                                    </span>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        if (isset($register) && count($register) > 0) {
                            $i = 0;
                            foreach ($register as $regis) :
                        ?>
                                <button type="button" class="btn btn-primary button-register mt-30">
                                    <?= $regis['title'] ?></button>
                                <p class="title-sign-in"> <?= $regis['detail'] ?><a href="#sign in" class="no-underline">
                                        <?= $regis['detail2'] ?></a></p>

                        <?php
                            endforeach;
                        }
                        ?>
                        <div>
                            <?php
                            if ($canEdit == 1 && $userInThisBranch == 1 && isset($regis["contentBranchId"])) {
                            ?>
                                <div class="col-12 text-end">
                                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $regis['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>