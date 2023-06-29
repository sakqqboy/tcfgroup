<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'Philosophy';
?>



<div class="col-12 text-philosophy">
    <?php
    if (isset($pagemain) && count($pagemain) > 0) {
        $i = 0;
        foreach ($pagemain as $l) :

    ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $l['image'] ?>" class="image-philosophy">
            </div>
            <div class="offset-1 col-10 text-home">
                <?= $l['title'] ?>
            </div>
            <div class="offset-1 col-10  text-box-one">
                <?= $l['detail'] ?>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end edit-content">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $l['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>


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

<div class="col-12 pr12 mt-50">
    <div class="row">
        <?php
        if (isset($work) && count($work) > 0) {
            $i = 0;
            foreach ($work as $we) :
        ?>
                <div class="col-lg-6 col-md-6 col-12 mt-50">
                    <p class="Why-We-Work"> <?= $we['title'] ?> <img src="<?= Path::backendUrl() . $we['image'] ?>" style="width: 60px;"></p>
                    <p class="everyone"><?= $we['detail'] ?> </p>
                    <p class="YASUNARI"><?= $we['detail2'] ?></p>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <?php
        if (isset($playshot1) && count($playshot1) > 0) {
            $i = 0;
            foreach ($playshot1 as $shot) :
        ?>
                <div class="col-lg-6 col-md-6  col-12 mt-50 text-center">
                    <div class="col-12">
                        <img src="<?= Path::backendUrl() . $shot['image'] ?>" class="image-screenshot1">
                    </div>
                    <div class="col-12">
                        <span class="badge bg-primary image-BG1"> <a href="#" class="no-underline4"> <i class="fa fa-play-circle link-list" aria-hidden="true"></i> <?= $shot['title'] ?></a></span>
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
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $shot['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
        ?>
    </div>
</div>


<div class="col-12 pr12 mt-50">
    <div class="row">
        <?php
        if (isset($playshot2) && count($playshot2) > 0) {
            $i = 0;
            foreach ($playshot2 as $hs) :
        ?>
                <div class="col-lg-6 col-md-6 col-12 mt-50 text-center">
                    <div class="col-12">
                        <img src="<?= Path::backendUrl() . $hs['image'] ?>" class="image-screenshot2">
                    </div>
                    <div class="col-12">
                        <span class="badge bg-primary image-BG2"> <a href="#" class="no-underline4"> <i class="fa fa-play-circle link-list" aria-hidden="true"></i> <?= $hs['title'] ?></a></span>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <?php
        if (isset($give) && count($give) > 0) {
            $i = 0;
            foreach ($give as $gi) :
        ?>
                <div class="col-lg-6 col-md-6 col-12 mt-50">
                    <p class="Why-We-Work"><img src="<?= Path::backendUrl() ?>image/icon2.png" style="width: 60px;">
                        <?= $gi['title'] ?></p>
                    <p class="People"><?= $gi['detail'] ?></p>
                    <p class="TOKYO"><?= $gi['detail2'] ?></p>
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
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $gi['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>



<div class="col-12 pr12 mt-50">
    <?php
    ?>
    <div class="row">
        <?php
        if (isset($success) && count($success) > 0) {
            $i = 0;
            foreach ($success as $suc) :
        ?>
                <div class="col-lg-6 col-md-6  col-12 mt-50">
                    <p class="Why-We-Work"> <?= $suc['title'] ?><img src="<?= Path::backendUrl() . $suc['image'] ?>" style="width: 60px;"></p>
                    <p class="everyone"><?= $suc['detail'] ?></p>
                    <p class="everyone"><?= $suc['detail2'] ?></p>
                    <p class="everyone"><?= $suc['detail3'] ?></p>
                    <p class="everyone"> <?= $suc['detail4'] ?></p>
                    <p class="YASUNARI"><?= $suc['detail5'] ?></p>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <?php
        if (isset($playshot3) && count($playshot3) > 0) {
            $i = 0;
            foreach ($playshot3 as $or) :
        ?>
                <div class="col-lg-6 col-md-6  col-12 mt-50 text-center">
                    <div class="col-12">
                        <img src="<?= Path::backendUrl() . $or['image'] ?>" class="image-screenshot1">
                    </div>
                    <div class="col-12">
                        <span class="badge bg-primary image-BG1"> <a href="#" class="no-underline4"> <i class="fa fa-play-circle link-list" aria-hidden="true"></i> <?= $or['title'] ?></a> </span>
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
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $or['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>


<div class="col-12 pr12 mt-50">
    <div class="row">
        <?php
        if (isset($playshot4) && count($playshot4) > 0) {
            $i = 0;
            foreach ($playshot4 as $ly) :
        ?>
                <div class="col-lg-6 col-md-6 col-12  mt-50 text-center">
                    <div class="col-12">
                        <img src="<?= Path::backendUrl() . $ly['image'] ?>" class="image-screenshot2">
                    </div>
                    <div class="col-12">
                        <span class="badge bg-primary image-BG2"> <a href="#" class="no-underline4"> <i class="fa fa-play-circle link-list" aria-hidden="true"></i> <?= $ly['title'] ?></a></span>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <?php
        if (isset($gratitude) && count($gratitude) > 0) {
            $i = 0;
            foreach ($gratitude as $ti) :
        ?>
                <div class="col-lg-6 col-md-6 col-12 mt-50">
                    <p class="Why-We-Work"><img src="<?= Path::backendUrl() ?>image/icon4.png" style="width: 60px;">
                        <?= $ti['title'] ?></p>
                    <p class="People"><?= $ti['detail'] ?></p>
                    <p class="TOKYO"><?= $ti['detail2'] ?></p>
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
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ti['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>