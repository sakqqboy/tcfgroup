<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="">
    <?php
    if (isset($career) && !empty(($career)) > 0) {
        $i = 0;
        foreach ($career as $jobtcf) :
    ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $jobtcf['image'] ?>" class="image-job-postd">
            </div>
            <div>
                <?php
                if ($admin == 1) { ?>
                    <div class=" col-12 text-end mt-1 mb-3">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $jobtcf['contentId']]) ?>" target="_blank">Edit</a>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-10 text-shape">
                <?= $jobtcf['title'] ?> <br>
                <?= $jobtcf['detail'] ?> <br>
                <button type="button" class="btn btn-primary Explore-Job"><?= $jobtcf['detail2'] ?></button>
            </div>
    <?php

            $i++;
        endforeach;
    }
    ?>
</div>