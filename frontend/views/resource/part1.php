<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
    if($canEdit == 1 && $userInThisBranch == 1) {
?>
    <div class="col-12" style="margin-top: 90px; margin-bottom: -85px; position: relative;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-resources-part1" onchange="javascript:showContentBranch('resources-part1', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>"  <?= $isShow == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-resources-part1">Show</label>
        </div>
    </div>
<?php
    }
?>
<div class="col-12  home-contact2">
    <?php
    if (isset($bannerresource) && count($bannerresource) > 0) {
        $i = 0;
        foreach ($bannerresource  as $br) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() ?>image/img/Resources.png" class="img-Resources">
    </div>
    <div class="col-12 page-resource">
        <?= $br['title'] ?>
    </div>
    <div class="col-12 detail-resource">
        <?= $br['detail'] ?>
    </div>
    <?php
            $i++;
        endforeach;
    }
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($resource) && !empty($resource)) {
        ?>
    <div class=" col-12 text-end mt-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $resource['contentBranchId']]) ?>"
            target="_blank">Edit (<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>

    <div class="col-12 form-search-template">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-search search-resources"
                    aria-hidden="true"></i></span>
            <input type="text" class="form-control table-search" placeholder="Search forms & Templates"
                aria-label="Search forms & Templates">
        </div>
    </div>
    <div class="col-12 pr12 form-select-search">
        <div class="row">
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Bangladesh</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Department</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Type</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary txt-search"> Search</button>
            </div>
        </div>
    </div>
</div>