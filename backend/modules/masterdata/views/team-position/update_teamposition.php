<?php
    $this -> title = 'Update Team Position';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'masterdata/team-position/save-team-position'

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE TEAMPOSITION<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    TEAMPOSITION<br>
                    <input type="text" name="teampositionname" class="font-input form-control col-lg-6" value="<?= $teamposition -> name ?>"required>
                </div>
                <input type="hidden" name="id" value="<?= $teamposition -> id ?>">
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'masterdata/team-position/update-team-position'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>