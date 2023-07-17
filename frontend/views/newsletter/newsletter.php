<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'newsletter';
?>
<div class="col-12" id="newsletter-part1">
    <?= $this->render('part1', [
        "newsletter" => $newsletter,
        "new" => $new,
        "userInThisBranch" => $userInThisBranch,
        "canEdit" => $canEdit,
        "branchName" => $branchName,
    ]) ?>
</div>

<div class="col-12" id="newsletter-part2">
    <?= $this->render('part2', [
    "tp" => $tp,
    "topic" => $topic,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>
</div>

<div class="col-12" id="newsletter-part3">
    <?= $this->render('part3', [
    "import" => $import,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>
</div>

<div class="col-12" id="newsletter-part4">
    <?= $this->render('part4', [
    "olderposts" => $olderposts,
    "asset" => $asset,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>
</div>

<div class="col-12" id="newsletter-part5">
    <?= $this->render('part5', [
    "taxassessment1" => $taxassessment1,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>
</div>

<?= $this->render('part6', [
    "taxassessment2" => $taxassessment2,
    "olderposts" => $olderposts,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>


<?= $this->render('part7', [
    "footerbangladresh" => $footerbangladresh,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>