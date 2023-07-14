<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($bannerabout) && count($bannerabout) > 0) {
        $i = 0;
        foreach ($bannerabout as $abo) :
    ?>
    <img src="<?= Path::backendUrl() . $abo['image'] ?>" class="img-Grow-torgther">
    <div class="col-12 page-about2">
        <?= $abo['title'] ?>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) { ?>
    <div class=" col-12 text-end mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $abo['contentBranchId']]) ?>"
            target="_blank">Edit(<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>
</div>