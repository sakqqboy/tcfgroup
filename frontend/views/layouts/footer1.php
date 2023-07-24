<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>
<div class="col-12 footer1-country">
    <div class="col-12 pr12">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12 text-start">
                <p class="title-contry-footer1">Stay tuned, get all the business updates, newsletters</p>
                <div class="col-12 mt-30">
                    <a href="#"><i class="fa fa-facebook-square square-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter-square square-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram aquare-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square square-linkedin" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube-play square-youtube" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6 col-10  mt-40">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control input-your-email" placeholder="Your Email address"
                aria-label="Your Email address with two button addons">
            <button class="btn btn-primary input-your-email" type="button">Notify Me</button>
        </div>
    </div>
</div>

<div class="col-12 pr12 mt-50">
    <div class="row">
        <div class="col-lg-2 col-md-6 col-6 footer-box">
            <div class="row">
                <div class="col-12 txt-internal mb-20">
                    <?= isset($datamore["title"]) ? $datamore["title"] : '' ?>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($datamore['contentBranchId'])) { ?>
                    <div class=" col-12 text-end mt-1">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $datamore['contentBranchId']]) ?>"
                            target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="country-footer1">
                    <?php
                    if (isset($datamore["detailmore"]) && count($datamore["detailmore"]) > 0) {
                        $i = 0;
                        foreach ($datamore["detailmore"] as $dm) :
                    ?>
                    <p><a href="<?= Yii::$app->homeUrl . $dm['url'] ?>" class="no-underline"><?= $dm['title'] ?></a></p>
                    <?php

                            $i++;
                        endforeach;
                    }
                    ?>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($datamore['contentBranchId'])) { ?>
                    <div class=" col-12 text-end mt-1">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $datamore['contentBranchId']]) ?>"
                            target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6 footer-box">
            <div class="txt-internal mb-20">
                <?= isset($dataexplorebranch["title"]) ? $dataexplorebranch["title"] : '' ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($dataexplorebranch['contentBranchId'])) { ?>
                <div class=" col-12 text-end mt-1">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $dataexplorebranch['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="country-footer1">
                <?php
                if (isset($dataexplorebranch["detailexp"]) && count($dataexplorebranch["detailexp"]) > 0) {
                    $i = 0;
                    foreach ($dataexplorebranch["detailexp"] as $daex) :
                ?>
                <p><a href="<?= Yii::$app->homeUrl . $daex['url'] ?>" class="no-underline"><?= $daex['title'] ?></a></p>
                <?php

                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($dataexplorebranch['contentBranchId'])) { ?>
                <div class=" col-12 text-end mt-1">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $dataexplorebranch['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6 footer-box">
            <div class="txt-internal mb-20">
                <?= isset($datapopu["title"]) ? $datapopu["title"] : '' ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($datapopu['contentBranchId'])) { ?>
                <div class=" col-12 text-end mt-1">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $datapopu['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="country-footer1">
                <?php
                if (isset($datapopu["detailpopu"]) && count($datapopu["detailpopu"]) > 0) {
                    $i = 0;
                    foreach ($datapopu["detailpopu"] as $dapo) :
                ?>
                <p><a href="<?= Yii::$app->homeUrl . $dapo['url'] ?>" class="no-underline"><?= $dapo['title'] ?></a></p>
                <?php

                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($datapopu['contentBranchId'])) { ?>
                <div class=" col-12 text-end mt-1">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $datapopu['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6 footer-box">
            <div class="row">
                <div class="txt-internal mb-20">
                    <?= isset($databranch["title"]) ? $databranch["title"] : '' ?>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($databranch['contentBranchId'])) { ?>
                    <div class=" col-12 text-end mt-1">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $databranch['contentBranchId']]) ?>"
                            target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-6 text-start" style="margin-left: -10px;">
                    <div class="country-footer">
                        <?php
                        if (isset($databranch["detailbranch"]) && count($databranch["detailbranch"]) > 0) {
                            $i = 0;
                            foreach ($databranch["detailbranch"] as $db) :
                                if ($i < 13) {
                        ?>
                        <p><a href="<?= Yii::$app->homeUrl . $db['url'] ?>" class="no-underline"><?= $db['title'] ?></a>
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
                    if (isset($databranch["detailbranch"]) && count($databranch["detailbranch"]) > 0) {
                        $i = 0;
                        foreach ($databranch["detailbranch"] as $db) :
                            if ($i > 12) {
                    ?>
                    <p><a href="<?= Yii::$app->homeUrl . $db['url'] ?>" class="no-underline"><?= $db['title'] ?></a></p>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                </div>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($databranch['contentBranchId'])) { ?>
            <div class=" col-12 text-end mt-1">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $databranch['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-6 col-12 text-start box-logo-footer" style="margin-top: -120px;" id="button-update">
            <img src="<?= Path::backendUrl() ?>image/img/tcf-bangladesh.png" class="logo-footer">
            <p class="mt-50 title-contact-footer1">10th Floor Safura Tower 20, Kemal Ataturk Avenue Banani Dhaka, Dhaka,
                Bangladesh</p>
            <p class="title-business-footer1">Business Hours</p>

            <div class="day-cal">
                <button class="btn btn-primary calendar-button1" type="button">SUN</button>
                <button class="btn btn-primary calendar-button1" type="button">MON</button>
                <button class="btn btn-primary calendar-button1" type="button">TUE</button>
                <button class="btn btn-primary calendar-button1" type="button">WED</button>
                <button class="btn btn-primary calendar-button1" type="button">THU</button>
                <button class="btn btn-outline-primary calendar-button1" type="button">FRI</button>
                <button class="btn btn-outline-primary calendar-button1" type="button">SAT</button>
            </div>

            <h4>
                <p class="mt-50 badge-table">
                    <span class="badge bg-secondary">8:30 AM</span> <i class="fa fa-arrows-h" aria-hidden="true"></i>
                    <span class="badge bg-secondary"> 5:30 PM</span>
                </p>
            </h4>
            <div class="col-12 link-privacy">
                <a href="<?= Yii::$app->homeUrl ?>site-country/privacy" class="none-line">
                    Privacy & Cookies
                </a>
            </div>
        </div>

    </div>
</div>


<div class="footer-custom1 col-12 pr12">
    <div class="row">
        <div class="col-lg-2 col-2 footer-BD">
            <div class="btn btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i> BD
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Thailand</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-2 footer-global">
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
        <div class="col-lg-8 col-10">
            <div class="text-footer">
                @ Copyright 2023 Tokyo Consulting Firm Limited,<a href="#All Rights Reserved" class="links">All
                    Rights
                    Reserved</a> ,10th Floor Safura Tower 20, Kemal Ataturk Avenue Banani Dhaka
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