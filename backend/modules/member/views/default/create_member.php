<?php
$this->title = 'Create Member';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

]); ?>
<div class="row bg-create" id="personalInfo">
    <div class="col-lg-12 box-create mt-5">
        <div class="col-lg-12 title-create">
            CREATE MEMBER<br>
        </div>
        <div class="type-info mt-3">
            Personal Information<br>
        </div>
        <div class="field-create">
            <div class="row mt-3">
                <div class="col-lg-4 input-fields">
                    Prefix<br>
                    <select class="input-data form-select" aria-label="Default select example" name="prefix" required>
                        <option selected>Please select your prefix</option>
                        <option value="1">Mr</option>
                        <option value="2">Mrs</option>
                    </select>
                </div>
                <div class="col-lg-4 input-fields">
                    Firstname<br>
                    <input type="text" name="firstname" class="input-data form-control" placeholder="Enter your firstname" required>
                </div>
                <div class="col-lg-4 input-fields">
                    Lastname<br>
                    <input type="text" name="lastname" class="input-data form-control" placeholder="Enter your lastname" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Nickname<br>
                    <input type="text" name="nickname" class="input-data form-control" placeholder="Enter your nickname"required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Date of Birth<br>
                    <input type="date" name="birthdate" class="input-data form-control" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Gender<br>
                    <select class="input-data form-select" aria-label="Default select example" name="gender" required>
                        <option selected>Please select your gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Username<br>
                    <input type="email" name="username" class="input-data form-control" placeholder="Enter your username" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Password<br>
                    <input type="password" name="password" class="input-data form-control" placeholder="Enter your password" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Email<br>
                    <input type="email" name="email" class="input-data form-control" placeholder="Enter your email" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Phone<br>
                    <input type="text" name="phonenumber" class="input-data form-control" placeholder="Enter your phonenumber" required>
                </div>
                <div class="col-lg-4 input-fields mt-2">
                    Address<br>
                    <textarea class="input-address form-control" name="address" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your address" required></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-12 input-fields mt-2">
                        Picture<br>
                        <input type="file" name="picture" class="form-control col-lg-6" required>
                    </div>
                </div>
            </div>
            <input type="hidden" name="memberId">
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
                    <label>Branch</label>
                    <select class="input-data form-select" name="branchId" id="branchId"
                        onchange="javascript:findInfo()" required>
                        <option value="">Please select your branch</option>
                        <?php
                        if (isset($branchs) && count($branchs) > 0) {
                            foreach ($branchs as $a) :
                        ?>
                        <option value="<?= $a["branchId"] ?>"><?= $a["branchName"] ?></option>
                        <?php
                            endforeach;
                        }
                        ?>
                    </select>
                </div>
                <div class="col-lg-4 input-fields">
                    <label>Section</label>
                    <select class="input-data form-select" id="sectionId" name="sectionid" required>
                        <option value="">Please select your section</option>
                    </select>
                </div>

                <div class="col-lg-4 input-fields">
                    <label>Position</label>
                    <select class="input-data form-select" id="positionId" name="positionid" required>
                        <option value="">Please select your position</option>
                    </select>
                </div>

                <div class="col-lg-4 input-fields mt-3">
                    <label>Team</label>
                    <select class="input-data form-select" id="teamId" name="teamid" required>
                        <option value="">Please select yourt team</option>
                    </select>
                </div>

                <div class="col-lg-4 input-fields mt-3">
                    <label>Team Position</label>
                    <select class="input-data form-select" id="teampositionId" name="teampositionid" required>
                        <option value="">Please select your team position</option>
                        <?php
                        if (isset($teampositions) && count($teampositions) > 0) {
                            foreach ($teampositions as $t) :
                        ?>
                        <option value="<?= $t["id"] ?>"><?= $t["name"] ?></option>
                        <?php
                            endforeach;
                        }
                        ?>
                    </select>
                </div>
                <div class="col-lg-4 input-field mt-3">
                    <label>Type</label>
                    <div class="row">
                    <?php
                        if(isset($memberType) && count($memberType)>0){
                            foreach($memberType as $type):
                    ?>
                        <div class="col-lg-6 mt-1">
                            <input class="input-checkbox form-check-input" type="checkbox" id="inlineCheckbox1" name="memberType[]" value="<?=$type['memberTypeId']?>">
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
                <div class="col-lg-12 text-end">
                    <button type="submit" class="btn btn-success font-button">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>