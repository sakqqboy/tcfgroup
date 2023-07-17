<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12 mt-50 links-taxas">
    <div class="row pr-20">
        <?php
        if (isset($taxassessment1) && count($taxassessment1) > 0) {
            $i = 0;
            foreach ($taxassessment1  as  $tax) :
                if ($i < 4) {

        ?>
                    <div class="col-3">
                        <div class="col-12">
                            <a href="<?= Yii::$app->homeUrl . $tax['url'] ?>"> <img src="<?= Path::backendUrl() . $tax['image'] ?>" class="img-2"></a>
                        </div>
                        <p class="title-Human4"> <?= $tax['title'] ?></p>
                        <p class="title-1"> <?= $tax['detail'] ?></p>
                        <p class="title-2"><?= $tax['detail2'] ?></p>
                    </div>

        <?php
                }
                $i++;
            endforeach;
        }
        ?>
    </div>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) { ?>
        <div class=" col-12 text-end mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $tax['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
        </div>
    <?php
    }
    ?>
</div>