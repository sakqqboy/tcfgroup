<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($people) && count($people) > 0) {
        foreach ($people as $at) :

    ?>
    <img src="<?= Path::backendUrl() . $at['image'] ?>" class="image-working">
    <div class="col-12 title-At">
        <?= $at['title'] ?>
        <?= $at['detail'] ?>
    </div>
    <div class="col-10 text-center form-data-block">
        <div class="col-12">
            <?= $at['detail2'] ?>
        </div>
    </div>
    <?php

        endforeach;
    }
    ?>
</div>
<div>
    <?php
        if ($admin == 1) { ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $at['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
        }
    ?>
</div>