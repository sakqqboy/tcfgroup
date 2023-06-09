<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use yii\bootstrap5\ActiveForm;

$this->title = 'Sign in';


$form = ActiveForm::begin([

    'id' => 'Formsignup',

    'action' => Yii::$app->homeUrl . 'site-country/formsignup',

    'method' => 'post'

]); ?>

<div class="col-12" style="margin-top:100px;">
    <div class="container">
        <div class="row">
            <span class="badge bg-white text-dark" style="border-radius: 25px;">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5">
                        <p class="text-center name1-sign">Sign up</p>
                        <form class="mx-1 mx-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name" required>
                                <label for="floatingInput"> <i class="fa fa-user" aria-hidden="true"></i> Firstname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username" required>
                                <label for="InputUsername"> <i class="fa fa-user" aria-hidden="true"></i> Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="nickname" name="nickname" required>
                                <label for="InputNickname"> <i class="fa fa-user" aria-hidden="true"></i> Nickname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control" id="exampleinputbirthday" name="birth" required>
                                <label for="birthdaytime"> <i class="fa fa-birthday-cake" aria-hidden="true"></i> Birth</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                                <label for="InputEmail"> <i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                                <label for="floatingPassword"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> Password </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword1" placeholder="Password" name="password_hash" required>
                                <label for="floatingPassword"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> Repeat your password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="country" required>
                                    <option selected>Bangladesh</option>
                                    <option value="1">Brazil</option>
                                    <option value="2">Combodia</option>
                                    <option value="3">China</option>
                                    <option value="4">Columbia</option>
                                    <option value="5">Dubai(UAE)</option>
                                    <option value="6">Hong kong</option>
                                    <option value="7">India</option>
                                    <option value="8">Indonesia</option>
                                    <option value="9">kenya</option>
                                    <option value="10">Japan</option>
                                    <option value="11">Laos</option>
                                    <option value="12">Malaysia</option>
                                    <option value="13">Mexico</option>
                                    <option value="14">Mongolia</option>
                                    <option value="15">Nigeria</option>
                                    <option value="16">Mayanmar</option>
                                    <option value="17">Morocco</option>
                                    <option value="18">Peru</option>
                                    <option value="19">Philippines</option>
                                    <option value="20">Russia</option>
                                    <option value="21">South Afroca</option>
                                    <option value="22">Singapore</option>
                                    <option value="23">Sir Lanka</option>
                                    <option value="24">Thailad</option>
                                    <option value="25">Turkey</option>
                                </select>
                                <label for="floatingSelect"> <i class="fa fa-globe" aria-hidden="true"></i> Country</label>
                            </div>
                            <div class="col-12 text-center mt-30" style="font-family: 'klavika';">
                                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-10 col-lg-6 col-xl-7 mt-50 align-items-center">
                        <img src="<?= Yii::$app->homeUrl ?>img/notebook.png" style="width: 100%">
                    </div>
                </div>
            </span>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>