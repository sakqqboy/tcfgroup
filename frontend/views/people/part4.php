<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 title-culture">
    <?php
    if (isset($global) && count($global) > 0) {
        $i = 0;
        foreach ($global as $meetting) :
    ?>
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $meetting['detail2'] ?>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($personnel) && count($personnel) > 0) {
            $i = 0;
            foreach ($personnel as $person) :
        ?>
                <div class="col-7">
                    <img src="<?= Path::backendUrl() . $person['image'] ?>" class="image-code">
                </div>
                <div class="col-5">
                    <div class="card card-title1">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="col-12">
                                    <h5 class="card-title-home"><?= $person['title'] ?></h5>
                                </div>
                                <div class="col-12">
                                    <p class="title1"><?= $person['detail'] ?></p>
                                </div>
                                <div class="col-12">
                                    <p class="title2"> <?= $person['detail2'] ?> </p>
                                </div>
                                <div class="col-12 title3">
                                    <a href="#"> <?= $person['detail3'] ?></a>
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
</div>
<div>
    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $person['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($doctrines) && count($doctrines) > 0) {
            $i = 0;
            foreach ($doctrines as $work) :

        ?>
                <div class="col-5">
                    <div class="card card-title2">
                        <div class="card-body">
                            <div class="col-12">
                                <h5 class="card-title-page"><?= $work['title'] ?></h5>
                            </div>
                            <div class="col-12">
                                <p class="title4"><?= $work['detail'] ?></p>
                            </div>
                            <div class="col-12">
                                <p class="title5"> <?= $work['detail2'] ?> </p>
                            </div>
                            <div class="col-12 title6">
                                <a href="#"><?= $work['detail3'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <img src="<?= Path::backendUrl() . $work['image'] ?>" class="image-philosophy">
                </div>
        <?php

                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div>
    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $work['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>

<div class="col-12 stye-people"></div>