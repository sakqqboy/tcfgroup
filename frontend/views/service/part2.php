<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 background-home">
    <div class=" col-12 home-form pt-5">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $bk['title'] ?>
    </div>
    <?php
    if (isset($background) && count($background) > 0) { ?>
    <input type="hidden" value="<?= count($background) ?>" id="total-background">
    <?php
        $i = 1;
        foreach ($background as $bg) :

        ?>

    <div class="row" style="display: <?= $i == 1 ? '' : 'none' ?>;" id="background-<?= $i ?>">

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
            <div class="col-lg-12 home-form-one">
                <p> <?= $bg['title'] ?></p>
                <p> <?= $bg['detail'] ?></p>
                <p> <?= $bg['detail2'] ?></p>
            </div>
            <div class="col-12 text-end mt-30">
                <button type="button" id="prev" class="btn btn-outline-dark"
                    onclick="javascript:previousContent(<?= $i ?>)"><i class="fa fa-angle-left" aria-hidden="true"></i>
                </button>
                <button type="button" id="next" class="btn btn-outline-dark"
                    onclick="javascript:nextContent(<?= $i ?>)"><i class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12 show-text-home">
            <div class="col-12 pl-20 home-two">
                <p> <?= $bg['detail3'] ?></p>
                <p><?= $bg['detail4'] ?></p>
            </div>
            <div class="col-12 pt-20 pl-20 form-two">
                <i class="fa fa-arrows-alt arrows-icon" aria-hidden="true"></i> <?= $bg['detail5'] ?>
            </div>
            <div class="col-12 pt-20 pl-20 form-tree">
                <p> <?= $bg['detail6'] ?></p>
                <p><?= $bg['detail7'] ?></p>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img src="<?= Path::backendUrl() . $bg['image'] ?>" class="img-tree">
        </div>
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
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $bk['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>