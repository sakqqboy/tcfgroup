<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>
<!-- image/img/tcg-group-bangladesh.png -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="<?= Yii::$app->homeUrl ?>" class="nav-link"><img src="<?= Path::backendUrl() ?>image/tcg-group.png" class="" style="width: 200px;">

        </a>
        <p class="font-size12 text-primary" style="margin-bottom: -57px;;margin-left:-87px;"><?= $branchName ?></p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="snavbar-toggler-icon">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse mt-3" id="navbarScroll">
            <ul class="navbar-nav me-auto  navbar-nav-scroll" style="margin: top 40px;padding-left: 150px;font-family:'klavika';font-size: 18px;line-height:35px;">
                <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>newsletter/index/<?= $branchName ?>" class="nav-link">Newsletter</a>
                </li>
                <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>services/index/<?= $branchName ?>" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>webinar/index/<?= $branchName ?>" class="nav-link">Webinar</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>site-country/career" class="nav-link">Career </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>resource/index/<?= $branchName ?>" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>about-us-country/index/<?= $branchName ?>" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>site-country/login" class="nav-link">Log in</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>site-country/store" class="nav-link">Store</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>