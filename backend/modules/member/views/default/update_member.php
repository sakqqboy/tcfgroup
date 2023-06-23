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
<div class="row bg-create">
    <div class="col-lg-12 box-create mt-5">
        <div class="col-lg-12 title-create">
            UPDATE MEMBER<br>
        </div>
        <div class="type-info mt-3">
            Personal Information<br>
        </div>
        <div class="field-create">
            <div class="row mt-3">
                <div class="col-lg-4 input-fields">
                    Prefix<br>
                    <select class="input-data form-select" aria-label="Default select example" name="prefix" value="<?= $member->prefix ?>" required>
                        <option selected>Please select your prefix</option>
                        <option value="1">Mr</option>
                        <option value="2">Mrs</option>
                    </select>
                </div>
                <div class="col-lg-4 input-fields">
                    Firstname<br>
                    <input type="text" name="firstname" class="input-data form-control" value="<?= $member->memberFirstName ?>" placeholder="Enter your firstname" required>
                </div>
                <div class="col-lg-4 input-fields">
                    Lastname<br>
                    <input type="text" name="lastname" class="input-data form-control" value="<?= $member->memberLastName ?>" placeholder="Enter your lastname" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Nickname<br>
                    <input type="text" name="nickname" class="input-data form-control" value="<?= $member->memberNickName ?>" placeholder="Enter your nickname" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Date of Birth<br>
                    <input type="date" name="birthdate" class="input-data form-control" value="<?= $member->birthDate ?>" placeholder="Enter your birthdate" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Gender<br>
                    <select class="input-data form-select" aria-label="Default select example" name="gender" value="<?= $member->gender ?>" required>
                        <option selected>Please select your gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Username<br>
                    <input type="email" name="username" class="input-data form-control" value="<?= $member->username ?>" placeholder="Enter your username" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Password<br>
                    <input type="password" name="password" class="input-data form-control" value="<?= $member->password_hash ?>" placeholder="Enter your password" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Email<br>
                    <input type="email" name="email" class="input-data form-control" value="<?= $member->email ?>" placeholder="Enter your email" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Phone<br>
                    <input type="text" name="phonenumber" class="input-data form-control" value="<?= $member->telephoneNumber ?>" placeholder="Enter your phonenumber" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Address<br>
                    <textarea class="input-address form-control" name="address" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your address" required><?= $member->address ?></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-12 input-fields mt-2">
                        Picture<br>
                        <input type="file" name="picture" class="form-control col-lg-6" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-3"></div>
        </div>
    </div>
</div>

<div class="row bg-create pb-5" id="workInfo">
    <div class="col-lg-12 box-create" id="workinfor"> 
        <div class="col-lg-12 title-create">
            CREATE MEMBER<br>
        </div>
        <div class="type-info mt-3">
            Work Information<br>
        </div>
        <div class="field-create">
            <div class="row mt-3">
                <div class="col-lg-4 input-fields">
                    <label>
                        Branch
                    </label>
                    <select class="input-data form-select" name="branchId" id="branchId"onchange="javascript:findInfo()">
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
                <div class="col-lg-4 input-fields">
                    <label>
                        Section
                    </label>
                    <select class="input-data form-select" id="sectionId" name="sectionid">
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
                <div class="col-lg-4 input-fields">
                    <label>
                        Position
                    </label>
                    <select class="input-data" id="positionId" name="positionid">
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
                <div class="col-lg-4 input-fields mt-3">
                    <label>
                        TEAM
                    </label>
                    <select class="input-data form-select" id="teamId" name="teamid">
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
                <div class="col-lg-4 input-fields mt-3">
                    <label>
                        TEAM POSITION
                    </label>
                    <select class="input-data form-select" id="teampositionId" name="teampositionid">
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
                <div class="col-lg-4 input-field mt-3">
                    <label>
                        Type
                    </label>
                    <div class="row">
                    <?php
                        if(isset($memberType) && count($memberType)>0){
                            foreach($memberType as $type):
                    ?>
                            <div class="col-lg-6 mt-1">
                                <input class="input-checkbox form-check-input" type="checkbox" id="inlineCheckbox1" name="memberType[]" value="<?=$type['memberTypeId']?>" <?=MemberHasType::IsHasType($type['memberTypeId'],$member->memberId)==1?"checked":''?>>
                                <label class="input-checkbox form-check-label" for="inlineCheckbox1"><?=$type['memberTypeName']?></label>
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
                <div class="col-lg-12 text-end">
                    <button type="submit" class="btn btn-warning font-button" href="<?= Yii::$app->homeUrl . 'member/default/update-member' ?>">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>