<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
if ($admin == 1) {
?>
    <div class="col-12" style="margin-top: 90px; margin-bottom: -85px; position: relative;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part1" onchange="javascript:showContent('aboutus-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-aboutus-part1">Show</label>
        </div>
    </div>
<?php
}
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
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $visionContent['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>