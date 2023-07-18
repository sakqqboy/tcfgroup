<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
    if($admin == 1) {
?>
    <div class="col-12" style="margin-top: 90px;">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-people-part1" onchange="javascript:showContent('people-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-people-part1">Show</label>
        </div>
    </div>
<?php
    }
?>
<div class="col-12">
    <?php
    if (isset($people) && count($people) > 0) {
        foreach ($people as $at) :

    ?>
    <img src="<?= Path::backendUrl() . $at['image'] ?>" class="image-working">
    <div class="col-12 title-At">
        <?= $at['title'] ?>
        <?= $at['detail'] ?>
    </div>
    <div class="col-10 text-center form-data-block">
        <div class="col-12">
            <?= $at['detail2'] ?>
        </div>
    </div>
    <?php

        endforeach;
    }
    ?>
</div>
<div>
    <?php
        if ($admin == 1) { ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $at['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
        }
    ?>
</div>