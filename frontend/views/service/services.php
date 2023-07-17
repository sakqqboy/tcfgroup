<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use yii\db\ForeignKeyConstraint;

use function PHPUnit\Framework\isEmpty;

$this->title = 'services';
?>

<div class="col-12" id="service-part1">
    <?= $this->render('part1', [
        "services" => $services,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="service-part2">
    <?= $this->render('part2', [
        "background" => $background,
        "bk" => $bk,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="service-part3">
    <?= $this->render('part3', [
        "box" => $box,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="service-part4">
    <?= $this->render('part4', [
        "services" => $services,
        "dropdown" => $dropdown,
        "countryindex2" => $countryindex2,
        "stage" => $stage,
        "taxation" => $taxation,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="service-part5">
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

<div class="col-12" id="service-part6">
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

<div class="col-12" id="service-part7">
    <?= $this->render('part7', [
        "subtopic" => $subtopic,
        "subtopicDetail" => $subtopicDetail,
        "admin" => $admin,
    ]) ?>
</div>