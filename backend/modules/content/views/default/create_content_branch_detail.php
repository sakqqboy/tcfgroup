<?php
$this->title = 'Create Content Branch Detail';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'content/default/save-create-content-branch-detail'

]); ?>
<div class="row bg-create">
    <div class="col-lg-12 box-create mt-5">
        <div class="col-lg-12 title-create">
            CREATE BRANCH DETAIL<br>
        </div>
        <div class="field-create">
            <div class="row mt-3">
                <div class="col-lg-6 input-field">
                    Title<br>
                    <input type="text" name="title" id="member-address" class="input-data form-control" placeholder="Enter your title" required>
                </div>
                <div class="col-lg-6 input-field">
                    Url<br>
                    <input type="text" name="url" id="member-address" class="input-data form-control" placeholder="Enter your url">
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 input-field">
                        Detail<br>
                        <textarea class="input-details form-control" name="detail" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 2<br>
                        <textarea class="input-details form-control" name="detail2" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 2"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 3<br>
                        <textarea class="input-details form-control" name="detail3" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 4<br>
                        <textarea class="input-details form-control" name="detail4" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 4"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 5<br>
                        <textarea class="input-details form-control" name="detail5" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 5"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 6<br>
                        <textarea class="input-details form-control" name="detail6" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 6"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 7<br>
                        <textarea class="input-details form-control" name="detail7" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 7"></textarea>
                    </div>
                    <div class="col-lg-12 input-field mt-3">
                        Image<br>
                        <input type="file" name="image" class="form-control" name="image">
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="contentBranchId" value="<?= $contentBranchId ?>">
        <button type="submit" class="btn btn-success font-button mt-3">Submit</button>
    </div>
</div>

<?php ActiveForm::end(); ?>