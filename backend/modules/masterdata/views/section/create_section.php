<?php
    $this -> title = 'Create Section';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

    ]); ?>
    <div class="row bg-create">
        <div class="col-lg-12 box-create">
            <div class="col-lg-12 title-create">
                CREATE SECTION<br>
            </div>
            <div class="field-create">
                <div class="row mt-3">
                    <div class="col-lg-6 input-field">
                        Section<br>
                        <input type="text" name="sectionname" class="input-data form-control" placeholder="Enter your section" required>
                    </div>
                    <div class="col-lg-6 input-field">
                        Branch<br>
                        <select class="input-data form-control" name="branchid" required>
                            <option value="">Please select your country</option>
                            <?php 
                                if(isset($branch) && count($branch) > 0) {
                                    foreach ($branch as $x) :
                            ?>
                            <option value="<?= $x['branchId'] ?>"><?= $x['branchName'] ?></option>
                            <?php 
                                    endforeach;
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12 input-field">
                            Detail<br>
                            <textarea class="input-detail form-control" name="sectiondetail" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success font-button mt-3" href="<?=Yii::$app->homeUrl.'masterdata/section/create-section'?>">Submit</button>
        </div>
    </div>

<?php ActiveForm::end(); ?>