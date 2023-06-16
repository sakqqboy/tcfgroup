<?php
    $this -> title = 'Update Team';

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Section;
use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'masterdata/team/save-team'

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                CREATE TEAM<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    TEAM<br>
                    <input type="text" name="teamname" class="font-input form-control col-lg-6"  value="<?= $team -> teamName ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    BRANCH<br>
                    <select class="font-input form-control col-lg-6" id="branchId" name="branchid" onchange="javascript:findTeamInfo()" required>
                        <option value="<?= $team -> branchId ?>"><?= Branch::branchName($team -> branchId) ?></option>
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
                    SECTION
                    <select class="font-input form-control col-lg-6" id="sectionId" name="sectionid" required>
                        <option  value="<?= $team -> sectionId ?>"><?= Section::sectionName($team -> sectionId) == null? 'Please select your section': Section::sectionName($team -> sectionId) ?></option>\
                        <?php 
                            if(isset($section) && count($section) > 0) {
                                foreach ($section as $x) :
                        ?>
                        <option value="<?= $x['sectionId'] ?>"><?= $x['sectionName'] ?></option>
                        <?php 
                                endforeach;
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL<br>
                    <textarea class="font-input form-control" name="teamdetail" id="exampleFormControlTextarea1" rows="3"><?= $team -> teamDetail ?></textarea>
                </div>
                <input type="hidden" name="teamId" value="<?= $team -> teamId ?>">
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'masterdata/team/create-team'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>