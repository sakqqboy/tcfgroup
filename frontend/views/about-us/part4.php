<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php

    if (isset($should) && count(($should)) > 0) {
        $i = 0;
        foreach ($should as  $ld) :

    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() ?>image/whale2.png" class="image-whale">
    </div>
    <div class="col-12 Type-home-page-one">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $ld['title'] ?>
    </div>
    <div class="col-12 Type-home-page-two">
        <?= $ld['detail'] ?>
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
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $shouldContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>