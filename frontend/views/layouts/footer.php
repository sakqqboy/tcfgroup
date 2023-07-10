<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>
<div class="col-12 pr12 mt-50">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12 text-start box-logo-footer">
            <img src="<?= Path::backendUrl() ?>image/tcg-group.png" class="logo-footer">
        </div>
        <div class="col-lg-2 col-md-6 col-6 footer-box">
            <div class="row">
                <div class="txt-internal mb-20">
                    <?= isset($dataBranch["title"]) ? $dataBranch["title"] : '' ?>
                    <?php
                    if ($admin == 1) { ?>
                    <div class=" col-12 text-end edit-content mt-1">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/update-content/' . ModelMaster::encodeParams(["contentId" => $dataBranch['contentId']]) ?>"
                            target="_blank">Edit</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-6  text-start">
                    <div class="country-footer">
                        <?php
                        if (isset($dataBranch["detail"]) && count($dataBranch["detail"]) > 0) {
                            $i = 0;
                            foreach ($dataBranch["detail"] as $bl) :
                                if ($i < 13) {
                        ?>
                        <p><a href="<?= Yii::$app->homeUrl . $bl['url'] ?>" class="no-underline"><?= $bl['title'] ?></a>
                        </p>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
                <div class="col-6 text-start country-footer">
                    <?php
                    if (isset($dataBranch["detail"]) && count($dataBranch["detail"]) > 0) {
                        $i = 0;
                        foreach ($dataBranch["detail"] as $br) :
                            if ($i > 12) {
                    ?>
                    <p><a href="<?= Yii::$app->homeUrl . $br['url'] ?>" class="no-underline"><?= $br['title'] ?></a></p>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                </div>
            </div>
            <?php
            if ($admin == 1) { ?>
            <div class=" col-12 text-end edit-content mt-1">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $dataBranch['contentId']]) ?>"
                    target="_blank">Edit</a>
            </div>
            <?php
            }
            ?>

        </div>
        <div class="col-lg-2 col-md-6 col-6 footer-box">
            <div class="txt-internal mb-20">
                <?= isset($dataexplore["title"]) ? $dataexplore["title"] : '' ?>
                <?php
                if ($admin == 1) { ?>
                <div class=" col-12 text-end edit-content mt-1">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content/' . ModelMaster::encodeParams(["contentId" => $dataexplore['contentId']]) ?>"
                        target="_blank">Edit</a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="country-footer">
                <?php
                if (isset($dataexplore["detailex"]) && count($dataexplore["detailex"]) > 0) {
                    $i = 0;
                    foreach ($dataexplore["detailex"] as $ex) :
                ?>
                <p><a href="<?= Yii::$app->homeUrl .$ex['url'] ?>" class="no-underline"><?= $ex['title'] ?></a></p>
                <?php

                        $i++;
                    endforeach;
                }
                ?>
            </div>
            <?php
            if ($admin == 1) { ?>
            <div class=" col-12 text-end edit-content mt-1">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $dataexplore['contentId']]) ?>"
                    target="_blank">Edit</a>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-2 col-md-6 col-6 footer-box">
            <div class="txt-internal mb-20">
                <?= isset($datapopular["title"]) ? $datapopular["title"] : '' ?>
                <?php
                if ($admin == 1) { ?>
                <div class=" col-12 text-end edit-content mt-1">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content/' . ModelMaster::encodeParams(["contentId" => $datapopular['contentId']]) ?>"
                        target="_blank">Edit</a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="country-footer">
                <?php
                if (isset($datapopular["detailpop"]) && count($datapopular["detailpop"]) > 0) {
                    $i = 0;
                    foreach ($datapopular["detailpop"] as $pop) :
                ?>
                <p><a href="<?= Yii::$app->homeUrl .$pop['url'] ?>" class="no-underline"><?= $pop['title'] ?></a></p>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
            <?php
            if ($admin == 1) { ?>
            <div class=" col-12 text-end edit-content mt-1">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $datapopular['contentId']]) ?>"
                    target="_blank">Edit</a>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-6 col-6 footer-bottom">
            <a href="#"><i class="fa fa-facebook-square square-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter-square square-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram aquare-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin-square square-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube-play square-youtube" aria-hidden="true"></i></a>
            <div class="txt-stay">
                Stay tuned, get all the business updates, newsletters
            </div>
            <div class="col-lg-10 col-md-6 col-12" style="margin-top: 20px;">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control input-your-email" placeholder="Your Email address"
                        aria-label="Your Email address with two button addons">
                    <button class="btn btn-primary input-your-email" type="button">Notify Me</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-custom col-12 pr12">
    <div class="row">
        <div class="col-lg-2 col-2 text-center">
            <div class="btn btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-globe"></i> GLOBAL
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Thailand</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-10 col-10">
            <div class="text-footer">
                @ Copyright 2022 Tokyo Consulting Group, <a href="#All Rights Reserved" class="links">All Rights
                    Reserved</a> , 10, Ataturk Tower, Flat #11/A (Lift, 22 Kemal Ataturk Ave, Dhaka 1213)
            </div>
            <div class="footer-links mt-10">
                <a href="Legal" target="_blank">Legal</a> &nbsp;
                <a href="Terms of Service" target="_blank">Terms of Service</a> &nbsp;
                <a href="Responsible Disclosure" target="_blank">Responsible Disclosure</a> &nbsp;
                <a href="Privacy Information" target="_blank">Privacy Information</a> &nbsp;
                <a href="Cookie Preferences" target="_blank">Cookie Preferences</a> &nbsp;
                <a href="Contact" target="_blank">Contact</a> &nbsp;
                <a href="Sitemap" target="_blank">Sitemap</a> &nbsp;
            </div>
        </div>
    </div>
</div>