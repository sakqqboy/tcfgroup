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
<div class="row mt-2">
    <div class="topicbor col-lg-12 bd-position mt-4">
        <div class="col-lg-12 text-center font-title">
            Update Content Detail<br>
        </div>
        <div class="row col-lg-10 offset-1">
            <div class=" col-lg-6 offset-3 font-body h4">
                TITLE<br>
                <input type="text" name="title" id="member-address" class="title font-input form-control" value="<?= $contentDetail->title ?>">
            </div>
            <div class="col-lg-6 font-body h4">
                DETAIL 1
                <textarea class="textar form-control" name="detail1" id="exampleFormControlTextarea1" rows="2"><?= $contentDetail->detail ?></textarea>
            </div>
            <div class="col-lg-6 font-body h4">
                DETAIL 2
                <textarea class="textar form-control" name="detail2" id="exampleFormControlTextarea1" rows="2"><?= $contentDetail->detail2 ?></textarea>
            </div>
            <div class="col-lg-6 font-body h4">
                DETAIL 3
                <textarea class="textar form-control" name="detail3" id="exampleFormControlTextarea1" rows="2"><?= $contentDetail->detail3 ?></textarea>
            </div>
            <div class="col-lg-6 font-body h4">
                DETAIL 4
                <textarea class="textar form-control" name="detail4" id="exampleFormControlTextarea1" rows="2"><?= $contentDetail->detail4 ?></textarea>
            </div>
            <div class="col-lg-6 font-body h4">
                DETAIL 5
                <textarea class="textar form-control" name="detail5" id="exampleFormControlTextarea1" rows="2"><?= $contentDetail->detail5 ?></textarea>
            </div>
            <div class="col-lg-6 font-body h4">
                DETAIL 6
                <textarea class="textar form-control" name="detail6" id="exampleFormControlTextarea1" rows="2"><?= $contentDetail->detail6 ?></textarea>
            </div>
            <div class="col-lg-6 font-body h4">
                DETAIL 7
                <textarea class="textar form-control" name="detail7" id="exampleFormControlTextarea1" rows="2"><?= $contentDetail->detail7 ?></textarea>
            </div>
            <div class="col-lg-6 font-body h4">
                URL
                <textarea class="textar form-control" name="url" id="url" rows="2"><?= $contentDetail->url ?></textarea>
            </div>
        </div>
        <div class="col-lg-6 offset-3 border border-dark mt-2">
            <div class="col-lg-8 offset-2 font-body h4 mb-3">
                IMAGE
                <img class="img-update border" src="<?= Yii::$app->homeUrl . $contentDetail['image'] ?>">
                <label for="formFile" class="form-label mb-3"></label>
                <input class="form-control" name="image" type="file" id="formFile" value="<?= $contentDetail->image ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-warning font-button mb-3">Update</button>
    </div>
    <input type="hidden" name="contentDetailId" value="<?= $contentDetail->contentDetailId ?>">
</div>

<?php ActiveForm::end(); ?>