<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'webinar';
//throw new Exception(print_r($branchName,true));
?>

<div class="col-12" id="webinar-part1">
    <?= $this->render('part1', [
        "webinarvideo" => $webinarvideo,
        "detailvideo" => $detailvideo,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="webinar-part2">
    <?= $this->render('part2', [
        "bangladresh" => $bangladresh,
        "bangladreshDetail" => $bangladreshDetail,
        "webinar" => $webinar,
        "webinarDetail" => $webinarDetail,
        "register" => $register,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="webinar-part3">
    <?= $this->render('part3', [
        "webinarplaylist" => $webinarplaylist,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="webinar-part4">
    <?= $this->render('part4', [
        "player1" => $player1,
        "player2" => $player2,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="webinar-part5">
    <?= $this->render('part5') ?>
</div>

<div class="col-12" id="webinar-part6">
    <?= $this->render('part6', [
        "participants" => $participants,
        "comment" => $comment,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="webinar-part7">
    <?= $this->render('part7', [
        "meet" => $meet,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="webinar-part8">
    <?= $this->render('part8', [
        "freedetail" => $freedetail,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>