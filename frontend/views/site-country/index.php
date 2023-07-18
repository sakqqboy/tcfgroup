<?php

/** @var yii\web\View $this */

use backend\models\tokyoconsulting\MemberHasType;
use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;
use yii\bootstrap5\Offcanvas;

$this->title = $branchName;
?>
<?php
$isShow = Part::IsShow('admin-branch-part1', $branchId);
?>
<div class="" id="admin-branch-part1" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">

    <?= $this->render('part1', [
        "bannerDetail" => $bannerDetail,
        "canEdit" => $canEdit,
        "userInThisBranch" => $userInThisBranch,
        "banner" => $banner,
        "branchName" => $branchName,
        "isShow" => $isShow
    ]) ?>


</div>

<?php
$isShow = Part::IsShow('admin-branch-part2', $branchId);
?>
<div class="col-12 pr12 mt-50" id="admin-branch-part2" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-branch-part2" onchange="javascript:showContent('admin-branch-part2')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-admin-branch-part2">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part2', [
        "topicDetail" => $topicDetail,
        "canEdit" => $canEdit,
        "userInThisBranch" => $userInThisBranch,
        "topic" => $topic,
        "branchName" => $branchName
    ]) ?>


</div>

<?php
$isShow = Part::IsShow('admin-branch-part3', $branchId);
?>
<div class="col-12 pr12 mt-50" id="admin-branch-part3" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-branch-part3" onchange="javascript:showContent('admin-branch-part3')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-admin-branch-part3">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part3', [
        "import" => $import,
        "canEdit" => $canEdit,
        "userInThisBranch" => $userInThisBranch,
        "importDetail" => $importDetail,
        "branchName" => $branchName
    ]) ?>


</div>


<?php
$isShow = Part::IsShow('admin-branch-part4', $branchId);
?>
<div class="col-12 pr12" id="admin-branch-part4" style="margin-top: 80px;opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-branch-part4" onchange="javascript:showContent('admin-branch-part4')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-admin-branch-part4">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part4', [
        "bangladresh" => $bangladresh,
        "canEdit" => $canEdit,
        "userInThisBranch" => $userInThisBranch,
        "bangladreshDetail" => $bangladreshDetail,
        "branchName" => $branchName,
        "webinar" => $webinar,
        "webinarDetail" => $webinarDetail
    ]) ?>

</div>


<?php
$isShow = Part::IsShow('admin-branch-part5', $branchId);
?>
<div class="col-12 pr12 background-site" id="admin-branch-part5" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">

    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-branch-part5" onchange="javascript:showContent('admin-branch-part5')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-admin-branch-part5">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part5', [
        "professionalDetail" => $professionalDetail,
        "canEdit" => $canEdit,
        "userInThisBranch" => $userInThisBranch,
        "professional" => $professional,
        "branchName" => $branchName,
        "webinar" => $webinar,
        "webinarDetail" => $webinarDetail
    ]) ?>
</div>
<?php
$isShow = Part::IsShow('admin-branch-part6', $branchId);
?>
<div class="col-12" id="admin-branch-part6" style="opacity: <?= $isShow == 0 ? '0.3' : '1' ?>; display: <?= ($isShow == 0 && $userInThisBranch == 0 && $canEdit == 0) ? 'none' : '' ?>">

    <?php
    if ($canEdit == 1 && $userInThisBranch == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-branch-part6" onchange="javascript:showContent('admin-branch-part6')" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-admin-branch-part6">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part6', [
        "legal" => $legal,
        "canEdit" => $canEdit,
        "userInThisBranch" => $userInThisBranch,
        "legalDetail" => $legalDetail,
        "branchName" => $branchName,
        "country" => $country,
        "webinarDetail" => $webinarDetail
    ]) ?>

</div>
<?php if (isset($footer) && count($footer) > 0) {
    $i = 0;
    foreach ($footer as $h) :
?> <div class="col-12 pr12 blue pt-20 pb-10">
            <div class="row">
                <div class="col-1g-10 col-md-10 col-12 text-update">
                    <p><?= $h['title'] ?></p>
                    <p> <?= $h['detail'] ?></p>
                </div>
                <div class="col-1g-10 col-md-10 col-12 text-project">
                    <p><?= $h['detail2'] ?></p>
                </div>
                <div class="col-lg-5 col-md-6 col-12 mt-10 input-group-form">
                    <div class="input-group flex-nowrap"> <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span> <input type="text" class="form-control input-your-email" placeholder="Your Email address" aria-label="Your Email address with two button addons"> <button class="btn btn-primary" type="button"><?= $h['detail3'] ?></button> </div> <br>
                </div>
            </div>
        </div>
        <div class="col-12 pr12">
            <div class="row">
                <div class="offset-lg-6 col-lg-6 col-12 text-center"> <img src="<?= Path::backendUrl() . $h['image'] ?>" class="image-book"> </div>
            </div>
        </div>
        </div>
<?php $i++;
    endforeach;
}
?>