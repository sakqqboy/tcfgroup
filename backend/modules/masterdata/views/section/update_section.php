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
    <div class="row bg-create">
        <div class="col-lg-12 box-create">
            <div class="col-lg-12 title-create">
                UPDATE SECTION<br>
            </div>
            <div class="field-create">
                <div class="row mt-3">
                    <div class="col-lg-6 input-field">
                        Section name<br>
                        <input type="text" name="sectionname" class="input-data form-control" value="<?= $section -> sectionName ?>" placeholder="Enter your section" required>
                    </div>
                    <div class="col-lg-6 input-field">
                        Branch<br>
                        <select class="input-data form-control" name="branchid" required>
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
                    <div class="col-lg-12 input-field">
                        Detail<br>
                        <textarea class="input-detail form-control" name="sectiondetail" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail" required><?= $section -> sectionDetail ?></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="sectionId" value="<?= $section -> sectionId ?>">
            <button type="submit" class="btn btn-warning font-button mt-3" href="<?=Yii::$app->homeUrl.'masterdata/branch/update-branch'?>">Update</button>
        </div>
    </div>

<?php ActiveForm::end(); ?>