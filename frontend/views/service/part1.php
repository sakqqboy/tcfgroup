<?php

use common\helpers\Path;
use common\models\ModelMaster;
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