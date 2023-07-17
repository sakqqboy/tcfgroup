<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($national) && count($national) > 0) {
            $i = 0;
            foreach ($national  as $ni) :
                if ($i < 4) {

        ?>
        <div class="col-lg-3 col-md-6 col-12 mt-10 item-dropdown">
            <div class="btn-group">
                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= Path::backendUrl() . $ni['image'] ?>" class="img-icon"> <?= $ni['title'] ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#"><?= $ni['detail'] ?></a></li>
                    <li><a class="dropdown-item" href="#"><?= $ni['detail2'] ?></a></li>
                    <li><a class="dropdown-item" href="#"><?= $ni['detail3'] ?></a></li>
                </ul>
            </div>
        </div>
        <?php
                }
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($tio) && !empty($tio)) {
    ?>
    <div class=" col-12 text-end mt-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $tio['contentBranchId']]) ?>"
            target="_blank">Edit (<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>
</div>