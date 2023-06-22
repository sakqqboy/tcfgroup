<?php

$this->title = 'Update Member';



use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\MemberHasType;
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
        <div class="padding">
            <div class="workinfor col-lg-12 mt-3 ml-4">
                PERSONAL INFORMATION<br>
            </div>
            <div class="col-lg-12 font-body h4">
                USERNAME<br>
                <input type="email" name="username" class="font-input form-control col-lg-6"
                    value="<?= $member->username ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                PASSWORD<br>
                <input type="password" name="password" class="font-input form-control col-lg-6"
                    value="<?= $member->password_hash ?>">
            </div>
            <div class="col-lg-4 font-body h4">
                PREFIX<br>
                <select class="form-select" aria-label="Default select example" name="prefix"
                    value="<?= $member->prefix ?>">
                    <option selected>Please select your prefix</option>
                    <option value="1">Mr</option>
                    <option value="2">Mrs</option>
                </select>
            </div>
            <div class="col-lg-12 font-body h4">
                FIRSTNAME<br>
                <input type="text" name="firstname" class="font-input form-control col-lg-6"
                    value="<?= $member->memberFirstName ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                LASTNAME<br>
                <input type="text" name="lastname" class="font-input form-control col-lg-6"
                    value="<?= $member->memberLastName ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                NICKNAME<br>
                <input type="text" name="nickname" class="font-input form-control col-lg-6"
                    value="<?= $member->memberNickName ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                BIRTHDATE<br>
                <input type="date" name="birthdate" class="font-input form-control col-lg-6"
                    value="<?= $member->birthDate ?>">
            </div>
            <div class="col-lg-4 font-body h4">
                GENDER<br>
                <select class="form-select" aria-label="Default select example" name="gender"
                    value="<?= $member->gender ?>">
                    <option selected>Please select your gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="col-lg-12 font-body h4">
                EMAIL<br>
                <input type="email" name="email" class="font-input form-control col-lg-6" value="<?= $member->email ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                PHONE<br>
                <input type="text" name="phonenumber" class="font-input form-control col-lg-6"
                    value="<?= $member->telephoneNumber ?>">
            </div>
            <div class="col-lg-12 font-body h4">
                ADDRESS<br>
                <textarea class="font-input form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?= $member->address ?></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                PICTURE<br>
                <input type="file" name="picture" class="font-input form-control col-lg-6"
                    value="<?= $member->picture ?>">
            </div>

            <div class="row mt-2" id="workInfo">
                <div class="col-lg-12 mt-4" id="workinfor"> 
                    <div class="workinfor col-lg-12 mt-3 ml-4">
                        WORK INFORMATION<br>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 font-body h4">
                            <label class="label-input">BRANCH</label>
                            <select class="form-select font-input col-lg-12" name="branchId" id="branchId"
                                onchange="javascript:findInfo()">
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
                            <select class="form-select font-input col-lg-12" id="sectionId" name="sectionid">
                                <option value="<?= $member->sectionId ?>">
                                    <?= Section::sectionName($member->sectionId) == null ? 'Please select section' : Section::sectionName($member->sectionId) ?>
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
                            <select class="form-select font-input col-lg-12" id="positionId" name="positionid">
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
                            <select class="form-select font-input col-lg-12" id="teamId" name="teamid">
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
                            <select class="form-select font-input col-lg-12" id="teampositionId" name="teampositionid">
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
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="font-body label-input h4">
                                    TYPE
                                </div>
                                <?php
                                if(isset($memberType) && count($memberType)>0){
                                    foreach($memberType as $type):?>
                                <div class="col-lg-4">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="memberType[]" value="<?=$type['memberTypeId']?>" <?=MemberHasType::IsHasType($type['memberTypeId'],$member->memberId)==1?"checked":''?>>
                                    <label class="form-check-label" for="inlineCheckbox1"><?=$type['memberTypeName']?></label>
                                </div>
                                <?php
                                    endforeach;
                                ?>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                        <input type="hidden" name="memberId" value="<?= $member->memberId ?>">
                        <div class="col-lg-12 text-end pb-4">
                            <button type="submit" class="btn btn-success font-button"
                                href="<?= Yii::$app->homeUrl . 'member/default/update-member' ?>">Submit</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>