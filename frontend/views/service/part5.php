<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12 backgroup-submit">
    <div class="row">
        <div class="col-lg-5 col-md-6 col-12 mt-20">
            <?php
            if (isset($founder) && count($founder) > 0) {
                $i = 0;
                foreach ($founder as $o) :
            ?>
                    <div class="col-12 form-select-business mt-20">
                        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $o['title'] ?>
                    </div>
                    <div class="col-12 mt-20">
                        <img src="<?= Path::backendUrl() . $o['image'] ?>">
                    </div>
                    <div class="col-12 mt-3">
                        <p><?= $o['detail'] ?></p>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <?php
            if ($admin == 1) { ?>
                <div class=" col-12 text-end edit-content mt-2">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $o['contentId']]) ?>" target="_blank">Edit</a>
                </div>
            <?php
            }
            ?>

            <div class="col-12 mt-20">
                <div class="row">
                    <div class="col-4 mt-30">
                        <?php
                        if (isset($item) && count($item) > 0) {
                            $i = 0;
                            foreach ($item as $t) :

                        ?>
                                <p><img src="<?= Path::backendUrl() . $t['image'] ?>" style="width: 90px;"></p>
                                <?php
                                if ($admin == 1) { ?>
                                    <div class=" col-12 text-end edit-content mt-2">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $t['contentId']]) ?>" target="_blank">Edit</a>
                                    </div>
                                <?php
                                }
                                ?>
                            <?php

                                $i++;
                            endforeach;
                        }

                        if (isset($star) && count($star) > 0) {
                            $i = 0;
                            foreach ($star as $u) :
                            ?>
                                <p><img src="<?= Path::backendUrl() . $u['image'] ?>" style="width: 90px;"></p>
                                <?php
                                if ($admin == 1) { ?>
                                    <div class=" col-12 text-end edit-content mt-2">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $u['contentId']]) ?>" target="_blank">Edit</a>
                                    </div>
                                <?php
                                }
                                ?>
                            <?php
                                $i++;
                            endforeach;
                        }

                        if (isset($itemstar) && count($itemstar) > 0) {
                            $i = 0;
                            foreach ($itemstar as $v) :
                            ?>
                                <p><img src="<?= Path::backendUrl() . $v['image'] ?>" style="width: 90px;"></p>
                                <?php
                                if ($admin == 1) { ?>
                                    <div class=" col-12 text-end edit-content mt-2">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $v['contentId']]) ?>" target="_blank">Edit</a>
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
                    <div class="col-6 mt-30">
                        <?php
                        if (isset($detail) && count($detail) > 0) {
                            $i = 0;
                            foreach ($detail as $d) :

                        ?>
                                <div class="col-12 ">
                                    <p class="text-Goal"><?= $d['title'] ?></p>
                                    <p class="text-one"><?= $d['detail'] ?></p>
                                </div>
                                <?php
                                if ($admin == 1) { ?>
                                    <div class=" col-12 text-end edit-content mt-2">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $d['contentId']]) ?>" target="_blank">Edit</a>
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
                        if (isset($data) && count($data) > 0) {
                            $i = 0;
                            foreach ($data as $g) :
                        ?>
                                <p class="text-Goal"><?= $g['title'] ?></p>
                                <p class="text-one"><?= $g['detail'] ?></p>
                                <?php
                                if ($admin == 1) { ?>
                                    <div class=" col-12 text-end edit-content mt-2">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $g['contentId']]) ?>" target="_blank">Edit</a>
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
                        if (isset($drive) && count($drive) > 0) {
                            $i = 0;
                            foreach ($drive  as $w) :
                        ?>
                                <p class="text-Goal"><?= $w['title'] ?></p>
                                <p class="text-one"><?= $w['detail'] ?></p>
                                <?php
                                if ($admin == 1) { ?>
                                    <div class=" col-12 text-end edit-content mt-2">
                                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $w['contentId']]) ?>" target="_blank">Edit</a>
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
                        if (isset($button) && count($button) > 0) {
                            $i = 0;
                            foreach ($button  as $q) :
                        ?>

                                <button type="button" class="btn btn-primary"><?= $q['title'] ?></button>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 col-md-6  col-12 pr-0">
            <?php
            if (isset($button) && count($button) > 0) {
                $i = 0;
                foreach ($button as $q) :
            ?>
                    <img src="<?= Path::backendUrl() . $q['image'] ?>" class="image-Group-6">
            <?php

                    $i++;
                endforeach;
            }
            ?>

        </div>
    </div>
    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end edit-content mt-2">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $q['contentId']]) ?>" target="_blank">Edit(Button inside)</a>
        </div>
    <?php
    }
    ?>
</div>