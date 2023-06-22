<?php
    $this -> title = 'Create Content';
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
                CREATE CONTENT BRANCH<br>
            </div>
            <div class="field-create mt-3">
                <div class="row mt-3">
                    <div class="col-lg-6 input-fields">
                        Content name<br>
                        <input type="text" name="contentname" id="member-address" class="input-data form-control col-lg-6" placeholder="Enter your content name" required>
                    </div>
                    <div class="col-lg-6 input-fields">
                        Title<br>
                        <input type="text" name="title" id="member-address" class="input-data form-control col-lg-6" placeholder="Enter your title">
                    </div>
                    <div class="col-lg-12 input-fields">
                        Branch<br>
                        <select class="input-data form-control col-lg-6" name="branchid" required>
                            <option value="">Please select your branch</option>
                            <?php 
                                if(isset($branchs) && count($branchs) > 0) {
                                    foreach ($branchs as $x) :
                            ?>
                            <option value="<?= $x['branchId'] ?>"><?= $x['branchName'] ?></option>
                            <?php 
                                    endforeach;
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <div class="col-lg-12 input-field">
                            Detail<br>
                            <textarea class="input-detail form-control" name="detail" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success font-button mt-3" href="<?=Yii::$app->homeUrl.'content/default/create-content-branch'?>">Submit</button>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>