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
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE POSITION<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                POSITION NAME<br>
                    <input type="text" name="positionname" class="font-input form-control col-lg-6" value="<?= $position -> positionName ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    BRANCH<br>
                    <select class="font-input form-control col-lg-6" name="branchid" required>
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
                <div class="col-lg-12 font-body h4">
                    DETAIL<br>
                    <textarea class="font-input form-control" name="positiondetail" id="exampleFormControlTextarea1" rows="3" required><?= $position -> positionDetail ?></textarea>
                </div>
                <div class="col-lg-12 font-body h4">
                    LEVEL<br>
                    <input type="text" name="level" class="font-input form-control col-lg-6" value="<?= $position -> level ?>" required>
                </div>
                <input type="hidden" name="positionId" value="<?= $position -> positionId ?>">
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'masterdata/position/update-position'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>