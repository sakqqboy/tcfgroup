<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
    if($admin == 1) {
?>
    <div class="col-12" style="margin-top: 90px; margin-bottom: -85px; position: relative;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-contactus-part1" onchange="javascript:showContent('contactus-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-contactus-part1">Show</label>
        </div>
    </div>
<?php
    }
?>
<div class="col-12">
    <?php
    if (isset($contact) && count($contact) > 0) {
        $i = 0;
        foreach ($contact as $tact) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $tact['image'] ?>" class="image-Google-Forms-Job">
    </div>

    <div class="col-12 line-back">
        <a href="#" class="no-underline"><i class="fa fa-chevron-left" aria-hidden="true"> <?= $tact['title'] ?></i></a>
    </div>

    <div class="col-12 name-text-applying">
        <?= $tact['detail'] ?><span class="txt-cousultant"><?= $tact['detail2'] ?></span>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $contactContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>

<div class="col-12 pr12 form-range2">
    <div class="row">
        <div class="col-12">
            <label for="customRange2" class="form-label"></label>
            <input type="range" class="form-range" min="0" max="4" id="customRange2">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <p class="form-font-small"> My Information</p>
        </div>
        <div class="col-3 fr-1">
            <p class="form-font-small"> My Experience</p>
        </div>
        <div class="col-3 fr-2">
            <p class="form-font-small"> Application Question</p>
        </div>
        <div class="col-2 fr-3">
            <p class="form-font-small"> Attechments</p>
        </div>
        <div class="col-1 fr-4">
            <p class="form-font-small"> Review & Submit</p>
        </div>
    </div>
</div>