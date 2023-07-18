<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
    if($admin == 1) {
?>
    <div class="col-12" style="margin-top: 90px; margin-bottom: -75px; position: relative;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-service-part1" onchange="javascript:showContent('service-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-service-part1">Show</label>
        </div>
    </div>
<?php
    }
?>
<div class="col-12">
    <?php
    if (isset($services) && count($services) > 0) {
        $i = 0;
        foreach ($services as $ser) :
    ?>
            <img src="<?= Path::backendUrl() . $ser['image'] ?>" class="image-Linkedin-Cover">

    <?php
            $i++;
        endforeach;
    }
    ?>
    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end edit-content">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ser['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>