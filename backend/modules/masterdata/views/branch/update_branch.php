<?php
    $this -> title = 'Create Branch';

use backend\models\tokyoconsulting\Country;
use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'masterdata/branch/save-branch'

    ]); ?>
    <div class="row bg-create">
        <div class="col-lg-12 box-create">
            <div class="col-lg-12 title-create">
                UPDATE BRANCH<br>
            </div>
            <div class="field-create">
                <div class="row mt-3">
                    <div class="col-lg-6 input-field">
                        Branch name<br>
                        <input type="text" name="branchname" class="input-data form-control" value="<?= $branch -> branchName ?>" placeholder="Enter your branch" required>
                    </div>
                    <div class="col-lg-6 input-field">
                        Country<br>
                        <select class="input-data form-control" name="countryid" required>
                            <option value="<?= $branch -> countryId ?>"><?= Country::countryName($branch->countryId) ?></option>
                            <?php 
                                if(isset($country) && count($country) > 0) {
                                    foreach ($country as $x) :
                            ?>
                            <option value="<?= $x['countryId'] ?>"><?= $x['countryName'] ?></option>
                            <?php 
                                    endforeach;
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-6 input-field">
                            Flag<br>
                            <input type="file" name="flag" class="form-control" value="<?= $branch -> flag ?>" required>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="branchId" value="<?= $branch -> branchId ?>">
            <button type="submit" class="btn btn-warning font-button" href="<?=Yii::$app->homeUrl.'masterdata/branch/update-branch'?>">Update</button>
        </div>
    </div>

<?php ActiveForm::end(); ?>