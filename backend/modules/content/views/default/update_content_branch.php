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
    <div class="row mt-5">
        <div class="col-lg-12 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE CONTENT<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    CONTENT NAME<br>
                    <input type="text" name="contentname" class="font-input form-control col-lg-6" value="<?= $contentbranch -> contentName ?>">
                </div>
                <div class="col-lg-12 font-body h4">
                    TITLE<br>
                    <input type="text" name="title" class="font-input form-control col-lg-6" value="<?= $contentbranch -> title ?>">
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL<br>
                    <textarea class="font-input form-control" name="detail" id="exampleFormControlTextarea1" rows="3"><?= $contentbranch -> detail ?></textarea> 
                </div>
                <div class="col-lg-12 font-body h4">
                    BRANCH<br>
                    <select class="font-input form-control col-lg-6" name="branchid" required>
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
                <input type="hidden" name="contentBranchId" value="<?= $contentbranch -> contentBranchId ?>">
                <button type="submit" class="btn btn-success font-button">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>