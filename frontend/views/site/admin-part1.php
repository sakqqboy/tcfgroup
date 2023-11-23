<?php

use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Carousel;
?>

<div class="">
    <div class="col-12">
        <?php
        if ($admin == 1) {
        ?>
            <div class="col-12" style="margin-top: 100px;margin-bottom: -10px;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-part1" onchange="javascript:showContent('admin-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                    <label class="form-check-label" for="switch-admin-part1">Show (Banner)</label>
                </div>
            </div>
        <?php
        }
        ?>
        <?php Carousel::widget([]); ?>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                if (isset($banners) && count($banners) > 0) {
                    $i = 0;
                    foreach ($banners as $bn) :
                ?>
                        <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" data-bs-interval="10000">
                            <img src="<?= Path::backendUrl() . $bn['image'] ?>" class="d-block" style="width:100%; margin-top:20px;">
                            <div class="offset-1 col-11 text-star">
                                <?= $bn['title'] ?><br>
                                <?= $bn['detail'] ?> <br>
                                <?= $bn['detail2'] ?><br>
                                <button type="button" class="btn btn-primary button-start1"> <?= $bn['detail3'] ?></button>
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
    </div>

    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end edit-content" style="position: relative;z-index:99;">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $index['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>

</div>