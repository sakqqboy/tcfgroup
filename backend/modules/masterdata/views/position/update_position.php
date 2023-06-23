<?php
    $this -> title = 'Update Position';

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;
use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'masterdata/position/save-position'

    ]); ?>
    <div class="row bg-create">
        <div class="col-lg-12 box-create">
            <div class="col-lg-12 title-create">
                UPDATE POSITION<br>
            </div>
            <div class="field-create">
                <div class="row mt-3">
                    <div class="col-lg-4 input-fields">
                    POSITION NAME<br>
                        <input type="text" name="positionname" class="input-data form-control" value="<?= $position -> positionName ?>" placeholder="Enter your position" required>
                    </div>
                    <div class="col-lg-4 input-fields">
                        LEVEL<br>
                        <input type="text" name="level" class="input-data form-control" value="<?= $position -> level ?>" placeholder="Enter your level" required>
                    </div>
                    <div class="col-lg-4 input-fields">
                        BRANCH<br>
                        <select class="input-data form-control" name="branchid" required>
                            <option value="<?= $position -> branchId ?>"><?= Branch::branchName($position -> branchId) ?></option>
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
                        <div class="col-lg-12 input-fields">
                            DETAIL<br>
                            <textarea class="input-detail form-control" name="positiondetail" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail" required><?= $position -> positionDetail ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="positionId" value="<?= $position -> positionId ?>">
            <button type="submit" class="btn btn-warning font-button mt-3" href="<?=Yii::$app->homeUrl.'masterdata/position/update-position'?>">Update</button>
        </div>
    </div>

<?php ActiveForm::end(); ?>