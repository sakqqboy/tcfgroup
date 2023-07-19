<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'Philosophy';
?>

<?php
    $isShow2 = Part::IsShow2('philosophy-part1');
?>
<div class="col-12" id="philosophy-part1" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?= $this->render('part1', [
        "pagemain" => $pagemain,
        "admin" => $admin,
        "isShow2" => $isShow2,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('philosophy-part2');
?>
<div class="col-12" id="philosophy-part2" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-philosophy-part2" onchange="javascript:showContent('philosophy-part2')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-philosophy-part2">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part2', [
        "pagemain" => $pagemain,
        "philosophy" => $philosophy,
        "admin" => $admin,
    ]) ?>
</div>

<?php
    $isShow2 = Part::IsShow2('philosophy-part3');
?>
<div class="col-12" id="philosophy-part3" style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0 ) ? 'none' : ''?>">
    <?php
        if($admin == 1) {
    ?>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switch-philosophy-part3" onchange="javascript:showContent('philosophy-part3')" value="<?= $isShow2 == 1 ? '0' : '1' ?>"  <?= $isShow2 == 1 ? 'checked' : '1' ?>>
                <label class="form-check-label" for="switch-philosophy-part3">Show</label>
            </div>
        </div>
    <?php
        }
    ?>
    <?= $this->render('part3', [
        "work" => $work,
        "playshot1" => $playshot1,
        "playshot2" => $playshot2,
        "give" => $give,
        "success" => $success,
        "playshot3" => $playshot3,
        "playshot4" => $playshot4,
        "gratitude" => $gratitude,
        "admin" => $admin,
    ]) ?>
</div>