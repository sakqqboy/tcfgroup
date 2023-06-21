<?php
    $this -> title = 'Create Member Type';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                CREATE MEMBER TYPE<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    Type<br>
                    <input type="text" name="membertypename" class="font-input form-control col-lg-6" required>
                </div>
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'content/default/create-member-type'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>