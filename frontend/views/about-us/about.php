<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'About Us';
?>

<div class="col-12" id="aboutus-part1">
    <?= $this->render('part1', [
        "vision" => $vision,
        "visionContent" => $visionContent,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="aboutus-part2">
    <?= $this->render('part2', [
        "existence" => $existence,
        "existenceContent" => $existenceContent,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="aboutus-part3">
    <?= $this->render('part3', [
        "strategy" => $strategy,
        "strategyContent" => $strategyContent,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="aboutus-part4">
    <?= $this->render('part4', [
        "should" => $should,
        "shouldContent" => $shouldContent,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="aboutus-part5">
    <?= $this->render('part5', [
        "consultinggroup" => $consultinggroup,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="aboutus-part6">
    <?= $this->render('part6', [
        "footer" => $footer,
        "footerContent" => $footerContent,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="aboutus-part7">
    <?= $this->render('part7', [
        "footercontact" => $footercontact,
        "ftContact" => $ftContact,
        "admin" => $admin,
    ]) ?>
</div>