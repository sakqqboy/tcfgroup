<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use frontend\models\tokyoconsulting\Part;

$this->title = 'contact';
?>

<?php
$isShow2 = Part::IsShow2('contactus-part1');
?>
<div class="col-12" id="contactus-part1"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?= $this->render('part1', [
        "contact" => $contact,
        "contactContent" => $contactContent,
        "admin" => $admin,
        "isShow2" => $isShow2
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('contactus-part2');
?>
<div class="col-12" id="contactus-part2"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-contactus-part2"
                onchange="javascript:showContent('contactus-part2')" value="<?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-contactus-part2">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('part2', [
        "subtopic" => $subtopic,
        "subtopicDetail" => $subtopicDetail,
        "dropdown" => $dropdown,
        "admin" => $admin,
        "application" => $application,
        "app" => $app,
    ]) ?>
</div>



<?php
$isShow2 = Part::IsShow2('contactus-part3');
?>
<div class="col-12" id="contactus-part3"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-contactus-part3"
                onchange="javascript:showContent('contactus-part3')" value=" <?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-contactus-part3">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('part3', [
        "disclaimer" => $disclaimer,
        "disclaimerContent" => $disclaimerContent,
        "admin" => $admin,
    ]) ?>
</div>

<?php
$isShow2 = Part::IsShow2('contactus-part4');
?>
<div class="col-12" id="contactus-part4"
    style="opacity: <?= $isShow2 == 0 ? '0.3' : '1' ?>; display: <?= ($isShow2 == 0 && $admin == 0) ? 'none' : '' ?>">
    <?php
    if ($admin == 1) {
    ?>
    <div class="col-12">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch-contactus-part4"
                onchange="javascript:showContent('contactus-part4')" value="<?= $isShow2 == 1 ? '0' : '1' ?>"
                <?= $isShow2 == 1 ? 'checked' : '1' ?>>
            <label class="form-check-label" for="switch-contactus-part4">Show</label>
        </div>
    </div>
    <?php
    }
    ?>
    <?= $this->render('part4', [
        "footercontact" => $footercontact,
        "footercontactContent" => $footercontactContent,
        "admin" => $admin,
    ]) ?>
</div>