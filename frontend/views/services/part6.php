<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>


<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 service-stage">
                <?php
                if (isset($sl) && !empty($sl)) {
                ?>
                    <img src="<?= Yii::$app->homeUrl ?>image/img/Rectangle.png"><?= $sl['title'] ?>
                <?php
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sl['contentBranchId'])) { ?>
                    <div class="col-12 text-end mt-3">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $sl['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="col-5 form-selectcountry">
                    Select Country
                </div>
                <div class="col-5 country">
                    <select class="form-select" aria-label="Default select example">
                        <option>Select country</option>
                        <?php
                        if (isset($dropdown) && count($dropdown) > 0) {
                            foreach ($dropdown as $dd) :
                        ?>
                                <option value="<?= $dd["countryId"] ?>"><?= $dd["countryName"] ?></option>
                        <?php
                            endforeach;
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <?php
                if (isset($serleft) && count($serleft) > 0) {
                    $i = 0;
                    foreach ($serleft as $sleft) :
                ?>
                        <img src="<?= Path::backendUrl() ?><?= $sleft['image'] ?>" class="width-asset">
                <?php
                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sleft['contentBranchId'])) { ?>
                    <div class="col-12 text-end mt-3">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sleft['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 services-account">
                <?php
                if (isset($sr) && !empty($sr)) {
                ?>
                    <p> <?= $sr['detail'] ?></p>
                <?php
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sr['contentBranchId'])) { ?>
                    <div class="col-12 text-end mt-3">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $sr['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <?php
                    if (isset($serright) && count($serright) > 0) {
                        $i = 0;
                        foreach ($serright as $sright) :
                    ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?= $sright['contentBranchDetailId'] ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f<?= $sright['contentBranchDetailId'] ?>" aria-expanded="true" aria-controls="<?= $sright['contentBranchDetailId'] ?>">
                                        <?= $sright['title'] ?>
                                    </button>
                                </h2>
                                <div id="f<?= $sright['contentBranchDetailId'] ?>" class="accordion-collapse collapse" aria-labelledby="<?= $sright['contentBranchDetailId'] ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?= $sright['detail'] ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endforeach;
                    }
                    ?>
                </div>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sright['contentBranchId'])) { ?>
                    <div class="col-12 text-end mt-3">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sright['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>