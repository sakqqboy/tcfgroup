<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Carousel;
use yii\rbac\Item;

$this->title = 'Career';
?>

<div class="col-12" id="career-part1">
    <?= $this->render('part1', [
        "career" => $career,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="career-part2">
    <?= $this->render('part2', [
        "future" => $future,
        "learnmore" => $learnmore,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="career-part3">
    <?= $this->render('part3', [
        "explore" => $explore,
        "apply" => $apply,
        "professional" => $professional,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="career-part4">
    <?= $this->render('part4', [
        "culture" => $culture,
        "video" => $video,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="career-part5">
    <?= $this->render('part5', [
        "show" => $show,
        "discovercountry" => $discovercountry,
        "incountry" => $incountry,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="career-part6">
    <?= $this->render('part6', [
        "show" => $show,
        "badge" => $badge,
        "card" => $card,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="career-part7">
    <?= $this->render('part7', [
        "footercontact" => $footercontact,
        "admin" => $admin,
    ]) ?>
</div>