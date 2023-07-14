<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'Philosophy';
?>

<div class="col-12" id="philosophy-part1">
    <?= $this->render('part1', [
        "pagemain" => $pagemain,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="philosophy-part2">
    <?= $this->render('part2', [
        "pagemain" => $pagemain,
        "philosophy" => $philosophy,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="philosophy-part3">
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