<?php
$this->title = 'Update Profile';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'update-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],
    'action' => Yii::$app->homeUrl . 'member/default/save-member'


]); ?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;500&family=Oswald:wght@300&display=swap"
    rel="stylesheet">

<div class="editmember col-lg-12 mt-3 text-center">
    <h3>EDIT MEMBER</h3>
</div>






<div class="row mt-4">
    <div class="topic col-lg-6 col-md-6 ">
        <div class="col-lg-12 ">
            <p>FIRSTNAME</p>
            <input type="text" name="memberFirstName" class="form-control" placeholder="firstname"
                value="<?= $members->memberFirstName ?>" required>
        </div>

        <div class="col-lg-12 ">
            <p>NICKNAME</p>
            <input type="text" name="memberNickName" class="form-control" placeholder="nickname"
                value="<?= $members->memberNickName ?>" required>
        </div>

        <!-- gender -->
        <div class="col-lg-12">
            <p>GENDER</p>
            <div class="col-lg-12">
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option value="<?= isset($members->gender) ? $members->gender : '' ?>">
                        <?= $members->gender == 1 ? 'Male' : 'Female' ?></option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>
        <!-- gender -->

        <div class="col-lg-12">
            <p>EMAIL</p>
            <input type="email" name="email" class="form-control" placeholder="email" value="<?= $members->email ?>"
                required>
        </div>
        <div class="form-outline">
            <p>BRANCH ID</p>
            <input type="number" id="typeNumber" name="branchId" class="form-control" value="<?= $members->branchId ?>">
        </div>
    </div>
    <div class="topicright col-lg-6 col-md-6 ">
        <p>LASTNAME</p>
        <input type="text" name="memberLastName" class="form-control" placeholder="lastname"
            value="<?= $members->memberLastName ?>" required>
        <!-- birthdate -->
        <p>BIRTHDATE</p>
        <div class="col-lg-12">
            <div class="input-group date" id="datepicker">
                <input type="date" class="form-control" id="date" name="birthDate" value="<?= $members->birthDate ?>"
                    require>
            </div>
        </div>
        <!-- birthdate -->
        <div class="col-lg-12">
            <p>PICTURE</p>
            <input type="file" name="picture" class="form-control" value="<?= $members->picture ?> " required>
        </div>

        <div class="col-lg-12">
            <p>PHONENUMBER</p>
            <input type="text" name="telephoneNumber" class="form-control" value="<?= $members->telephoneNumber ?>">
        </div>

        <div class="col-lg-12">
            <p>ADDRESS</p>
            <input type="text" name="address" class="form-control" value="<?= $members->address ?>">
        </div>





    </div>

</div>
<input type="hidden" name="memberId" value="<?= $members->memberId ?>">



<div class="back-update col-lg-12 mt-4 d-flex justify-content-between">
    <a href="<?= Yii::$app->homeUrl . 'member/default/index' ?>" class="btn btn-secondary">
        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> BACK
    </a>
    <button type="submit" id="cTask" class="btn btn-success">
        UPDATE
    </button>
</div>



<?php ActiveForm::end(); ?>