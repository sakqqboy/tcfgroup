<?php
    $this -> title = 'Update Team Position';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'member/default/save-member-type'

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE MEMBER TYPE<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    TYPE<br>
                    <input type="text" name="membertypename" class="font-input form-control col-lg-6" value="<?= $membertype -> memberTypeName ?>"required>
                </div>
                <input type="hidden" name="memberTypeId" value="<?= $membertype -> memberTypeId ?>">
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'member/default/update-member-type'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>