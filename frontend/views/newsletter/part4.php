<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12">
    <?php
    if (isset($olderposts) && count($olderposts) > 0) {
        $i = 0;
        foreach ($olderposts as $ol) :
    ?>
            <div class="col-12 title-older">
                <p><?= $ol['title'] ?></p>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>


    <div class="col-12">
        <div class="row">
            <?php
            if (isset($olderposts) && count($olderposts) > 0) {
                $i = 0;
                foreach ($olderposts as $ol) :
            ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="<?= Path::backendUrl() . $ol['image'] ?>" class="img-hunter">
                        <p class="title-Human"><?= $ol['detail'] ?></p>
                        <p class="title-Labor"><?= $ol['detail2'] ?></p>
                        <p class="title-import1"><?= $ol['detail3'] ?><a href="" class="no-underline"><span class="read-more">
                                    <?= $ol['detail4'] ?></span></p></a>

                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $ol['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
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
                <div class="row">
                    <div class="col-6 text-end">
                        <?php
                        if (isset($asset) && count($asset) > 0) {
                            $i = 0;
                            foreach ($asset as $set) :
                                if ($i < 3) {

                        ?>
                                    <div class="col-12">
                                        <p class="title-Human1 mt-30"> <?= $set['title'] ?></p>
                                        <p class="title-IAS1"> <?= $set['detail'] ?></p>
                                        <p class="title-carbon1"><?= $set['detail2'] ?> </p>
                                    </div>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-6 text-end">
                        <?php
                        if (isset($asset) && count($asset) > 0) {
                            $i = 0;
                            foreach ($asset as $set) :
                                if ($i < 3) {

                        ?>
                                    <p><img src="<?= Path::backendUrl() . $set['image'] ?>" class="img-daoudi"></p> <br>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                        <?php
                        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
                            <div class=" col-12 text-end mb-3">
                                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $set['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>