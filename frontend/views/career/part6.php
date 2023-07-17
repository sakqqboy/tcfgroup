<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($show) && count($show) > 0) {
        $i = 0;
        foreach ($show as $sh) :
    ?>
    <div class="col-12 mt-50 title-open">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $sh['detail2'] ?>
    </div>

    <div class="col-12 pr12 mt-50 form-input">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="col-12">
                    <div class="input-group rounded from-input-search">
                        <span class="input-group-text border-0" id="search-addon">
                            <a href="#search"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </span>
                        <input type="search" class="form-control rounded" placeholder="Search for jobs or keywords"
                            aria-label="Search" aria-describedby="search-addon" />
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12 form-text">
                <?= $sh['detail3'] ?>
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
    if ($admin == 1) {
    ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $sh['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>


<div class="col-12 pr12 mt-20 form-dropdown">
    <div class="col-lg-4 col-md-6 col-12">
        <div class="row">
            <?php
            if (isset($badge) && count($badge) > 0) {
                $i = 0;
                foreach ($badge as $btc) :
                    if ($i < 3) {
            ?>
            <div class="col-4">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?= $btc['title'] ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><?= $btc['detail'] ?></a></li>
                        <li><a class="dropdown-item" href="#"><?= $btc['detail2'] ?></a></li>
                        <li><a class="dropdown-item" href="#"><?= $btc['detail3'] ?></a></li>
                    </ul>
                </div>
            </div>
            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>
        </div>
    </div>
</div>
<div>
    <?php
    if ($admin == 1) {
    ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $btc['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>


<div class="col-12 pr12 mt-50 alert-all">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <?php
                if (isset($card) && count($card) > 0) {
                    $i = 0;
                    foreach ($card as $cd) :
                        if ($i < 4) {

                ?>
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="alert alert-info">
                        <span class="badge bg-info"> <?= $cd['title'] ?></span> <span
                            class="black"><?= $cd['detail'] ?></span>
                        <p class="black-1 mt-4"><?= $cd['detail2'] ?></p>
                        <p><?= $cd['detail3'] ?></p>
                        <p><img src="<?= Path::backendUrl() ?>image/check-in.png" class="image-check-in">
                            <?= $cd['detail4'] ?></p>
                        <p class=""><?= $cd['detail5'] ?></p>
                        <div class="row">
                            <div class="col-6 button-title-see">
                                <button type="button" class="btn btn-info button-detail"><?= $cd['detail6'] ?></button>
                            </div>
                            <div class="col-6">
                                <button type="button"
                                    class="btn btn-primary button-apply-detail"><?= $cd['detail7'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div>
    <?php
    if ($admin == 1) {
    ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $cd['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>