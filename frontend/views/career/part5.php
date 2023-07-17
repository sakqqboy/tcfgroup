<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12  mt-50 col-background">
    <?php
    if (isset($show) && count($show) > 0) {
        $i = 0;
        foreach ($show as $sh) :
    ?>
    <div class="col-12 Global-Business">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $sh['title'] ?>
    </div>
    <div class="col-12 text-TCG">
        <?= $sh['detail'] ?>
    </div>

    <?php
            $i++;
        endforeach;
    }
    ?>

    <div class="col-12">
        <div class="row col-12">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-6 country-index">
                        <?php
                        if (isset($discovercountry) && count($discovercountry) > 0) {
                            $i = 0;
                            foreach ($discovercountry as $di) :
                                if ($i < 13) {

                        ?>
                        <p> <a href="<?= Yii::$app->homeUrl . $di['url'] ?>" class="no-underline1">
                                <img src="<?= Path::backendUrl() . $di['image'] ?>" class="img-country">
                                <?= $di['title'] ?></a>
                        </p>



                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>

                    <div class="col-6 country-index">
                        <?php
                        if (isset($incountry) && count($incountry) > 0) {
                            $i = 0;
                            foreach ($incountry as $in) :
                                if ($i < 13) {

                        ?>

                        <p><a href="<?= Yii::$app->homeUrl . $in['url'] ?>" class="no-underline1">
                                <img src="<?= Path::backendUrl() . $in['image'] ?>"
                                    class="img-country"><?= $in['title'] ?></a>
                        </p>

                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <?php
                if (isset($show) && count($show) > 0) {
                    $i = 0;
                    foreach ($show as $sh) :
                ?>
                <img src="<?= Path::backendUrl() . $sh['image'] ?>" class="image-gol1">
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="col-12 text-end mt-1 mb-3">
    <?php
    if ($admin == 1) {
    ?>
    <span>
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $sh['contentId']]) ?>"
            target="_blank">Edit(ฺBG)</a>
    </span>
    <?php
    }
    ?>
    <?php
    if ($admin == 1) {
    ?>
    <span>
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $di['contentId']]) ?>"
            target="_blank">Edit(Left)</a>
    </span>
    <?php
    }
    ?>
    <?php
    if ($admin == 1) {
    ?>
    <span>
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $in['contentId']]) ?>"
            target="_blank">Edit(Right)</a>
    </span>
    <?php
    }
    ?>
</div>