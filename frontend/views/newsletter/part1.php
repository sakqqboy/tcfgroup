<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>


<div class="col-12">
    <?php
    if (isset($newsletter) && count($newsletter) > 0) {
        $i = 0;
        foreach ($newsletter as $new) :
    ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $new['image']  ?>" class="img-1">
            </div>
            <div class="col-12 sletter-home">
                <div class="col-12 pl-40 sletter-text-Effective">
                    <p><?= $new['title'] ?></p>
                </div>
                <div class="col-12 pl-40 sletter-text-Resolving">
                    <?= $new['detail'] ?>
                </div>
                <div class="col-6 pl-40  sletter-text-corporate">
                    <?= $new['detail2'] ?><a href="#read more" class="no-underline-new"><span class="read-more1">
                            <?= $new['detail7'] ?> </span></a>
                    <p class="moretext"> With net zero carbon, </p>
                </div>
                <div class="col-12 pr12 btn-newsletter-signup">
                    <div class="row">
                        <div class="col-5 mt-30">
                            <button type="button" class="btn btn-primary button-newsletter-explore"><i class="fa fa-cloud-download" aria-hidden="true"></i> <?= $new['detail3'] ?></button>
                            <button type="button" class="btn btn-primary button-newsletter-right"> <?= $new['detail4'] ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            <p class="title-our-newsletter"> <a href="#sing-up"><span class="sign-up">
                                        <?= $new['detail5'] ?></span></a> <?= $new['detail6'] ?></p>
                        </div>
                        <div class="col-10 sletter-icon">
                            <a href="" class="no-underline"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endforeach;
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) { ?>
        <div class=" col-12 text-end mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $new['contentBranchId']]) ?>" target="_blank">Edit(<?= $branchName ?>)</a>
        </div>
    <?php
    }
    ?>
</div>