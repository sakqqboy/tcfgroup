<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12 mt-50 links-taxas">
    <div class="row pr-20">
        <?php
        if (isset($taxassessment2) && count($taxassessment2) > 0) {
            $i = 0;
            foreach ($taxassessment2  as  $ment) :
                if ($i < 4) {

        ?>
        <div class="col-3">
            <div class="col-12">
                <a href="<?= Yii::$app->homeUrl . $ment['url'] ?>"> <img
                        src="<?= Path::backendUrl() . $ment['image'] ?>" class="img-2"></a>
            </div>
            <p class="title-Human4"> <?= $ment['title'] ?></p>
            <p class="title-1"> <?= $ment['detail'] ?></p>
            <p class="title-2"><?= $ment['detail2'] ?></p>
        </div>

        <?php
                }
                $i++;
            endforeach;
        }
        ?>
        <div class="col-12 text-center mt-50">
            <?php
            if (isset($olderposts) && count($olderposts) > 0) {
                $i = 0;
                foreach ($olderposts as $ol) :
            ?>
            <button type="button" class="btn btn-primary"> <?= $ol['detail5'] ?> <i class="fa fa-arrow-circle-right"
                    aria-hidden="true"></i></button>
            <?php

                    $i++;
                endforeach;
            }
            ?>
        </div>
        <?php
        if ($canEdit == 1 && $userInThisBranch == 1) { ?>
        <div class=" col-12 text-end mb-3">
            <a class="btn btn-warning bt-line"
                href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $ment['contentBranchId']]) ?>"
                target="_blank">Edit(<?= $branchName ?>)</a>
        </div>
        <?php
        }
        ?>
    </div>
</div>