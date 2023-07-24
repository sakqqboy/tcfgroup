<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($boatimg) && count($boatimg) > 0) {
        $i = 0;
        foreach ($boatimg as $img) :
    ?>
    <img src="<?= Path::backendUrl() . $img['image'] ?>" class="image-boat-2">
    <?php
            $i++;
        endforeach;
    }
    ?>

    <?php
    if ($admin == 1 && isset($boat) && !empty($boat)) { ?>
    <div class=" col-12 text-end edit-content mt-2">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $boat['contentId']]) ?>"
            target="_blank">Edit(BG)</a>
    </div>
    <?php
    }
    ?>
</div>


<div class="col-12 pr12">
    <div class="row">
        <div class="col-12 title-all">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6 form-oftcf">
                    <?php
                    if (isset($services) && count($services) > 0) {
                        $i = 0;
                        foreach ($services as $r) :
                    ?>
                    <div class="col-12 text-the-best">
                        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $r['detail'] ?>
                    </div>
                    <?php
                            if ($admin == 1) { ?>
                    <div class=" col-12 text-end edit-content mt-2">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $r['contentId']]) ?>"
                            target="_blank">Edit</a>
                    </div>
                    <?php
                            }
                            ?>
                    <?php

                            $i++;
                        endforeach;
                    }
                    ?>
                    <?php
                    if (isset($picturegraphics) && count($picturegraphics) > 0) {
                        $i = 0;
                        foreach ($picturegraphics as $tokyo) :
                            if ($i < 3) {

                    ?>
                    <div class="col-12 mt-10 page-1">
                        <img src="<?= Path::backendUrl() . $tokyo['image'] ?>" class="image-account">
                        <?= $tokyo['title'] ?>
                    </div>
                    <div class="col-12 select-project">
                        <?= $tokyo['detail'] ?>
                    </div>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                    <?php
                    if ($admin == 1) { ?>
                    <div class=" col-12 text-end edit-content">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $tokyo['contentId']]) ?>"
                            target="_blank">Edit</a>
                    </div>
                    <?php
                    }
                    ?>



                    <div class="col-12 cal-form">
                        <?php
                        if (isset($most) && count($most) > 0) {
                            $i = 0;
                            foreach ($most as $mos) :
                        ?>
                        <div class="card form-card">
                            <?= $mos['detail'] ?> <a href="#" class="no-underline"><span class="card download">
                                    <?= $mos['detail2'] ?> <i class="fa fa-download" aria-hidden="true"></i> </a></span>
                        </div>
                        <?php
                                if ($admin == 1) { ?>
                        <div class=" col-12 text-end edit-content ml-5">
                            <a class="btn btn-warning bt-line"
                                href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $mos['contentId']]) ?>"
                                target="_blank">Edit(Download)</a>
                        </div>
                        <?php
                                }
                                ?>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                    <?php
                    if (isset($most) && count($most) > 0) {
                        $i = 0;
                        foreach ($most as $mos) :
                    ?>
                    <div class="col-12 text-form-most">
                        <?= $mos['title'] ?>
                    </div>
                    <?php
                            if ($admin == 1) { ?>
                    <div class=" col-12 text-end edit-content ml-5">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $mos['contentId']]) ?>"
                            target="_blank">Edit</a>
                    </div>
                    <?php
                            }
                            ?>
                    <?php
                            $i++;
                        endforeach;
                    }
                    ?>

                    <?php
                    if (isset($best) && count($best) > 0) {
                        $i = 0;
                        foreach ($best as $tcf) :
                            if ($i < 3) {

                    ?>
                    <div class="col-12 mt-10 page-2">
                        <img src="<?= Path::backendUrl() . $tcf['image'] ?>" class="image-account"><?= $tcf['title'] ?>
                    </div>
                    <div class="col-12 select-project-1">
                        <?= $tcf['detail'] ?>
                    </div>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                    <?php
                    if ($admin == 1) { ?>
                    <div class=" col-12 text-end edit-content">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $tcf['contentId']]) ?>"
                            target="_blank">Edit</a>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>