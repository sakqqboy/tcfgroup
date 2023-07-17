<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12">
    <?php
    if (isset($future) && count($future) > 0) {
        $i = 0;
        foreach ($future as $the) :
    ?>
    <div class="col-12  text-future">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $the['title'] ?>
    </div>
    <div class="row">
        <div class="col-7">
            <img src="<?= Path::backendUrl() . $the['image'] ?>" class="image-code">
        </div>
        <div class="col-5">
            <div class="card card-title1">
                <div class="col-12">
                    <div class="card-body">
                        <div class="col-12">
                            <h5 class="card-title-home"><?= $the['detail'] ?></h5>
                        </div>
                        <div class="col-12">
                            <p class="title1"><?= $the['detail2'] ?></p>
                        </div>
                        <div class="col-12">
                            <p class="title2"> <?= $the['detail3'] ?> </p>
                        </div>
                        <div class="col-12">
                            <div class="title3">
                                <a href="#"><?= $the['detail4'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
    <?php
    if ($admin == 1) { ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $the['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>

<div class="col-12 pr12">
    <?php
    if (isset($learnmore) && count($learnmore) > 0) {
        $i = 0;
        foreach ($learnmore as $more) :
    ?>
    <div class="row">
        <div class="col-5">
            <div class="card card-title2">
                <div class="card-body">
                    <div class="col-12">
                        <h5 class="card-title-page"> <?= $more['title'] ?></h5>
                    </div>
                    <div class="col-12">
                        <p class="title4"><?= $more['detail'] ?></p>
                    </div>
                    <div class="col-12">
                        <p class="title5"> <?= $more['detail2'] ?> </p>
                    </div>
                    <div class="col-12">
                        <div class="title6">
                            <a href="#"><?= $more['detail3'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <img src="<?= Path::backendUrl() . $more['image'] ?>" class="image-philosophy">
        </div>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
    <?php
    if ($admin == 1) { ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $more['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>