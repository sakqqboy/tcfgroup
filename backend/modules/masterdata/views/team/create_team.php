<?php
$this->title = 'Create Team';

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
            CREATE TEAM<br>
        </div>

        <div class="field-create mt-3">
            <div class="col-lg-6 input-fields">
                Team<br>
                <input type="text" name="teamname" class="input-data form-control" required>
            </div>
            <div class="col-lg-6 input-fields">
                Branch<br>
                <select class="input-data form-control" id="branchId" name="branchid" onchange="javascript:findTeamInfo()" required>
                    <option value="">Please select your country</option>
                    <?php
                    if (isset($branch) && count($branch) > 0) {
                        foreach ($branch as $x) :
                    ?>
                            <option value="<?= $x['branchId'] ?>"><?= $x['branchName'] ?></option>
                    <?php
                        endforeach;
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-6 input-fields">
                Section<br>
                <select class="input-data form-control" id="sectionId" name="sectionid" required>
                    <option value="">Please select your section</option>
                </select>
            </div>
            <div class="col-lg-6 input-fields">
                Detail<br>
                <textarea class="input-detail form-control" name="teamdetail" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success font-button mt-3" href="<?= Yii::$app->homeUrl . 'masterdata/team/create-team' ?>">Submit</button>
            <div class="col-lg-12">
                <br>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>