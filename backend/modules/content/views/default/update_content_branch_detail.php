<?php
    $this -> title = 'Update Content Branch Detail';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'content/default/save-update-branch-detail'

    ]); ?>
    <div class="row bg-create">
        <div class="col-lg-12 box-create mt-5">
            <div class="col-lg-12 title-create">
                UPDATE BRANCH DETAIL<br>
            </div>
            <div class="field-create">
                <div class="row mt-3">
                    <div class="col-lg-6 input-field">
                        TITLE<br>
                        <input type="text" name="title" id="member-address" class="input-data form-control col-lg-6" value="<?= $contentBranchDetail -> title ?>" placeholder="Enter your title" required>
                    </div>
                    <div class="col-lg-6 input-field">
                        URL<br>
                        <input type="text" name="url" id="member-address" class="input-data form-control col-lg-6" value="<?= $contentBranchDetail -> url ?>" placeholder="Enter your url">
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 input-field">
                            DETAIL 1<br>
                            <textarea class="input-details form-control" name="detail1" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail"><?= $contentBranchDetail -> detail ?></textarea> 
                        </div>
                        <div class="col-lg-4 input-field">
                            DETAIL 2<br>
                            <textarea class="input-details form-control" name="detail2" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 2"><?= $contentBranchDetail -> detail2 ?></textarea> 
                        </div>
                        <div class="col-lg-4 input-field">
                            DETAIL 3<br>
                            <textarea class="input-details form-control" name="detail3" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 3"><?= $contentBranchDetail -> detail3 ?></textarea> 
                        </div>
                        <div class="col-lg-4 input-field">
                            DETAIL 4<br>
                            <textarea class="input-details form-control" name="detail4" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 4"><?= $contentBranchDetail -> detail4 ?></textarea> 
                        </div>
                        <div class="col-lg-4 input-field">
                            DETAIL 5<br>
                            <textarea class="input-details form-control" name="detail5" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 5"><?= $contentBranchDetail -> detail5 ?></textarea> 
                        </div>
                        <div class="col-lg-4 input-field">
                            DETAIL 6<br>
                            <textarea class="input-details form-control" name="detail6" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 6"><?= $contentBranchDetail -> detail6 ?></textarea> 
                        </div>
                        <div class="col-lg-4 input-field">
                            DETAIL 7<br>
                            <textarea class="input-details form-control" name="detail7" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail 7"><?= $contentBranchDetail -> detail7 ?></textarea> 
                        </div>
                        <div class="col-lg-12 input-field mt-3">
                            IMAGE<br>
                            <input type="file" name="image" class="form-control" name="image" value="<?= $contentBranchDetail -> image ?>">
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="contentBranchDetailId" value="<?= $contentBranchDetail -> contentBranchDetailId ?>">
            <button type="submit" class="btn btn-warning font-button">Update</button>
        </div>
    </div>

<?php ActiveForm::end(); ?>