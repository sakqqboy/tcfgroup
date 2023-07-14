<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 page-two">
    <?php
    if (isset($box) && count($box) > 0) {
        $i = 0;
        foreach ($box as $x) :

    ?>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mt-20">
            <div class="col-12 form-select-one mt-20">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $x['title'] ?>
            </div>
            <div class="col-12 pt-20 form-select-two">
                <p> <?= $x['detail'] ?></p>
                <p><?= $x['detail2'] ?></p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-50">
            <div class="col-12 form-select-tree">
                <?= $x['detail3'] ?>
            </div>
            <div class="col-12 pt-20">
                <img src="<?= Path::backendUrl() . $x['image'] ?>" class="image-Asset">
            </div>
        </div>
    </div>
    <?php

            $i++;
        endforeach;
    }
    ?>
    <?php
    if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content mt-4">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $x['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>