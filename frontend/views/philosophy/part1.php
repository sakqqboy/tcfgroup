<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
    if($admin == 1) {
?>
<div class="col-12" style="margin-top: 90px; margin-bottom: -45px; position: relative;">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="switch-philosophy-part1"
            onchange="javascript:showContent('philosophy-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
            <?= $isShow2 == 1 ? 'checked' : '1' ?>>
        <label class="form-check-label" for="switch-philosophy-part1">Show</label>
    </div>
</div>
<?php
    }
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
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $l['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>