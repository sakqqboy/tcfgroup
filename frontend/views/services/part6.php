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
            <div class="col-12 mt-10">
                <?php
                if (isset($serleft) && count($serleft) > 0) {
                    $i = 0;
                    foreach ($serleft as $sleft) :
                ?>
                        <img onmouseover="javascript:selectedbuttom2(<?= $i ?>)" id="buttom1-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-1.png" class="width-imggrop-1">
                        <img onmouseleave="javascript:selectedbuttom1(<?= $i ?>)" id="buttom2-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-3.png" class="copy-width-imggrop-1">

                        <img onmouseover="javascript:selectedbuttom4(<?= $i ?>)" id="buttom3-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-2.png" class="width-imggrop-2">
                        <img onmouseleave="javascript:selectedbuttom3(<?= $i ?>)" id="buttom4-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-4.png" class="copy-width-imggrop-2">

                        <img onmouseover="javascript:selectedbuttom6(<?= $i ?>)" id="buttom5-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-3.png" class="width-imggrop-3">
                        <img onmouseleave="javascript:selectedbuttom5(<?= $i ?>)" id="buttom6-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-5.png" class="copy-width-imggrop-3">

                        <img onmouseover="javascript:selectedbuttom8(<?= $i ?>)" id="buttom7-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-4.png" class="width-imggrop-4">
                        <img onmouseleave="javascript:selectedbuttom7(<?= $i ?>)" id="buttom8-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-6.png" class="copy-width-imggrop-4">

                        <img onmouseover="javascript:selectedbuttom10(<?= $i ?>)" id="buttom9-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-5.png" class="width-imggrop-5">
                        <img onmouseleave="javascript:selectedbuttom9(<?= $i ?>)" id="buttom10-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-7.png" class="copy-width-imggrop-5">

                        <img onmouseover="javascript:selectedbuttom12(<?= $i ?>)" id="buttom11-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-6.png" class="width-imggrop-6">
                        <img onmouseleave="javascript:selectedbuttom11(<?= $i ?>)" id="buttom12-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-8.png" class="copy-width-imggrop-6">

                        <img onmouseover="javascript:selectedbuttom14(<?= $i ?>)" id="buttom13-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-7.png" class="width-imggrop-7">
                        <img onmouseleave="javascript:selectedbuttom13(<?= $i ?>)" id="buttom14-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-9.png" class="copy-width-imggrop-7">

                        <img src="<?= Path::backendUrl() ?>image/img/Group-8.png" class="width-imggrop-8">

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
            <div class="col-12 mt-20">
                <div class="row">
                    <!-- <div class="accordion accordion-flush" id="accordionFlushExample"> -->
                    <?php
                    if (isset($serright) && count($serright) > 0) {
                        $i = 0;
                        foreach ($serright as $sright) :

                    ?>
                            <!-- <div class="accordion-item">
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
                            </div> -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-8">
                                <div class="card col-10 mt-20 form-page-text">
                                    <div class="text-center">
                                        <img src="<?= Path::backendUrl() ?>image/accounting.png" class="card-img-top">
                                        <div class="card-body text-center">
                                            <h6> <?= $sright['title'] ?></h6>
                                            <p><?= $sright['detail'] ?></p>
                                        </div>
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