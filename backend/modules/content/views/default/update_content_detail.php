<?php
$this->title = 'Update Content Detail';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'content/default/save-update-detail'

]); ?>
<div class="row mt-5">
    <div class="col-lg-12 border border-dark bd-position">
        <div class="col-lg-12 text-center font-title">
            UPDATE CONTENT<br>
        </div>
        <div class="padding">
            <div class="col-lg-12 font-body h4">
                TITLE<br>
                <input type="text" name="title" id="member-address" class="font-input form-control col-lg-6" value="<?= $contentDetail->title ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                DETAIL 1<br>
                <textarea class="font-input form-control" name="detail1" id="exampleFormControlTextarea1" rows="3"><?= $contentDetail->detail ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                DETAIL 2<br>
                <textarea class="font-input form-control" name="detail2" id="exampleFormControlTextarea1" rows="3"><?= $contentDetail->detail2 ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                DETAIL 3<br>
                <textarea class="font-input form-control" name="detail3" id="exampleFormControlTextarea1" rows="3"><?= $contentDetail->detail3 ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                DETAIL 4<br>
                <textarea class="font-input form-control" name="detail4" id="exampleFormControlTextarea1" rows="3"><?= $contentDetail->detail4 ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                DETAIL 5<br>
                <textarea class="font-input form-control" name="detail5" id="exampleFormControlTextarea1" rows="3"><?= $contentDetail->detail5 ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                DETAIL 6<br>
                <textarea class="font-input form-control" name="detail6" id="exampleFormControlTextarea1" rows="3"><?= $contentDetail->detail6 ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                DETAIL 7<br>
                <textarea class="font-input form-control" name="detail7" id="exampleFormControlTextarea1" rows="3"><?= $contentDetail->detail7 ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                URL<br>
                <input type="text" name="url" id="member-address" class="font-input form-control col-lg-6" value="<?= $contentDetail->url ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                IMAGE<br>
                <img class="img-update" src="<?= Yii::$app->homeUrl . $contentDetail['image'] ?>">
                <input type="file" name="image" class="font-input col-lg-6 mt-3" name="image" value="<?= $contentDetail->image ?>">
            </div>
            <input type="hidden" name="contentDetailId" value="<?= $contentDetail->contentDetailId ?>">
            <button type="submit" class="btn btn-warning font-button text-end">Update</button>
            <div class="col-lg-12">
                <br>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>