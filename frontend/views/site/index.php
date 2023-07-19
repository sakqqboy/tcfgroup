<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;
use yii\bootstrap5\Carousel;

$this->title = 'TCFGROUP';
?>

<?php
$isShow2 = Part::IsShow2('admin-part1');
?>
<div class="col-12" id="admin-part1"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">

    <?= $this->render('admin-part1', [
        "banners" => $banners,
        "index" => $index,
        "admin" => $admin,
        "isShow2" => $isShow2
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('admin-part2');
?>
<div class="col-12" id="admin-part2"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-part2"
                onchange="javascript:showContent('admin-part2')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-admin-part2">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('admin-part2', [
        "country" => $country,
        "branch" => $branch,
        "pp" => $pp,
        "admin" => $admin,
        "n" => $n,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('admin-part3');
?>
<div class="col-12" id="admin-part3"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12 mt-2">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-part3"
                onchange="javascript:showContent('admin-part3')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-admin-part3">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('admin-part3', [
        "titleservice" => $titleservice,
        "sertitle" => $sertitle,
        "company" => $company,
        "c" => $c,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('admin-part4');
?>
<div class="col-12" id="admin-part4"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12 mt-2">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-part4"
                onchange="javascript:showContent('admin-part4')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-admin-part4">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('admin-part4', [
        "business" => $business,
        "d" => $d,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('admin-part5');
?>
<div class="col-12" id="admin-part5"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12 mt-2">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-part5"
                onchange="javascript:showContent('admin-part5')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-admin-part5">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('admin-part5', [
        "society" => $society,
        "e" => $e,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('admin-part6');
?>
<div class="col-12" id="admin-part6"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12 mt-2">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-part6"
                onchange="javascript:showContent('admin-part6')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-admin-part6">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('admin-part6', [
        "about" => $about,
        "f" => $f,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('admin-part7');
?>
<div class="col-12" id="admin-part7"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12 mt-2">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-admin-part7"
                onchange="javascript:showContent('admin-part7')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-admin-part7">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('admin-part7', [
        "subtopic" => $subtopic,
        "subtopicDetail" => $subtopicDetail,
        "dropdown" => $dropdown,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="admin-part8">
    <?= $this->render('admin-part8', [
        "footer" => $footer,
    ]) ?>
</div>