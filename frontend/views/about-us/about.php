<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'About Us';
?>

<?php
    $isShow2 = Part::IsShow2('aboutus-part1');
?>
<div class="col-12" id="aboutus-part1" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part1" onchange="javascript:showContent('aboutus-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutus-part1">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part1', [
        "vision" => $vision,
        "visionContent" => $visionContent,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('aboutus-part2');
?>
<div class="col-12" id="aboutus-part2" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part2" onchange="javascript:showContent('aboutus-part2')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutus-part2">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part2', [
        "existence" => $existence,
        "existenceContent" => $existenceContent,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('aboutus-part3');
?>
<div class="col-12" id="aboutus-part3" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part3" onchange="javascript:showContent('aboutus-part3')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutus-part3">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part3', [
        "strategy" => $strategy,
        "strategyContent" => $strategyContent,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('aboutus-part4');
?>
<div class="col-12" id="aboutus-part4" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part4" onchange="javascript:showContent('aboutus-part4')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutus-part4">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part4', [
        "should" => $should,
        "shouldContent" => $shouldContent,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('aboutus-part5');
?>
<div class="col-12" id="aboutus-part5" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part5" onchange="javascript:showContent('aboutus-part5')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutus-part5">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part5', [
        "consultinggroup" => $consultinggroup,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('aboutus-part6');
?>
<div class="col-12" id="aboutus-part6" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part6" onchange="javascript:showContent('aboutus-part6')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutus-part6">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part6', [
        "footer" => $footer,
        "footerContent" => $footerContent,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('aboutus-part7');
?>
<div class="col-12" id="aboutus-part7" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-aboutus-part7" onchange="javascript:showContent('aboutus-part7')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-aboutus-part7">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part7', [
        "footercontact" => $footercontact,
        "ftContact" => $ftContact,
        "admin" => $admin,
    ]) ?>
</div>