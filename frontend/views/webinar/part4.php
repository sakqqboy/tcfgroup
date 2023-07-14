<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12 mt-50">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 all-player">
            <?php
            if (isset($player1) && count($player1) > 0) {
                $i = 0;
                foreach ($player1 as $py) :
                    if ($i < 5) {
            ?>
            <div class="row pr12">
                <div class="col-4">
                    <img src="<?= Path::backendUrl() . $py['image'] ?>" class="img-video">
                </div>
                <div class="col-6 mt-10">
                    <div class="col-12 text-art">
                        <?= $py['title'] ?>
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        <?= $py['detail'] ?>
                    </div>
                </div>
                <div class="col-2 mt-20 text-end">
                    <a href="<?= Yii::$app->homeUrl . $py['url'] ?>">
                        <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                    </a>
                </div>
            </div>
            <div class="row pr12 mt-10"></div>
            <div class="row pr12 mt-10"></div>
            <div class="row pr12 mt-10"></div>
            <div class="row pr12 mt-10"></div>
            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>

        </div>
        <div class="col-lg-6 col-md-6 col-12 all-play1">
            <?php
            if (isset($player2) && count($player2) > 0) {
                $i = 0;
                foreach ($player2  as  $pla) :
                    if ($i < 5) {

            ?>
            <div class="row pr12">
                <div class="col-4">
                    <img src="<?= Path::backendUrl() . $pla['image'] ?>" class="img-video">
                </div>
                <div class="col-6 mt-10">
                    <div class="col-12 text-art">
                        <?= $pla['title'] ?>
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        <?= $pla['detail'] ?>
                    </div>
                </div>
                <div class="col-2 mt-20 text-end">
                    <a href="<?= Yii::$app->homeUrl . $pla['url'] ?>">
                        <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                    </a>
                </div>
            </div>
            <div class="row pr12 mt-10"></div>
            <div class="row pr12 mt-10"></div>
            <div class="row pr12 mt-10"></div>
            <div class="row pr12 mt-10"> </div>

            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>

        </div>
    </div>
</div>