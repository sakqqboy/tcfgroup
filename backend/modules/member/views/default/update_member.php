<?php
    $this -> title = 'Create Content';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app -> homeUrl . 'member/default/save-member'

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                UPDATE MEMBER<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    USERNAME<br>
                    <input type="text" name="username" class="font-input form-control col-lg-6" value="<?= $member -> username ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    PASSWORD<br>
                    <input type="password" name="password" class="font-input form-control col-lg-6" value="<?= $member -> password_hash ?>" required>
                </div>
                <div class="col-lg-4 font-body h4">
                    PREFIX<br>
                    <select class="form-select" aria-label="Default select example" name="prefix" value="<?= $member -> prefix ?>" required>
                        <option selected>Please select your prefix</option>
                        <option value="1">Mr</option>
                        <option value="2">Mrs</option>
                    </select>
                </div>
                <div class="col-lg-12 font-body h4">
                    FIRSTNAME<br>
                    <input type="text" name="firstname" class="font-input form-control col-lg-6" value="<?= $member -> memberFirstName ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    LASTNAME<br>
                    <input type="text" name="lastname" class="font-input form-control col-lg-6" value="<?= $member -> memberLastName ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    NICKNAME<br>
                    <input type="text" name="nickname" class="font-input form-control col-lg-6" value="<?= $member -> memberNickName ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    BIRTHDATE<br>
                    <input type="date" name="birthdate" class="font-input form-control col-lg-6" value="<?= $member -> birthDate ?>" required>
                </div>
                <div class="col-lg-4 font-body h4">
                    GENDER<br>
                    <select class="form-select" aria-label="Default select example" name="gender" value="<?= $member -> gender ?>" required>
                        <option selected>Please select your gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="col-lg-12 font-body h4">
                    EMAIL<br>
                    <input type="email" name="email" class="font-input form-control col-lg-6" value="<?= $member -> email ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    PHONE<br>
                    <input type="text" name="phonenumber" class="font-input form-control col-lg-6" value="<?= $member -> telephoneNumber ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    BRANCH ID<br>
                    <input type="text" name="branchid" class="font-input form-control col-lg-6" value="<?= $member -> branchId ?>" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    ADDRESS<br>
                    <textarea class="font-input form-control" name="address" id="exampleFormControlTextarea1" rows="3" required><?= $member -> address ?></textarea>
                </div>
                <div class="col-lg-12 font-body h4">
                    PICTURE<br>
                    <input type="file" name="picture" class="font-input form-control col-lg-6" value="<?= $member -> picture ?>" required>
                </div>
                <input type="hidden" name="memberId" value="<?= $member -> memberId ?>">
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'member/default/update-member'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>