<?php
$this->title = 'Create Content Detail';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'content/default/save-create-content-detail'

]); ?>
<div class="row mt-2 pb-5">
    <div class="topicbor col-lg-12 mt-4 bd-position">
        <div class="col-lg-12 text-center bigtopic pt-3">
            Create Content Detail<br>
        </div>
        <div class="row col-lg-10 offset-1 mt-3">
            <div class="font-topic-de col-lg-6 offset-3">
                TITLE<br>
                <input type="text" name="title" id="member-address" class="title font-input form-control">
            </div>
            <div class="row mt-2">
                <div class="font-topic-de col-lg-6">
                    DETAIL 1
                    <textarea class="textar form-control" name="detail1" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="font-topic-de col-lg-6">
                    DETAIL 2
                    <textarea class="textar form-control" name="detail2" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="font-topic-de col-lg-6">
                    DETAIL 3
                    <textarea class="textar form-control" name="detail3" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="font-topic-de col-lg-6">
                    DETAIL 4
                    <textarea class="textar form-control" name="detail4" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="font-topic-de col-lg-6">
                    DETAIL 5
                    <textarea class="textar form-control" name="detail5" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="font-topic-de col-lg-6">
                    DETAIL 6
                    <textarea class="textar form-control" name="detail6" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="font-topic-de col-lg-6">
                    DETAIL 7
                    <textarea class="textar form-control" name="detail7" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="font-topic-de col-lg-6">
                    URL
                    <textarea class="textar form-control" name="url" id="url" rows="2"></textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-6 offset-3 border border-dark mt-4">
            <div class="font-topic-de col-lg-8 offset-2 mt-3">
                IMAGE
                <img class="img-update border">
                <label for="formFile" class="form-label"></label>
                <input class="form-control mb-3" name="image" type="file" id="formFile">
            </div>
        </div>
        <button type="submit" class="btn btn-success font-button mb-3">Submit</button>
    </div>
    <input type="hidden" name="contentId" value="<?= $contentId ?>">
</div>

<?php ActiveForm::end(); ?>