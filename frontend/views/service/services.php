<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;
use yii\db\ForeignKeyConstraint;

use function PHPUnit\Framework\isEmpty;

$this->title = 'services';
?>

<?php
    $isShow2 = Part::IsShow2('service-part1');
?>
<div class="col-12" id="service-part1" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?= $this->render('part1', [
        "services" => $services,
        "admin" => $admin,
        "isShow2" => $isShow2,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('service-part2');
?>
<div class="col-12" id="service-part2" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-service-part2" onchange="javascript:showContent('service-part2')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-service-part2">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part2', [
        "background" => $background,
        "bk" => $bk,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('service-part3');
?>
<div class="col-12" id="service-part3" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-service-part3" onchange="javascript:showContent('service-part3')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-service-part3">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part3', [
        "box" => $box,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('service-part4');
?>
<div class="col-12" id="service-part4" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-service-part4" onchange="javascript:showContent('service-part4')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-service-part4">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part4', [
        "services" => $services,
        "dropdown" => $dropdown,
        "countryindex2" => $countryindex2,
        "stage" => $stage,
        "taxation" => $taxation,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('service-part5');
?>
<div class="col-12" id="service-part5" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-service-part5" onchange="javascript:showContent('service-part5')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-service-part5">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part5', [
        "founder" => $founder,
        "item" => $item,
        "itemstar" => $itemstar,
        "detail" => $detail,
        "data" => $data,
        "drive" => $drive,
        "button" => $button,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('service-part6');
?>
<div class="col-12" id="service-part6" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-service-part6" onchange="javascript:showContent('service-part6')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-service-part6">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part6', [
        "boatimg" => $boatimg,
        "services" => $services,
        "picturegraphics" => $picturegraphics,
        "most" => $most,
        "best" => $best,
        "boat" => $boat,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('service-part7');
?>
<div class="col-12" id="service-part7" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-service-part7" onchange="javascript:showContent('service-part7')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-service-part7">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part7', [
        "subtopic" => $subtopic,
        "subtopicDetail" => $subtopicDetail,
        "admin" => $admin,
    ]) ?>
</div>