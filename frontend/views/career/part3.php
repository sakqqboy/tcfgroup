<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($explore) && count($explore) > 0) {
        $i = 0;
        foreach ($explore as $ex) :

    ?>
    <div class="col-12 title-explore">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $ex['title'] ?>
    </div>

    <div class="col-12 pr12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 title-txt1">
                <h5><?= $ex['detail'] ?></h5>
                <p><?= $ex['detail2'] ?></p>
                <button type="button" class="btn btn-primary button-apply"><?= $ex['detail3'] ?></button>
            </div>
            <div class="col-lg-6 col-md-6 col-12 text-center">
                <img src="<?= Path::backendUrl() . $ex['image'] ?>" class="image-picture-1">
            </div>
        </div>
    </div>
    <?php

            $i++;
        endforeach;
    }
    ?>
    <div>
        <?php
        if ($admin == 1) { ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line"
                href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ex['contentId']]) ?>"
                target="_blank">Edit</a>
        </div>
        <?php
        }
        ?>
    </div>

    <?php
    if (isset($apply) && count($apply) > 0) {
        $i = 0;
        foreach ($apply as $ap) :
    ?>
    <div class="col-12 pr12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="<?= Path::backendUrl() . $ap['image'] ?>" class="image-picture-2">
            </div>
            <div class="col-lg-6 col-md-6 col-12 title-txt2">
                <h5><?= $ap['title'] ?></h5>
                <p> <?= $ap['detail'] ?></p>
                <button type="button" class="btn btn-primary button-apply"><?= $ap['detail2'] ?></button>
            </div>
        </div>
    </div>

    <?php
            $i++;
        endforeach;
    }
    ?>
    <div>
        <?php
        if ($admin == 1) { ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line"
                href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ap['contentId']]) ?>"
                target="_blank">Edit</a>
        </div>
        <?php
        }
        ?>
    </div>

    <?php
    if (isset($professional) && count($professional) > 0) {
        $i = 0;
        foreach ($professional as $pr) :
    ?>
    <div class="col-12 pr12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 title-txt1">
                <h5><?= $pr['title'] ?> </h5>
                <p><?= $pr['detail'] ?></p>
                <button type="button" class="btn btn-primary button-apply"><?= $pr['detail2'] ?></button>
            </div>
            <div class="col-lg-6 col-md-6 col-12 text-center">
                <img src="<?= Path::backendUrl() . $pr['image'] ?>" class="image-picture-3">
            </div>
        </div>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
    <?php
    if ($admin == 1) {
    ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $pr['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>