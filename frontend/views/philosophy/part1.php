<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 text-philosophy">
    <?php
    if (isset($pagemain) && count($pagemain) > 0) {
        $i = 0;
        foreach ($pagemain as $l) :

    ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $l['image'] ?>" class="image-philosophy">
            </div>
            <div class="offset-1 col-10 text-home">
                <?= $l['title'] ?>
            </div>
            <div class="offset-1 col-10  text-box-one">
                <?= $l['detail'] ?>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end edit-content">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $l['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>