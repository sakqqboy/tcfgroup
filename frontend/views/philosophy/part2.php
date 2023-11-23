<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 blackground-page-people">
    <div class="col-12 picture-text">
        <?php
        if (isset($pagemain) && count($pagemain) > 0) {
            $i = 0;
            foreach ($pagemain as $l) :

        ?>
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $l['detail2'] ?>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>

    <div class="col-12 picture-icon">
        <div class="row ">

            <?php
            if (isset($philosophy) && count($philosophy) > 0) {
                $i = 0;
                foreach ($philosophy as $m) :
                    if ($i < 4) {

            ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="<?= Path::backendUrl() . $m['image'] ?>" style="width: 90px;"> <?= $m['title'] ?>
                        </div>
            <?php
                    }
                    $i++;
                endforeach;
            }

            ?>
        </div>
        <?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end edit-content">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $m['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
        ?>
    </div>
</div>