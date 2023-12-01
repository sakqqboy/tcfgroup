<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 page-tree">
    <div class="row mt-20">
        <div class="col-md-4 col-12">
            <?php
            if (isset($services) && count($services) > 0) {
                $i = 0;
                foreach ($services as $ser) :
            ?>
                    <div class="col-12 form-services mt-50">
                        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $ser['title'] ?>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="row mt-40 form-services-page">
                <div class="col-4">
                    Select Country
                </div>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example">
                        <option value="">Select Country</option>
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
            <div class="col-12 pic-asset">
                <?php
                $countryindex['image'] = '';
                if (isset($countryindex2) && count($countryindex2)) {
                    foreach ($countryindex2 as $countryindex) :
                ?>

                        <img onmouseover="javascript:imageasset2(<?= $i ?>)" id="imageasses-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-1.png" class="as-set-2">

                        <img onmouseleave="javascript:imageasset1(<?= $i ?>)" id="imageasses2-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-3.png" class="copy-as-set-2">

                        <img onmouseover="javascript:imageasset4(<?= $i ?>)" id="imageasses3-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-2.png" class="as-set-3">

                        <img onmouseleave="javascript:imageasset3(<?= $i ?>)" id="imageasses4-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-4.png" class="copy-as-set-3">

                        <img onmouseover="javascript:imageasset6(<?= $i ?>)" id="imageasses5-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-3.png" class="as-set-4">

                        <img onmouseleave="javascript:imageasset5(<?= $i ?>)" id="imageasses6-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-5.png" class="copy-as-set-4">

                        <img onmouseover="javascript:imageasset8(<?= $i ?>)" id="imageasses7-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-4.png" class="as-set-5">

                        <img onmouseleave="javascript:imageasset7(<?= $i ?>)" id="imageasses8-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-6.png" class="copy-as-set-5">

                        <img onmouseover="javascript:imageasset10(<?= $i ?>)" id="imageasses9-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-5.png" class="as-set-6">

                        <img onmouseleave="javascript:imageasset9(<?= $i ?>)" id="imageasses10-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-7.png" class="copy-as-set-6">

                        <img onmouseover="javascript:imageasset12(<?= $i ?>)" id="imageasses11-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-6.png" class="as-set-7">

                        <img onmouseleave="javascript:imageasset11(<?= $i ?>)" id="imageasses12-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-8.png" class="copy-as-set-7">

                        <img onmouseover="javascript:imageasset14(<?= $i ?>)" id="imageasses13-<?= $i ?>" src="<?= Path::backendUrl() ?>image/img/Group-7.png" class="as-set-8">

                        <img onmouseleave="javascript:imageasset13(<?= $i ?>)" id="imageasses14-<?= $i ?>" style="display: none;" src="<?= Path::backendUrl() ?>image/img/Asset-9.png" class="copy-as-set-8">

                        <img src="<?= Path::backendUrl() ?>image/img/Asset-10.png" class="as-set-9">

                <?php

                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>

        <div class=" col-md-8 col-12">
            <?php
            if (isset($stage) && count($stage) > 0) {
                $i = 0;
                foreach ($stage as $select) :
            ?>
                    <div class="col-12 form-select-tree1">
                        <?= $select['title'] ?>
                    </div>
                    <div class="col-12 form-services">
                        <?= $select['detail'] ?>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <?php
            if ($admin == 1) { ?>
                <div class=" col-12 text-end edit-content mt-4">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $select['contentId']]) ?>" target="_blank">Edit</a>
                </div>
            <?php
            }
            ?>
            <div class="col-12 mt-20">
                <div class="row">

                    <?php
                    if (isset($taxation) && count($taxation) > 0) {
                        $i = 0;
                        foreach ($taxation as $table) :
                            if ($i < 6) {

                    ?>
                                <div class="col-lg-4 col-md-6 col-sm-4 col-8">
                                    <div class="card col-10 mt-20 form-page-text">
                                        <div class="text-center">
                                            <img src="<?= Path::backendUrl() . $table['image'] ?>" class="card-img-top">
                                            <div class="card-body text-center">
                                                <h6> <?= $table['title'] ?></h6>
                                                <p><?= $table['detail'] ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                                        <div class="card col-10 mt-20 form-page-text">
                                            <div class="text-center">
                                                <img src="<?= Path::backendUrl() . $table['image'] ?>" class="card-img-top">
                                                <div class="card-body text-center">
                                                    <h6> <?= $table['title'] ?></h6>
                                                    <p><?= $table['detail'] ?></p>
                                                    <button type="button" class="btn btn-outline-primary"><?= $table['detail2'] ?></button>

                                                </div>
                                    <?php
                                }
                                $i++;
                            endforeach;
                        }
                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if ($admin == 1) { ?>
                                    <div class=" col-12 text-end edit-content mt-2">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $table['contentId']]) ?>" target="_blank">Edit</a>
                                    </div>
                                <?php
                                }
                                ?>
                </div>