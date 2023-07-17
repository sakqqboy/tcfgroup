<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>



<div class="col-12 pr12 mt-20">
    <?php
    if (isset($tp) && count($tp) > 0) {
        $i = 0;
    ?>
    <div class="col-12 title-Trending">
        <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $tp['title'] ?>
    </div>
    <?php
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) { ?>
    <div class=" col-12 text-end mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $tp['contentBranchId']]) ?>"
            target="_blank">Edit(<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>
    <div class="row mt-50 procress">
        <?php
        if (isset($topic) && count($topic) > 0) {
            $i = 0;
            foreach ($topic as $tp) :
                if ($i < 6) {


        ?>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" id="content2-siteindex-<?= $i ?>"
            onmouseover="javascript:showSiteindex2(<?= $i ?>)">
            <div class="card-body">
                <div class="col-12 body-copy1"></div>
                <p class="home1"><?= $tp['title'] ?></p>
                <p class="home2"><?= $tp['detail'] ?></p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" style="display:none;"
            id="content2-siteindex2-<?= $i ?>" onmouseleave="javascript:showSiteindex1(<?= $i ?>)">
            <div class="card-body">
                <div class="col-12 body-copy"></div>
                <p class="home1-copy"><?= $tp['title'] ?></p>
                <p class="home2-copy"><?= $tp['detail'] ?></p>
            </div>
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
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $tp['contentBranchId']]) ?>"
            target="_blank">Edit(<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>
</div>