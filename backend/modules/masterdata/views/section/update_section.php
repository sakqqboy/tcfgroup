<?php
    $this -> title = 'Update Section';

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;
use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'masterdata/section/save-section'

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE SECTION<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    SECTION NAME<br>
                    <input type="text" name="sectionname" class="font-input form-control col-lg-6" value="<?= $section -> sectionName ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    BRANCH<br>
                    <select class="font-input form-control col-lg-6" name="branchid" required>
                        <option value="<?= $section -> branchId ?>"><?= Branch::branchName($section -> branchId) ?></option>
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
                    <textarea class="font-input form-control" name="sectiondetail" id="exampleFormControlTextarea1" rows="3" required><?= $section -> sectionDetail ?></textarea>
                </div>
                <input type="hidden" name="sectionId" value="<?= $section -> sectionId ?>">
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'masterdata/branch/update-branch'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>