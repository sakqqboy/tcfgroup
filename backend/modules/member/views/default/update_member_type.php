<?php
$this->title = 'Update Team Position';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'member/default/save-member-type'

]); ?>
<div class="row col-lg-10 offset-1 pb-4">
    <div class="ssa col-lg-12 mt-5 bd-position">
        <div class="col-lg-12 text-center font-title">
            UPDATE MEMBER TYPE<br>
        </div>
        <div class="row col-lg-10 offset-1 mt-3">
            <div class="font-topic col-lg-12 font-body h4">
                TYPE<br>
                <input type="text" name="membertypename" class="font-input form-control col-lg-6" value="<?= $membertype->memberTypeName ?>" required>
            </div>
            <input type="hidden" name="memberTypeId" value="<?= $membertype->memberTypeId ?>">
        </div>
        <div class="col-lg-12 mb-3 text-end">
            <button type="submit" class="btn btn-success font-button" href="<?= Yii::$app->homeUrl . 'member/default/update-member-type' ?>">Submit</button>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>