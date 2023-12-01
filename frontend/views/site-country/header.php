<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>
<!-- image/img/tcg-group-bangladesh.png -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="<?= Yii::$app->homeUrl ?>site/index" class="nav-link"><img src="<?= Path::backendUrl() ?>image/tcg-group.png" class="" style="width: 200px;"></a>
        <p class="font-size14 text-primary header-branch">

            <a href="<?= Yii::$app->homeUrl ?>site-country/index/<?= $branchName ?>" class="no-underline">
                <?= $branchName ?>
        </p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="snavbar-toggler-icon">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse mt-3" id="navbarScroll">
            <ul class="navbar-nav me-auto  navbar-nav-scroll" style="margin: top 40px;padding-left: 150px;font-family:'klavika';font-size: 18px;line-height:35px;">
                <li class="nav-item <?= Yii::$app->controller->id == 'newsletter' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>newsletter/index/<?= $branchName ?>" class="nav-link">Newsletter</a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'services' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>services/index/<?= $branchName ?>" class="nav-link">Services</a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'webinar' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>webinar/index/<?= $branchName ?>" class="nav-link">Webinar</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>site-country/career" class="nav-link">Career </a>
                </li> -->
                <li class="nav-item <?= Yii::$app->controller->id == 'resource' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>resource/index/<?= $branchName ?>" class="nav-link">resource</a>
                <li class=" nav-item <?= Yii::$app->controller->id == 'about-link">Resources</a>
                </li>us-country' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>about-us-country/index/<?= $branchName ?>" class="nav-link">About
                        us</a>
                </li>
                <?php
                if (isset(Yii::$app->user->id)) {
                ?>
                    <li class="nav-item <?= Yii::$app->controller->action->id == 'logout' ? 'selected-menu' : '' ?>">
                        <a href="<?= Yii::$app->homeUrl ?>site/logout" class="nav-link">Log out</a>
                    </li>
                <?php
                } else { ?>
                    <li class="nav-item <?= Yii::$app->controller->action->id == 'login' ? 'selected-menu' : '' ?>">
                        <a href="<?= Yii::$app->homeUrl ?>site-country/login" class="nav-link">Log in</a>
                    </li>
                <?php

                }
                ?>
                <!-- <li class="nav-item">
                    <a href="<?= Yii::$app->homeUrl ?>site-country/store" class="nav-link">Store</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>