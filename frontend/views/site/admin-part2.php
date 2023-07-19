<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 col-background">
    <?php
    if (isset($n) && count($n) > 0) {
    ?>
        <div class="col-12 pt-20 Global-Business">
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $n['title'] ?>
        </div>
        <div class="col-12 text-TCG">
            <?= $n['detail'] ?>
        </div>
        <?php
        if ($admin == 1) { ?>
            <div class=" col-12 edit-content">
                <a class="btn btn-warning bt-line" style="margin-left: 350px;" href="<?= Path::backendUrl() . 'content/default/update-content/' . ModelMaster::encodeParams(["contentId" => $n['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
        ?>
    <?php

    }
    ?>

    <div class="col-12">
        <div class="row col-12">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-6 country-index">
                        <?php
                        if (isset($branch) && count($branch) > 0) {
                            $i = 0;
                            foreach ($branch as $b) :
                                if ($i < 13) {
                        ?>
                                    <p><a href="<?= Yii::$app->homeUrl . $b['url'] ?>" class="no-underline1">
                                            <img src="<?= Path::backendUrl() . $b['image'] ?>" class="img-country">
                                            <?= $b['title'] ?></a>
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
                        if (isset($branch) && count($branch) > 0) {
                            $i = 0;
                            foreach ($branch as $p) :
                                if ($i > 12) {
                        ?>
                                    <p><a href="<?= Yii::$app->homeUrl . $p['url'] ?>" class="no-underline1">
                                            <img src="<?= Path::backendUrl() . $p['image'] ?>" class="img-country">
                                            <?= $p['title'] ?></a></p>
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
                <img src="<?= Path::backendUrl() ?>image/gol1.png" class="image-gol1">
            </div>
        </div>
    </div>
</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $pp['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>