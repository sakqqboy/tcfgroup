<?php
$this->title = 'Create Member';

use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'update-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],


]); ?>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;500&family=Oswald:wght@300&display=swap" rel="stylesheet">



<div class="createmember col-lg-12 mt-3 text-center">
    <h3>CREATE MEMBER</h3>
</div>






<div class="row mt-4">
    <div class="topleft col-lg-6 col-md-6">
        <div class="col-lg-12">
            <span>FIRSTNAME</span>
            <input type="text" name="memberFirstName" class="form-control" placeholder="firstname" required>
        </div>

        <div class="col-lg-12 mt-2">
            <span>NICKNAME</span>
            <input type="text" name="memberNickName" class="form-control" placeholder="nickname" required>
        </div>

        <div class="col-lg-12 mt-2">
            <span>USERNAME</span>
            <input type="text" id="typeNumber" name="username" class="form-control" placeholder="username" required>
        </div>


        <div class="col-lg-12 mt-2">
            <span>EMAIL</span>
            <input type="email" name="email" class="form-control" placeholder="email" required>
        </div>
        <div class="form-outline mt-2">
            <span>BRANCH ID</span>
            <input type="number" id="typeNumber" name="branchId" class="form-control" placeholder="branch id" required>
        </div>
        <div class="col-lg-12 mt-2">
            <span>GENDER</span>
            <div class="col-lg-12 mt-2">
                <select class="form-select" aria-label="Default select example" name="gender" required>
                    <option selected>Please select your gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>
    </div>
    <div class="topright col-lg-6 col-md-6">
        <span>LASTNAME</span>
        <input type="text" name="memberLastName" class="form-control" placeholder="lastname" required>

        <!-- birthdate -->
        <div class="col-lg-12 mt-2">
            <span>BIRTHDATE</span>
            <div class="input-group date" id="datepicker">
                <input type="date" class="form-control" id="date" name="birthDate" require>
            </div>
        </div>
        <!-- birthdate -->

        <div class="col-lg-12 mt-2">
            <span>PICTURE</span>
            <input type="file" name="picture" class="form-control" required>
        </div>

        <div class="col-lg-12 mt-2">
            <span>PHONENUMBER</span>
            <input type="text" name="telephoneNumber" class="form-control" placeholder="phonenumber">
        </div>

        <div class="col-lg-12 mt-2">
            <span>ADDRESS</span>
            <input type="text" name="address" class="form-control" placeholder="address">
        </div>





    </div>

</div>
<input type="hidden" name="memberId">

<div class="col-lg-12 back-next text-end mt-5">
    <a href="<?= Yii::$app->homeUrl . 'member/default/index' ?>" class="btn btn-secondary">
        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> BACK
    </a>
    <a href="<?= Yii::$app->homeUrl . 'member/default/create-next' ?>" class="btn btn-success">
        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> NEXT
    </a>
</div>


<?php ActiveForm::end(); ?>