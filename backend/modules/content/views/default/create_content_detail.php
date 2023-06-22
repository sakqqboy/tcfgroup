<?php
    $this -> title = 'Create Content Detail';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'content/default/save-create-content-detail'

    ]); ?>
    <div class="row bg-create">
        <div class="col-lg-12 box-create">
            <div class="col-lg-12 title-create">
                CREATE DETAIL<br>
            </div>
            <div class="field-create">
                <div class="row mt-3">
                    <div class="col-lg-4 input-field">
                        Title<br>
                        <input type="text" name="title" id="member-address" class="input-data form-control col-lg-6">
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail<br>
                        <textarea class="input-data form-control" name="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 2<br>
                        <textarea class="input-data form-control" name="detail2" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 3<br>
                        <textarea class="input-data form-control" name="detail3" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 4<br>
                        <textarea class="input-data form-control" name="detail4" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 5<br>
                        <textarea class="input-data form-control" name="detail5" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 6<br>
                        <textarea class="input-data form-control" name="detail6" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Detail 7<br>
                        <textarea class="input-data form-control" name="detail7" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-lg-4 input-field">
                        Url<br>
                        <input type="text" name="url" class="input-data form-control col-lg-6">
                    </div>
                    <div class="col-lg-12 input-field mt-2">
                        Image<br>
                        <input type="file" name="image" class="col-lg-12 form-control" name="image">
                    </div>
                </div>
            </div>
            <input type="hidden" name="contentId" value="<?= $contentId ?>">
            <button type="submit" class="btn btn-success font-button">Submit</button>
        </div>
    </div>
<?php ActiveForm::end(); ?>