<?php

use common\helpers\Path;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="<?= Yii::$app->homeUrl ?>" class="nav-link"><img src="<?= Path::backendUrl() ?>image/tcg-group.png" class="image-tokyo" style="width: 200px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="snavbar-toggler-icon">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse mt-3" id="navbarScroll">
            <ul class="navbar-nav me-auto  navbar-nav-scroll" style="margin: top 40px;padding-left: 150px;font-family:'klavika';font-size: 18px;line-height:35px;">
                <li class="nav-item <?= Yii::$app->controller->id == 'philosophy' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>philosophy" class="nav-link">Philosophy</a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'service' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>service" class="nav-link">Services</a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'people' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>people" class="nav-link">People</a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'career' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>career" class="nav-link">Career & Recruitment </a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'about-us' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>about-us" class="nav-link">About us</a>
                </li>
                <li class="nav-item <?= Yii::$app->controller->id == 'contact-us' ? 'selected-menu' : '' ?>">
                    <a href="<?= Yii::$app->homeUrl ?>contact-us" class="nav-link">Contact Us</a>
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
            </ul>
        </div>
    </div>
</nav>