<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 about-country">
    <div class="row">
        <?php
        if (isset($historytokyo) && count($historytokyo) > 0) {
            $i = 0;
            foreach ($historytokyo as $has) :
        ?>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 mt-50 title-Trending">
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $has['title'] ?>
            </div>
            <div class="col-12">
                <div class="col-5 about-country1">
                    <p> <?= $has['detail'] ?></p>
                    <p> <?= $has['detail2'] ?></p>
                </div>
                <div class="col-5 title-business">
                    <p><?= $has['detail3'] ?> </p>
                    <img src="<?= Path::backendUrl() . $has['image'] ?>" class="img-11">
                </div>
            </div>
            <?php
                    if ($canEdit == 1 && $userInThisBranch == 1) { ?>
            <div class=" col-12 text-end mb-3">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $has['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
                    }
                    ?>
        </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($branches) && count($branches) > 0) {
                $i = 0;
                foreach ($branches as $ches) :
            ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $ches['image'] ?>" class="img-13">
            </div>
            <div class="col-12 text-center">
                <p> <?= $ches['title'] ?> </p>
            </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>

            <div id="carouselExampleControls" class="carousel slide mt-40" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/Bangladesh.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/thailand.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/india.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/south africa.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/japan.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/hong kong.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/combodia.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/indonesia.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/kenya.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/china.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/dubai.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/mayanmar.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/laos.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/malaysia.png" class="img-country1">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="<?= Path::backendUrl() ?>image/img/mongolia.png" class="img-country1">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col-12" style="margin-top:50px;"></div>
        </div>
        <?php
        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
        <div class=" col-12 text-end mb-3">
            <a class="btn btn-warning bt-line"
                href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $ches['contentBranchId']]) ?>"
                target="_blank">Edit(<?= $branchName ?>)</a>
        </div>
        <?php
        }
        ?>
    </div>
</div>