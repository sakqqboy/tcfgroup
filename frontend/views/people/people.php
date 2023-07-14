<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'People';
?>

<div class="col-12" id="people-part1">
    <?= $this->render('part1', [
        "people" => $people,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="people-part2">
    <?= $this->render('part2', [
        "kuno" => $kuno,
        "textmain" => $textmain,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="people-part3">
    <?= $this->render('part3', [
        "global" => $global,
        "insider" => $insider,
        "global" => $global,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="people-part4">
    <?= $this->render('part4', [
        "global" => $global,
        "personnel" => $personnel,
        "doctrines" => $doctrines,
        "admin" => $admin,
    ]) ?>
</div>