<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'contact';
?>

<div class="col-12" id="contactus-part1">
    <?= $this->render('part1', [
        "contact" => $contact,
        "contactContent" => $contactContent,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="contactus-part2">
    <?= $this->render('part2', [
        "disclaimer" => $disclaimer,
        "disclaimerContent" => $disclaimerContent,
        "admin" => $admin,
    ]) ?>
</div>

<div class="col-12" id="contactus-part3">
    <?= $this->render('part3', [
        "footercontact" => $footercontact,
        "footercontactContent" => $footercontactContent,
        "admin" => $admin,
    ]) ?>
</div>