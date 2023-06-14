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



<div class="ctmembertwo col-lg-12 mt-3 text-center pt-3">
    <h3>CREATE MEMBER</h3>
</div>



<div class="container mt-4">
    <div class="formtwo offset-md-3 col-lg-6 col-md-6">
        <div class="col-lg-12">
            <span>AAAAA</span>
            <input type="text" name="memberFirstName" class="form-control" placeholder="" required>
        </div>

        <div class="col-lg-12 mt-2">
            <span>BBBB</span>
            <input type="text" name="memberNickName" class="form-control" placeholder="" required>
        </div>

        <div class="col-lg-12 mt-2">
            <span>CCCCCC</span>
            <input type="text" id="typeNumber" name="username" class="form-control" placeholder="" required>
        </div>


        <div class="col-lg-12 mt-2">
            <span>DDDDD</span>
            <input type="email" name="email" class="form-control" placeholder="" required>
        </div>
        <div class="col-lg-12 mt-2">
            <span>FFFFF</span>
            <div class="col-lg-12">
                <select class="form-select" aria-label="Default select example" name="" required>
                    <option selected>Choose</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12 mt-2">
            <span>FFFFF</span>
            <div class="col-lg-12">
                <select class="form-select" aria-label="Default select example" name="" required>
                    <option selected>Choose</option>
                </select>
            </div>
        </div>

        <div class="col-lg-12 create-back text-end mt-3">
            <a href="<?= Yii::$app->homeUrl . 'member/default/create-member' ?>" class="btn btn-secondary">
                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> BACK
            </a>
            <!-- <button type="submit" id="cTask" class="btn btn-success">
                <a>CREATE</a>
            </button> -->
        </div>

    </div>

</div>




<?php ActiveForm::end(); ?>