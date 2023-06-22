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
    <div class="row mt-5">
        <div class="col-lg-12 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE CONTENT<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    TITLE<br>
                    <input type="text" name="title" id="member-address" class="font-input form-control col-lg-6" value="<?= $contentBranchDetail -> title ?>">
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL 1<br>
                    <textarea class="font-input form-control" name="detail1" id="exampleFormControlTextarea1" rows="3" ><?= $contentBranchDetail -> detail ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL 2<br>
                    <textarea class="font-input form-control" name="detail2" id="exampleFormControlTextarea1" rows="3"><?= $contentBranchDetail -> detail2 ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL 3<br>
                    <textarea class="font-input form-control" name="detail3" id="exampleFormControlTextarea1" rows="3"><?= $contentBranchDetail -> detail3 ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL 4<br>
                    <textarea class="font-input form-control" name="detail4" id="exampleFormControlTextarea1" rows="3"><?= $contentBranchDetail -> detail4 ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL 5<br>
                    <textarea class="font-input form-control" name="detail5" id="exampleFormControlTextarea1" rows="3"><?= $contentBranchDetail -> detail5 ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL 6<br>
                    <textarea class="font-input form-control" name="detail6" id="exampleFormControlTextarea1" rows="3"><?= $contentBranchDetail -> detail6 ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL 7<br>
                    <textarea class="font-input form-control" name="detail7" id="exampleFormControlTextarea1" rows="3"><?= $contentBranchDetail -> detail7 ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    URL<br>
                    <input type="text" name="url" id="member-address" class="font-input form-control col-lg-6" value="<?= $contentBranchDetail -> url ?>">
                </div>
                <div class="col-lg-12 font-body h4">
                    IMAGE<br>
                    <input type="file" name="image" class="font-input col-lg-6" name="image" value="<?= $contentBranchDetail -> image ?>">
                </div>
                <input type="hidden" name="contentBranchDetailId" value="<?= $contentBranchDetail -> contentBranchDetailId ?>">
                <button type="submit" class="btn btn-success font-button">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>