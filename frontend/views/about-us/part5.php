<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>


<div class="col-12 pr12">
    <?php
    if (isset($consultinggroup) && count($consultinggroup) > 0) {
        $i = 0;
        foreach ($consultinggroup  as  $group) :
    ?>
    <div class="col-12 padding-box">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $group['title'] ?>
    </div>
    <div class="col-12">
        <div class="col-8 padding-text mb-5">
            <?= $group['detail'] ?>
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
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $group['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>