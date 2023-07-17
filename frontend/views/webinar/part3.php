<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

<div class="col-12 pr12 mt-50">
    <div class="row">
        <?php
        if (isset($webinarplaylist) && count($webinarplaylist) > 0) {
            $i = 0;
            foreach ($webinarplaylist  as $playlist) :
        ?>
                <div class="col-lg-4 col-md-6 col-12 title-Trending">
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $playlist['title'] ?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 title-always">
                    <?= $playlist['detail'] ?>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
        <div class="col-12 text-end mt-3 mb-3">
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($playlist["contentBranchId"])) {
            ?>
                <span class="col-12 text-end">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $playlist['contentBranchId']]) ?>" target="_blank">Edit (TP)(<?= $branchName ?>)</a>
                </span>
            <?php
            }
            ?>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($playlist["contentBranchId"])) {
            ?>
                <span class="col-12 text-end">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $playlist['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
                </span>
            <?php
            }
            ?>
        </div>
    </div>

    <form class="row g-3 mt-50 form-search1">
        <div class="col-4">
            <input type="search" class="form-control" id="inputsearch" placeholder="Search, Business Videos">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3"><i class="fa fa-search" aria-hidden="true">
                    Search</i></button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 form-sort">
            <select class="form-select" aria-label="Default select example">
                <option selected> Sort by: Latest</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </form>
</div>