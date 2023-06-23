<?php
$this->title = 'Update Team Position';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'masterdata/team-position/save-team-position'

]); ?>


<div class="row col-lg-10 offset-1 pb-4">
    <div class="ssa col-lg-12 mt-5 bd-position">
        <div class="col-lg-12 text-center font-title">
            UPDATE TEAM POSITION<br>
        </div>

        <div class="row col-lg-10 offset-1 mt-3">
            <div class="font-topic col-lg-12 font-body h4">
                Team Position
                <input type="text" name="teampositionname" class="input-text-content font-input form-control col-lg-6"
                    value="<?= $teamposition->name ?>" required>
            </div>
            <input type="hidden" name="id" value="<?= $teamposition->id ?>">
        </div>
        <div class="col-lg-12 mb-3 text-end">
            <button type="submit" class="btn btn-warning font-button"
                href="<?= Yii::$app->homeUrl . 'masterdata/team-position/update-team-position' ?>">Update</button>
        </div>
    </div>
</div>


<?php ActiveForm::end(); ?>