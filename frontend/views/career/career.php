<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;
use yii\bootstrap5\Carousel;
use yii\rbac\Item;

$this->title = 'Career';
?>

<?php
$isShow2 = Part::IsShow2('career-part1');
?>
<div class="col-12" id="career-part1" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">

    <?= $this->render('part1', [
        "career" => $career,
        "admin" => $admin,
        "isShow2" => $isShow2,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('career-part2');
?>
<div class="col-12" id="career-part2" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch" style="margin-bottom:-320px;margin-top:280px;position:relative;">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-career-part2" onchange="javascript:showContent('career-part2')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-career-part2">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part2', [
        "future" => $future,
        "learnmore" => $learnmore,
        "admin" => $admin,

    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('career-part3');
?>
<div class="col-12" id="career-part3" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-career-part3" onchange="javascript:showContent('career-part3')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-career-part3">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part3', [
        "explore" => $explore,
        "apply" => $apply,
        "professional" => $professional,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('career-part4');
?>
<div class="col-12" id="career-part4" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-career-part4" onchange="javascript:showContent('career-part4')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-career-part4">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part4', [
        "culture" => $culture,
        "video" => $video,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('career-part5');
?>
<div class="col-12" id="career-part5" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-career-part5" onchange="javascript:showContent('career-part5')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-career-part5">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part5', [
        "show" => $show,
        "discovercountry" => $discovercountry,
        "incountry" => $incountry,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('career-part6');
?>
<div class="col-12" id="career-part6" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-career-part6" onchange="javascript:showContent('career-part6')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-career-part6">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part6', [
        "show" => $show,
        "badge" => $badge,
        "card" => $card,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('career-part7');
?>
<div class="col-12" id="career-part7" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-career-part7" onchange="javascript:showContent('career-part7')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>" <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-career-part7">Show</label>
            </div>
        </div>
    <?php
    }
    ?>
    <?= $this->render('part7', [
        "footercontact" => $footercontact,
        "admin" => $admin,
    ]) ?>
</div>