<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($existence) && count($existence) > 0) {
        $i = 0;
        foreach ($existence  as  $ce) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $ce['image'] ?>" class="image-bali">
    </div>

    <div class="col-12">
        <div class="col-12 box-data-1">
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $ce['title'] ?>
        </div>
        <div class="col-12 box-data-2">
            <?= $ce['detail'] ?>
        </div>
        <div class="col-12 box-data-3">
            <?= $ce['detail2'] ?>
        </div>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $existenceContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>