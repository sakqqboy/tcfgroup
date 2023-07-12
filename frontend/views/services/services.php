<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Carousel;

$this->title = 'services';
?>

<div class="col-12">
    <?php
    if (isset($together) && count($together) > 0) {
        $i = 0;
        foreach ($together as $ther) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $ther['image'] ?>" class="width1">

    </div>
    <div class="col-12 serviecs-h1">
        <p> <?= $ther['title'] ?></p>
    </div>
    <div class="col-12 serviecs-h2">
        <p> <?= $ther['detail'] ?></p>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($ther['contentBranchId'])) { ?>
    <div class=" col-12 text-end">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $ther['contentBranchId']]) ?>"
            target="_blank">Edit[BG](<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>
</div>


<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($contribute) && count($contribute) > 0) {
            $i = 0;
            foreach ($contribute as $tri) :
        ?>
        <div class="col-12 p-services">
            <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $tri['title'] ?>
        </div>

        <div class="col-lg-8 col-md-12 col-12 page-ser1">
            <div class="col-12 textservices">
                <p><?= $tri['detail'] ?></p>
            </div>

            <?php
                $i++;
            endforeach;
        }
            ?>

            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($tri['contentBranchId'])) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $tri['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>

            <div class="row">
                <?php
                if (isset($garmenticon) && count($garmenticon) > 0) {
                    $i = 0;
                    foreach ($garmenticon as $icon5) :
                        if ($i < 8) {

                ?>
                <div class="col-lg-3 col-md-5 col-sm-5 col-6 card c-body"
                    onmouseover="javascript:showServicescard2(<?= $i ?>)" id="iconcard-<?= $i ?>">
                    <div class="card-body">
                        <span class="title-garment"> <img src="<?= Path::backendUrl() . $icon5['image'] ?>"
                                class="width2"> &nbsp;&nbsp;<?= $icon5['title'] ?></span>
                        <p class="brunch-garment"><?= $icon5['detail'] ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-5 col-6 card c-body-copy" style="display:none;"
                    id="iconcard2-<?= $i ?>" onmouseleave="javascript:showServicescard1(<?= $i ?>)">
                    <div class="card-body">
                        <span class="title-garment-copy"> <img src="<?= Path::backendUrl() . $icon5['image'] ?>"
                                class="width2"> &nbsp;&nbsp;<?= $icon5['title'] ?></span>
                        <p class="brunch-garment-copy"><?= $icon5['detail'] ?></p>
                    </div>
                </div>
                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
            </div>

        </div>
        <?php
                if (isset($contribute) && count($contribute) > 0) {
                    $i = 0;
                    foreach ($contribute as $tri) :
                ?>
        <div class="col-lg-4 col-md-6 col-12" style="padding-right:0px;">
            <img src="<?= Path::backendUrl() . $tri['image'] ?>" class="img-width-services">
        </div>
        <?php
                        $i++;
                    endforeach;
                }
                ?>
    </div>
</div>

<div class="col-12 pr12 bk-ser">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
            <div class="col-12 title-Es">
                <?php
                if (isset($standing) && !empty($standing)) {
                ?>
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"><?= $standing['title'] ?>
                <?php
                }
                ?>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($standing['contentBranchId'])) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $standing['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>
            <div class="col-12  mt-50">
                <div class="row">
                    <?php
                    if (isset($understanding) && count($understanding) > 0) {
                        $i = 0;
                        foreach ($understanding as $std) :
                            if ($i < 3) {
                    ?>
                    <div class="col-4 Es1" id="limited-<?= $i ?>" onmouseover="javascript:showLimited2(<?= $i ?>)">
                        <?= $std['title'] ?>
                    </div>

                    <div class="col-4 copy-Es1" style="display:none;" id="limited2-<?= $i ?>"
                        onmouseleave="javascript:showLimited1(<?= $i ?>)">
                        <?= $std['title'] ?>
                        <div class="col-10 txt-es"></div>
                    </div>

                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                </div>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($std['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $std['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>


            <div class="col-12 Es1"><br>
                <?php
                if (isset($s) && !empty($s)) {
                ?>
                <p><?= $s['detail'] ?></p> <br>
                <?php
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($s['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $s['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
                <?php
                if (isset($newservices) && count($newservices) > 0) {
                    $i = 0;
                    foreach ($newservices as $s) :
                        if ($i < 8) {
                ?>
                <li> <?= $s['title'] ?></li>

                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($s['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $s['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>

        </div>
        <div class="col-lg-6 col-md-12 col-12 mt-50">
            <div class="row">
                <div class="col-lg-1 col-md-12 col-12">
                    <img src="<?= Path::backendUrl() ?>image/img/long.png" class="width-long">
                </div>

                <div class="col-lg-11 col-md-12 col-12 Name-Clearance">
                    <?php
                    if (isset($nameslider) && count($nameslider) > 0) {
                        $i = 0;
                        foreach ($nameslider as $nmlider) :
                    ?>
                    <p class="services1"> <?= $nmlider['title'] ?></p>
                    <p class="services2"> <?= $nmlider['detail'] ?></p>
                    <?php
                            $i++;
                        endforeach;
                    }
                    ?>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($nmlider['contentBranchId'])) { ?>
                    <div class="col-12 text-end">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $nmlider['contentBranchId']]) ?>"
                            target="_blank">Edit(<?= $branchName ?>)</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-12" style="margin-top:60px;"></div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-12 title-frequently">
            <?php
            if (isset($shape) && !empty($shpae)) {
            ?>
            <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"><?= $shape['title'] ?>
            <?php
            }
            ?>
        </div>
        <?php
        if ($canEdit == 1 && $userInThisBranch == 1 && isset($shape['contentBranchId'])) { ?>
        <div class="col-12 text-center">
            <a class="btn btn-warning bt-line"
                href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $shape['contentBranchId']]) ?>"
                target="_blank">Edit(<?= $branchName ?>)</a>
        </div>
        <?php
        }
        ?>
        <div class="col-lg-3 col-md-6 col-12">
            <?php
            if (isset($shapestar) && count($shapestar) > 0) {
                $i = 0;
                foreach ($shapestar as $shape) :
                    if ($i < 4) {
            ?>

            <p class="form-legal" id="content2-legal-<?= $i ?>" onmouseover="javascript:showLegal2(<?= $i ?>)">
                <?= $shape['title'] ?></p>

            <p class="form-legal-copy" style="display: none;" id="content2-legal2-<?= $i ?>"
                onmouseleave="javascript:showLegal1(<?= $i ?>)"><?= $shape['title'] ?></p>

            <?php
                    }
                    $i++;
                endforeach;
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
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sup['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
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
                    foreach ($companymarket as $marketing) :
                        if ($i < 4) {
                ?>
                <p class="font-text"><?= $marketing['title'] ?></p>
                <p class="services-name"><?= $marketing['detail'] ?></p>
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
                    <p class="text-end mt-50"><?= $marketing['detail2'] ?><i class="fa fa-chevron-right"
                            aria-hidden="true"></i></p>
                    <?php
                    }
                    ?>
                </a>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($marketing['contentBranchId'])) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $marketing['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
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
                <?php

                        $i++;
                    endforeach;
                }
                ?>
                <div class="alert alert-primary" role="alert">
                    <a href="#wiki.com"><img src="<?= Path::backendUrl() ?>image/img/wiki.com.png"></a>
                </div>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($lected['contentBranchId'])) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $lected['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<div class="col-12" style="margin-top: 70px;">
    <?php Carousel::widget([]); ?>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
            if (isset($development) && count($development) > 0) {
                $i = 0;
                foreach ($development as $dev) :
            ?>
            <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" data-bs-interval="10000">
                <img src="<?= Path::backendUrl() . $dev['image'] ?>" class="d-block"
                    style="width:100%; margin-top:20px;">
                <div class="offset-1 col-11 text-title">
                    <?= $dev['title'] ?><br>
                    <div class="text-detail">
                        <?= $dev['detail'] ?> <br>
                        <?= $dev['detail2'] ?><br>
                        <?= $dev['detail3'] ?><br>
                        <?= $dev['detail4'] ?><br>
                        <?= $dev['detail5'] ?><br>
                        <?= $dev['detail6'] ?><br>
                        <button type="button" class="btn btn-primary button-start mt-4"> <?= $dev['detail7'] ?></button>
                    </div>
                </div>
            </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($dev['contentBranchId'])) { ?>
    <div class="col-12 text-end">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $dev['contentBranchId']]) ?>"
            target="_blank">Edit(<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>
</div>

<div class="col-12 pr12 background-establish">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($selectioncountry) && count($selectioncountry) > 0) {
                $i = 0;
                foreach ($selectioncountry as $newcountry) :
            ?>
            <div class="col-12 title-establish">
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $newcountry['title'] ?>55555555555555
            </div>
            <div class="col-12 title-select">
                <p> <?= $newcountry['detail'] ?></p>
            </div>
            <?php
                    $i++;
                endforeach;
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
                        <a href="<?= Yii::$app->homeUrl . $bs['url'] ?>">
                            <p class="no-underline1">
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
                        <a href="<?= Yii::$app->homeUrl . $bs2['url'] ?>">
                            <p class="no-underline1">
                                <img src="<?= Path::backendUrl() . $bs2['image'] ?>"
                                    class="<?= $bs2['title'] == 'Japan' ? 'width-japan' : '' ?>">
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
                        <a href="<?= Yii::$app->homeUrl . $bs3['url'] ?>">
                            <p class="no-underline1">
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
                        <a href="<?= Yii::$app->homeUrl . $bs4['url'] ?>">
                            <p class="no-underline1">
                                <img src="<?= Path::backendUrl() . $bs4['image'] ?>"
                                    class="<?= $bs4['title'] == 'Nigeria' ? 'width-japan' : '' ?>">
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
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($bsp['contentBranchId'])) { ?>
                <div class="col-12 text-end">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $bsp['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <?php
        if (isset($imgcountrydetail) && count($imgcountrydetail) > 0) {
        ?>
        <div class="col-lg-6 col-md-6 col-12">
            <img src=" <?= Path::backendUrl()  . $imgcountrydetail['image'] ?>" class="width-group">
        </div>
        <?php
        }
        ?>
    </div>
</div>

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
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $sl['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
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
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sleft['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
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
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $sr['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#f<?= $sright['contentBranchDetailId'] ?>" aria-expanded="true"
                                aria-controls="<?= $sright['contentBranchDetailId'] ?>">
                                <?= $sright['title'] ?>
                            </button>
                        </h2>
                        <div id="f<?= $sright['contentBranchDetailId'] ?>" class="accordion-collapse collapse"
                            aria-labelledby="<?= $sright['contentBranchDetailId'] ?>"
                            data-bs-parent="#accordionFlushExample">
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
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sright['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mt-50">
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <div class="col-12 connect-experts mt-40">
                <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> Connect Experts
            </div>
            <div class="col-12 Get-free mt-30">
                Get Free Appointment on your Business Issuefa-spin
            </div>
            <div class="col-12 If-you mt-10">
                If you would like to discuss a project or have a question, please fill in the form and we ll get right
                back to you.
            </div>
            <div class="col-12 mt-30 pr12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mt-50 pr-40 form-input">
                        <div class="row">
                            <div class="col-7">
                                <p class="If-you2">Do you prefer to communicate as an entity or an individual?</p>
                            </div>
                            <div class="col-5">
                                <label for="formGroupExampleInput" class="form-label label-thin">
                                    &nbsp;&nbsp;&nbsp;Select Country</label>
                                <select class="form-select mt-10" name="countryid" id="countryid"
                                    aria-label="Default select example">
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
                            <div class="col-12">
                                <div class="row mt-20">
                                    <div class="col-5 left-box-select">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typeperson"
                                                id="legalEntity" value="1">
                                            <label class="form-check-label ml-10" for="legalEntity"> Legal
                                                Entity</label>
                                        </div>
                                    </div>
                                    <div class="col-5 left-box-select">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typeperson"
                                                id="individual" value="2" checked>
                                            <label class="form-check-label ml-10" for="individual">
                                                Individual</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 your-company" style="margin-top: 30px;">
                            <label for="exampleInputCompany" class="form-label label-thin"> Your Company<span
                                    class="moon">*</span></label>
                            <input type="Company" class="form-control" name="company" id="company"
                                aria-describedby="company">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputName" class="form-label label-thin"> Your Name<span
                                    class="moon">*</span></label>
                            <input type="Name" class="form-control" name="name" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputPosition" class="form-label label-thin"> Position<span
                                    class="moon">*</span></label>
                            <input type="Position" class="form-control" name="position" id="position"
                                aria-describedby="position">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputEmail" class="form-label label-thin"> Your e-mail<span
                                    class="moon">*</span></label>
                            <input type="Email" class="form-control" id="email" name="email" aria-describedby="email">
                        </div>
                        <div class="mb-3 your-company">
                            <div class="row">
                                <div class="col-6 text-start">
                                    <label for="exampleInputEmail" class="form-label label-thin"> Phone Number<span
                                            class="moon">*</span></label>
                                    <input type="number" class="form-control" name="phonenumber" id="phonenumber"
                                        placeholder="+880" aria-label="Phone">
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail" class="form-label label-thin"> Your Business<span
                                            class="moon">*</span></label>
                                    <select class="form-select" name="businesstype" id="businesstype"
                                        aria-label="Default select example">
                                        <option selected> Select business Type</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 form-Questions mt-50 pr-40">
                        <div class="mb-3">
                            <label for="exampleInputQuestions" class="form-label label-thin">Questions & Concern</label>
                            <input type="Questions" class="form-control" name="question" id="question"
                                aria-describedby="Questions">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label label-thin">Details of
                                Inquiry</label>
                            <textarea class="form-control" name="detail" id="detail" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6 text-start label-thin mt-4">
                                ATTACHMENT (IF ANY) <a href="" class="no-underline"><i class="fa fa-paperclip"
                                        aria-hidden="true"></i></a>

                            </div>
                            <div class="col-6 mt-4 text-end">
                                <a class="btn btn-primary button-get" href="javascript:newClient()">Get Free
                                    Appointment</a>
                            </div>
                            <div class="col-4 text-start mt-4">
                                <div class="contact-social mb-2">Whatsapp</div>
                                <a href="" class="no-underline">
                                    <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf
                                    </p>
                                </a>
                            </div>
                            <div class="col-8 text-end mt-4">
                                <div class="contact-social mb-2">Email</div>
                                <p class="info-tokyo"> <a href="" class="no-underline"> f-info@tokyoconsultinggroup.com
                                        <i class="fa fa-envelope" aria-hidden="true"></i></p></a>
                            </div>
                            <div class="col-4 text-start mt-4">
                                <div class="contact-social mb-2">Skype</div>
                                <a href="" class="no-underline">
                                    <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i> inquarrytcf</p>
                                </a>

                            </div>
                            <div class="col-8 text-end mt-4">
                                <div class="contact-social mb-2">Phone</div>
                                <a href="" class="no-underline">
                                    <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>