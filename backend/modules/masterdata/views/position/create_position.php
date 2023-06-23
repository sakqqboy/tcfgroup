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
    <div class="row bg-create">
        <div class="col-lg-12 box-create">
            <div class="col-lg-12 title-create">
                CREATE POSITION<br>
            </div>
            <div class="field-create">
                <div class="row mt-3">
                    <div class="col-lg-4 input-fields">
                        Position<br>
                        <input type="text" name="positionname" class="input-data form-control" placeholder="Enter your position" required>
                    </div>
                    <div class="col-lg-4 input-fields">
                        Level<br>
                        <input type="text" name="level" class="input-data form-control" placeholder="Enter your level" required>
                    </div>
                    <div class="col-lg-6 input-fields">
                        Branch<br>
                        <select class="input-data form-control" name="branchid" required>
                            <option value="">Please select your branch</option>
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
                        <div class="col-lg-6 input-fields">
                            Detail<br>
                            <textarea class="input-detail form-control" name="positiondetail" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success font-button mt-3" href="<?=Yii::$app->homeUrl.'masterdata/position/create-position'?>">Submit</button>
        </div>
    </div>
<?php ActiveForm::end(); ?>