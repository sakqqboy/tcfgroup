<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;

$this->title = 'about';
?>

<div class="col-12">
    <?php
    if (isset($bannerabout) && count($bannerabout) > 0) {
        $i = 0;
        foreach ($bannerabout as $abo) :
    ?>
    <img src="<?= Path::backendUrl() . $abo['image'] ?>" class="img-Grow-torgther">
    <div class="col-12 page-about2">
        <?= $abo['title'] ?>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

</div>

<div class="col-12 pr12 about-country">
    <div class="row">
        <?php
        if (isset($historytokyo) && count($historytokyo) > 0) {
            $i = 0;
            foreach ($historytokyo as $has) :
        ?>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 mt-50 title-Trending">
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $has['title'] ?>
            </div>
            <div class="col-12">
                <div class="col-5 about-country1">
                    <p> <?= $has['detail'] ?></p>
                    <p> <?= $has['detail2'] ?></p>
                </div>
                <div class="col-5 title-business">
                    <p><?= $has['detail3'] ?> </p>
                    <img src="<?= Path::backendUrl() . $has['image'] ?>" class="img-11">
                </div>
            </div>
        </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($branches) && count($branches) > 0) {
                $i = 0;
                foreach ($branches as $ches) :
            ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $ches['image'] ?>" class="img-13">
            </div>
            <div class="col-12 text-center">
                <p> <?= $ches['title'] ?> </p>
            </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>

            <div id="carouselExampleControls" class="carousel slide mt-40" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/Bangladesh.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/thailand.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/india.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/south africa.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/japan.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/hong kong.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/combodia.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/indonesia.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/kenya.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/china.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/dubai.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/mayanmar.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/laos.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/malaysia.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/mongolia.png" class="img-country1">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col-12" style="margin-top:50px;"></div>
        </div>
    </div>
</div>



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

<div class="col-12 pr12 Kaicho-color">
    <div class="row">
        <?php
        if (isset($aboutfounder) && count($aboutfounder) > 0) {
            $i = 0;
            foreach ($aboutfounder  as  $foun) :
        ?>
        <div class="col-lg-6 col-md- col-12">
            <img src="<?= Path::backendUrl() . $foun['image'] ?>" class="img-Kaicho-color">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 home-about">
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $foun['title'] ?>
            </div>
            <div class="col-10 detail-about">
                <p><?= $foun['detail'] ?></p>

                <p> <?= $foun['detail2'] ?></p>
            </div>
        </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>