<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
    if($canEdit == 1 && $userInThisBranch == 1) {
?>
    <div class="col-12" style="margin-top: 90px; margin-bottom: -85px; position: relative;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutuscountry-part1" onchange="javascript:showContentBranch('aboutuscountry-part1', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-aboutuscountry-part1">Show</label>
        </div>
    </div>
<?php
    }
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