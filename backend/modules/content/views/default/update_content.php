<?php
    $this -> title = 'Update Content';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'content/default/save-update'

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE CONTENT<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    CONTENT NAME<br>
                    <input type="text" name="contentname" id="member-address" class="font-input form-control col-lg-6" value="<?= $content -> contentName ?>" >
                </div>
                <div class="col-lg-12 font-body h4">
                    TITLE<br>
                    <input type="text" name="title" id="member-address" class="font-input form-control col-lg-6" value="<?= $content -> title ?>">
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL<br>
                    <textarea class="font-input form-control" name="detail"id="exampleFormControlTextarea1" rows="3"><?= $content -> detail ?></textarea> 
                </div>
                <input type="hidden" name="contentId" value="<?= $content -> contentId ?>">
                <button type="submit" class="btn btn-success font-button">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>