<?php
$this->title = 'Create Team Position';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

]); ?>

<div class="row col-lg-10 offset-1 pb-4">
    <div class="ssa col-lg-12 mt-5 bd-position">
        <div class="col-lg-12 text-center font-title">
            CREATE TEAM POSITION
        </div>
        <div class="row col-lg-10 offset-1 mt-3">
            <div class="font-topic col-lg-12 font-body h4">
                Team Position
                <input type="text" name="membertypename" class="input-text-content font-input form-control col-lg-6"
                    required>
            </div>
        </div>
        <div class="col-lg-12 mb-3 text-end">
            <button type="submit" class="btnsubmit btn btn-success font-button"
                href="<?= Yii::$app->homeUrl . 'content/default/create-member-type' ?>">Submit</button>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>