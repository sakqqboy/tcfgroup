<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 blackground-black mt-50 ">
    <div class="row">
        <?php
        if (isset($kuno) && count($kuno) > 0) {
            $i = 0;
            foreach ($kuno as $uno) :
        ?>
        <div class="col-lg-6 col-md-6 col-12 OUR-PEOPLE">
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $uno['title'] ?>
            <img src="<?= Path::backendUrl() . $uno['image'] ?>" class="image-no">
            <p class="text-name-kuno"><?= $uno['detail'] ?></p>
        </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <?php
        if (isset($textmain) && count($textmain) > 0) {
            $i = 0;
            foreach ($textmain as $our) :
        ?>
        <div class="col-lg-6 col-md-6 col-12">
            <img src="<?= Path::backendUrl() . $our['image'] ?>" class="image-icon-name">
            <div class="col-12 title-empowering">
                <p> <?= $our['title'] ?> </p>
                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $our['detail'] ?></p>
            </div>
        </div>

        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div>
    <?php
    if ($admin == 1) { ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $our['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>