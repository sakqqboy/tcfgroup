<?php
    $this -> title = 'Update Content';

use backend\models\tokyoconsulting\Branch;
use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'content/default/save-content-branch'

    ]); ?>
    <div class="row bg-create">
        <div class="col-lg-12 box-create">
            <div class="col-lg-12 title-create">
                UPDATE CONTENT BRANCH<br>
            </div>
            <div class="field-create mt-3">
                <div class="row mt-3">
                    <div class="col-lg-6 input-fields">
                        Content nameE<br>
                        <input type="text" name="contentname" class="input-data form-control col-lg-6" value="<?= $contentbranch -> contentName ?>" placeholder="Enter your content name" required>
                    </div>
                    <div class="col-lg-6 input-fields">
                        Title<br>
                        <input type="text" name="title" class="input-data form-control col-lg-6" value="<?= $contentbranch -> title ?>" placeholder="Enter your title">
                    </div>
                    <div class="col-lg-12 input-fields">
                        Branch<br>
                        <select class="input-data form-control col-lg-6" name="branchid" required>
                            <option value="<?= $contentbranch -> branchId ?>"><?= Branch::branchName($contentbranch -> branchId) ?></option>
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
                    <div class="col-lg-12 input-field">
                        Detail<br>
                        <textarea class="input-detail form-control" name="detail" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your detail"><?= $contentbranch -> detail ?></textarea> 
                    </div>
                </div>
            </div>
            <input type="hidden" name="contentBranchId" value="<?= $contentbranch -> contentBranchId ?>">
            <button type="submit" class="btn btn-warning font-button">Update</button>
        </div>
    </div>

<?php ActiveForm::end(); ?>