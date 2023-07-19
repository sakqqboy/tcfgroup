<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12">
    <div class="row">
        <input type="hidden" id="total-company" value="<?= count($company) ?>">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
            <?php
            if (isset($titleservice) && count($titleservice) > 0) {
                $i = 0;
                foreach ($titleservice  as  $sertitle) :
            ?>
                    <div class="col-lg-12 text-establish">
                        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $sertitle['title'] ?>
                    </div>
                    <?php
                    if ($admin == 1) { ?>
                        <div class=" col-12 text-end">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $sertitle['contentId']]) ?>" target="_blank">Edit</a>
                        </div>
                    <?php
                    }
                    $i++;
                endforeach;
            }
            if (isset($company) && count($company) > 0) {
                $i = 0;
                foreach ($company as $c) :
                    if ($i < 6) {

                    ?>
                        <div class="col-lg-12 Company">
                            <li onclick="javascript:showContent(<?= $i ?>)"> <?= $c['title'] ?> </li>
                        </div>

            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 show-text-home">
            <?php
            if (isset($company) && count($company) > 0) {
                $i = 0;
                foreach ($company as $c) :

            ?>
                    <div class="col-12 text-legal" style="display:<?= $i == 0 ? '' : 'none' ?>" id="content-title-<?= $i ?>">
                        <?= $c['detail'] ?>
                    </div>
                    <div class="col-12 Our pt-20" style="display:<?= $i == 0 ? '' : 'none' ?>" id="content-title2-<?= $i ?>">
                        <?= $c['detail2'] ?> <br>
                        <button type="button" class="btn btn-primary button-text5"> <?= $c['detail3'] ?></button>
                    </div>
            <?php


                    $i++;
                endforeach;
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12" style="padding-right:0px;">
            <img src="<?= Path::backendUrl() ?>image/background.png" class="img-background">
        </div>
    </div>
</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $c['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>