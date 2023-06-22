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
<div class="row mt-3" id="personalInfo">
    <div class="col-lg-12 mt-4 border border-dark bd-position">
        <div class="col-lg-12 text-center font-title">
            CREATE MEMBER<br>
        </div>
        <div class="workinfor col-lg-12 mt-3 ml-4">
            PERSONAL INFORMATION<br>
        </div>
        <div class="pd-member">
            <div class="col-lg-12 font-body h4">
                USERNAME<br>
                <input type="email" name="username" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-12 font-body h4">
                PASSWORD<br>
                <input type="password" name="password" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-4 font-body h4">
                PREFIX<br>
                <select class="form-select" aria-label="Default select example" name="prefix" required>
                    <option selected>Please select your prefix</option>
                    <option value="1">Mr</option>
                    <option value="2">Mrs</option>
                </select>
            </div>
            <div class="col-lg-12 font-body h4">
                FIRSTNAME<br>
                <input type="text" name="firstname" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-12 font-body h4">
                LASTNAME<br>
                <input type="text" name="lastname" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-12 font-body h4">
                NICKNAME<br>
                <input type="text" name="nickname" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-12 font-body h4">
                BIRTHDATE<br>
                <input type="date" name="birthdate" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-4 font-body h4">
                GENDER<br>
                <select class="form-select" aria-label="Default select example" name="gender" required>
                    <option selected>Please select your gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="col-lg-12 font-body h4">
                EMAIL<br>
                <input type="email" name="email" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-12 font-body h4">
                PHONE<br>
                <input type="text" name="phonenumber" class="font-input form-control col-lg-6" required>
            </div>
            <div class="col-lg-12 font-body h4">
                ADDRESS<br>
                <textarea class="font-input form-control" name="address" id="exampleFormControlTextarea1" rows="3"
                    required></textarea>
            </div>
            <div class="col-lg-12 font-body h4">
                PICTURE<br>
                <input type="file" name="picture" class="font-input form-control col-lg-6" required>
            </div>

            <input type="hidden" name="memberId">

            <div class="col-lg-12">
                <br>
            </div>
        </div>
    </div>
</div>


<div class="row mt-2" id="workInfo">
    <div class="col-lg-12 mt-4 border border-dark bd-position" id="workinfor">
        <div class="workinfor col-lg-12 mt-3 ml-4">
            WORK INFORMATION<br>
        </div>
        <div class="row">
            <div class="col-lg-4 font-body h4">
                <label class="label-input">BRANCH</label>
                <select class="form-select font-input col-lg-12" name="branchId" id="branchId"
                    onchange="javascript:findInfo()" required>
                    <option value="">select branch</option>
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
            <div class="col-lg-4 font-body h4">
                <label class="label-input">SECTION</label>
                <select class="form-select font-input col-lg-12" id="sectionId" name="sectionid" required>
                    <option value="">select section</option>
                </select>
            </div>

            <div class="col-lg-4 font-body h4">
                <label class="label-input">POSITION</label>
                <select class="form-select font-input col-lg-12" id="positionId" name="positionid" required>
                    <option value="">select position</option>
                </select>
            </div>

            <div class="col-lg-4 font-body h4">
                <label class="label-input">TEAM</label>
                <select class="form-select font-input col-lg-12" id="teamId" name="teamid" required>
                    <option value="">select team</option>
                </select>
            </div>

            <div class="col-lg-4 font-body h4">
                <label class="label-input">TEAM POSITION</label>
                <select class="form-select font-input col-lg-12" id="teampositionId" name="teampositionid" required>
                    <option value="">select team position</option>
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
            <div class="col-lg-12">
                <div class="row">
                    <div class="font-body label-input h4">
                        TYPE
                    </div>
                    <?php
                    if(isset($memberType) && count($memberType)>0){
                        foreach($memberType as $type):?>
                    <div class="col-lg-4">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="memberType[]" value="<?=$type['memberTypeId']?>">
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
            <div class="col-lg-12 text-end">
                <button type="submit" class="btn btn-success font-button mb-3">Submit</button>
            </div>
        </div>
    </div>
</div>


<?php ActiveForm::end(); ?>