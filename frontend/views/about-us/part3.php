<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($strategy) && count($strategy) > 0) {
        $i = 0;
        foreach ($strategy  as  $tr) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $tr['image'] ?>" class="image-yogendra-singh">
    </div>
    <div class="col-12  Block-1">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $tr['title'] ?>
    </div>
    <div class="col-12 Block-2">
        <?= $tr['detail'] ?>
    </div>
    <div class="col-12 Block-3">
        <?= $tr['detail2'] ?>
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
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $strategyContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>