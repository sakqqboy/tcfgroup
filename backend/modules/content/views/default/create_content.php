<?php
$this->title = 'Create Content';

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
            CREATE CONTENT<br>
        </div>

        <div class="row col-lg-10 offset-1 mt-3">
            <div class="font-topic col-lg-6 font-body h4">
                CONTENT NAME
                <input type="text" name="contentname" id="member-address" class="input-text-content font-input form-control col-lg-6">
            </div>
            <div class="font-topic col-lg-6 font-body h4">
                TITLE<br>
                <input type="text" name="title" id="member-address" class="input-text-content font-input form-control col-lg-6">
            </div>
            <div class="font-topic col-lg-12 font-body h4">
                DETAIL<br>
                <textarea class="input-text-content font-input form-control" name="detail" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>

            <div class="col-lg-12 mb-3 text-end">
                <button type="submit" class="btn btn-success font-button" href="<?= Yii::$app->homeUrl . 'content/default/create-content' ?>">Submit</button>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>