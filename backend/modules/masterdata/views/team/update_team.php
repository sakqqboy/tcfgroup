<?php
$this->title = 'Update Team';

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Section;
use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'masterdata/team/save-team'

]); ?>

<div class="row bg-create">
    <div class="col-lg-12 box-create">
        <div class="col-lg-12 title-create">
            UPDATE TEAM<br>
        </div>
        <div class="field-create mt-3">
            <div class="col-lg-6 input-fields">
                Team<br>
                <input type="text" name="teamname" class="input-data form-control" value="<?= $team->teamName ?>" required>
            </div>
            <div class="col-lg-6 input-fields">
                Branch<br>
                <select class="input-data form-control" id="branchId" name="branchid" onchange="javascript:findTeamInfo()" required>
                    <option value="<?= $team->branchId ?>"><?= Branch::branchName($team->branchId) ?></option>
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
                Section
                <select class="input-data form-control" id="sectionId" name="sectionid" required>
                    <option value="<?= $team->sectionId ?>">
                        <?= Section::sectionName($team->sectionId) == null ? 'Please select your section' : Section::sectionName($team->sectionId) ?>
                    </option>
                    <?php
                    if (isset($section) && count($section) > 0) {
                        foreach ($section as $x) :
                    ?>
                            <option value="<?= $x['sectionId'] ?>"><?= $x['sectionName'] ?></option>
                    <?php
                        endforeach;
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-6 input-fields">
                Detail<br>
                <textarea class="input-detail form-control" name="teamdetail" id="exampleFormControlTextarea1" rows="3"><?= $team->teamDetail ?></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success font-button mt-3" href="<?= Yii::$app->homeUrl . 'masterdata/team/create-team' ?>">Submit</button>
    </div>
</div>

<?php ActiveForm::end(); ?>