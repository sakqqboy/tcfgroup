<?php
    $this -> title = 'Create Position';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                CREATE POSITION<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    POSITION<br>
                    <input type="text" name="positionname" class="font-input form-control col-lg-6" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    BRANCH<br>
                    <select class="font-input form-control col-lg-6" name="branchid" required>
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
                <div class="col-lg-12 font-body h4">
                    DETAIL<br>
                    <textarea class="font-input form-control" name="positiondetail" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-lg-12 font-body h4">
                    LEVEL<br>
                    <input type="text" name="level" class="font-input form-control col-lg-6" required>
                </div>
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'masterdata/position/create-position'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>