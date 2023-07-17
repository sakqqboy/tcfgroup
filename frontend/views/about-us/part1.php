<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($vision) && count($vision) > 0) {
        $i = 0;
        foreach ($vision as $ut) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $ut['image'] ?>" class="image-Vision-page">
    </div>
    <div class="col-12">
        <div class="col-12 text-Our">
            <?= $ut['title'] ?>
        </div>
        <div class="col-12 text-vision">
            <?= $ut['detail'] ?>
        </div>
        <div class="col-12 vlog-1">
            <?= $ut['detail2'] ?>
        </div>
        <div class="col-12 title-color">
            <p><?= $ut['detail3'] ?></p>
        </div>
    </div>
    <?php
        endforeach;
    }
    ?>

</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $visionContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>