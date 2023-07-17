<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'People';
?>
<?php
    $isShow2 = Part::IsShow2('people-part1');
?>
<div class="col-12" id="people-part1" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-people-part1" onchange="javascript:showContent('people-part1')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-people-part1">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part1', [
        "people" => $people,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('people-part2');
?>
<div class="col-12" id="people-part2" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-people-part2" onchange="javascript:showContent('people-part2')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-people-part2">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part2', [
        "kuno" => $kuno,
        "textmain" => $textmain,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('people-part3');
?>
<div class="col-12" id="people-part3" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-people-part3" onchange="javascript:showContent('people-part3')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-people-part3">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part3', [
        "global" => $global,
        "insider" => $insider,
        "global" => $global,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('people-part4');
?>
<div class="col-12" id="people-part4" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-people-part4" onchange="javascript:showContent('people-part4')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-people-part4">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part4', [
        "global" => $global,
        "personnel" => $personnel,
        "doctrines" => $doctrines,
        "admin" => $admin,
    ]) ?>
</div>