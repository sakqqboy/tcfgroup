<?php

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'content/default/update-content'

]); ?>

<div class=row>
    <div class="col-lg-12 col-md-6">

        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="col-lg-12">
                    <h4>CONTENT NAME</h4>
                    <input type="text" name="contentname" class="form-control" placeholder="contentname"
                        value="<?= $contents->contentName ?>" required>
                </div>
                <div class="col-lg-12">
                    <h4>TITLE</h4>
                    <input type="text" name="title" class="form-control" placeholder="title"
                        value="<?= $contents->title ?>" required>
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" placeholder="detail">
                        <h4>DETAIL</h4>
                    </label>
                    <input type="text" name="detail" textarea class="form-control" id="exampleFormControlTextarea1"
                        rows="5" value="<?= $contents->detail ?>"></textarea>
                </div>
                <div class="col-lg-12 text-end">
                    <button type="submit" class="btn btn-success"
                        href="<?= Yii::$app->homeUrl . 'content/default/save-update' ?>">Save</button>
                </div>


            </div>
        </div>
        <input type="hidden" name="contentId" value="<?= $contents->contentId ?>">
    </div>




    <?php ActiveForm::end(); ?>