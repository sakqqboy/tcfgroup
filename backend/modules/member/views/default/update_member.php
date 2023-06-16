<?php

$this->title = 'Update Member';



use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Position;
use backend\models\tokyoconsulting\Section;
use backend\models\tokyoconsulting\Team;
use backend\models\tokyoconsulting\TeamPosition;
use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'member/default/save-member'

]); ?>
<div class="row mt-3">
    <div class="col-lg-12 mt-4 border border-dark bd-position">
        <div class="col-lg-12 text-center font-title">
            UPDATE MEMBER<br>
        </div>
        <div class="workinfor col-lg-12 mt-3 ml-4">
            PERSONAL INFORMATION<br>
        </div>
        <div class="padding">
            <div class="col-lg-12 font-body h4">
                USERNAME<br>
                <input type="text" name="username" class="font-input form-control col-lg-6" value="<?= $member->username ?>" required>
            </div>
            <div class="col-lg-12 font-body h4">
                PASSWORD<br>
                <input type="password" name="password" class="font-input form-control col-lg-6" value="<?= $member->password_hash ?>" required>
            </div>
            <div class="col-lg-4 font-body h4">
                PREFIX<br>
                <select class="form-select" aria-label="Default select example" name="prefix" value="<?= $member->prefix ?>" required>
                    <option selected>Please select your prefix</option>
                    <option value="1">Mr</option>
                    <option value="2">Mrs</option>
                </select>
            </div>
            <div class="col-lg-12 font-body h4">
                FIRSTNAME<br>
                <input type="text" name="firstname" class="font-input form-control col-lg-6" value="<?= $member->memberFirstName ?>" required>
            </div>
            <div class="col-lg-12 font-body h4">
                LASTNAME<br>
                <input type="text" name="lastname" class="font-input form-control col-lg-6" value="<?= $member->memberLastName ?>" required>
            </div>
            <div class="col-lg-12 font-body h4">
                NICKNAME<br>
                <input type="text" name="nickname" class="font-input form-control col-lg-6" value="<?= $member->memberNickName ?>" required>
            </div>
            <div class="col-lg-12 font-body h4">
                BIRTHDATE<br>
                <input type="date" name="birthdate" class="font-input form-control col-lg-6" value="<?= $member->birthDate ?>" required>
            </div>
            <div class="col-lg-4 font-body h4">
                GENDER<br>
                <select class="form-select" aria-label="Default select example" name="gender" value="<?= $member->gender ?>" required>
                    <option selected>Please select your gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="col-lg-12 font-body h4">
                EMAIL<br>
                <input type="email" name="email" class="font-input form-control col-lg-6" value="<?= $member->email ?>" required>
            </div>
            <div class="col-lg-12 font-body h4">
                PHONE<br>
                <input type="text" name="phonenumber" class="font-input form-control col-lg-6" value="<?= $member->telephoneNumber ?>" required>
            </div>
            <div class="col-lg-12 font-body h4">
                ADDRESS<br>
                <textarea class="font-input form-control" name="address" id="exampleFormControlTextarea1" rows="3" required><?= $member->address ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                PICTURE<br>
                <input type="file" name="picture" class="font-input form-control col-lg-6" value="<?= $member->picture ?>" required>
            </div>


            <div class="row mt-2" id="workInfo">
                <div class="col-lg-12 mt-4" id="workinfor">
                    <div class="workinfor col-lg-12 mt-3 ml-4">
                        WORK INFORMATION<br>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 font-body h4">
                            <label class="label-input">BRANCH</label>
                            <select class="form-select font-input col-lg-12" name="branchId" id="branchId" onchange="javascript:findInfo()" required>
                                <option value="<?= $member->branchId ?>">
                                    <?= Branch::branchName($member->branchId) ?>
                                </option>
                                <?php
                                if (isset($branch) && count($branch) > 0) {
                                    foreach ($branch as $b) :
                                ?>
                                        <option value="<?= $b['branchId'] ?>"><?= $b['branchName'] ?></option>
                                <?php
                                    endforeach;
                                }
                                ?>

                            </select>
                        </div>
                        <div class="col-lg-4 font-body h4">
                            <label class="label-input">SECTION</label>
                            <select class="form-select font-input col-lg-12" id="sectionId" name="sectionid" required>
                                <option value="<?= $member->sectionId ?>">
                                    <?= Section::sectionName($member->sectionId) == null ? 'Please select section' : Branch::branchName($member->sectionId) ?>
                                </option>
                                <?php
                                if (isset($section) && count($section) > 0) {
                                    foreach ($section as $s) :
                                ?>
                                        <option value="<?= $s['sectionId'] ?>"><?= $s['sectionName'] ?></option>
                                <?php
                                    endforeach;
                                }
                                ?>

                            </select>
                        </div>

                        <div class="col-lg-4 font-body h4">
                            <label class="label-input">POSITION</label>
                            <select class="form-select font-input col-lg-12" id="positionId" name="positionid" required>
                                <option value="<?= $member->positionId ?>">
                                    <?= Position::positionName($member->positionId) == null ? 'Please select positions' : Position::positionName($member->positionId) ?>
                                </option>
                                <?php
                                if (isset($position) && count($position) > 0) {
                                    foreach ($position as $p) :
                                ?>
                                        <option value="<?= $p['positionId'] ?>"><?= $p['positionName'] ?></option>
                                <?php
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-4 font-body h4">
                            <label class="label-input">TEAM</label>
                            <select class="form-select font-input col-lg-12" id="teamId" name="teamid" required>
                                <option value="<?= $member->teamId ?>">
                                    <?= Team::teamName($member->teamId) == null ? 'Please select team' : Team::teamName($member->teamId) ?>
                                </option>
                                <?php
                                if (isset($team) && count($team) > 0) {
                                    foreach ($team as $t) :
                                ?>
                                        <option value="<?= $t['teamId'] ?>"><?= $t['teamName'] ?></option>
                                <?php
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-lg-4 font-body h4">
                            <label class="label-input">TEAM POSITION</label>
                            <select class="form-select font-input col-lg-12" id="teampositionId" name="teampositionid" required>
                                <option value="<?= $member->teamId ?>">
                                    <?= TeamPosition::name($member->teamPositionId) == null ? 'Please select team' : TeamPosition::name($member->teamPositionId) ?>
                                </option>
                                <?php
                                if (isset($teampositions) && count($teampositions) > 0) {
                                    foreach ($teampositions as $tp) :
                                ?>
                                        <option value="<?= $tp['id'] ?>"><?= $tp['name'] ?></option>
                                <?php
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>


                        <input type="hidden" name="memberId" value="<?= $member->memberId ?>">
                        <div class="col-lg-12 text-end pb-4">
                            <button type="submit" class="btn btn-success font-button" href="<?= Yii::$app->homeUrl . 'member/default/update-member' ?>">Submit</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>