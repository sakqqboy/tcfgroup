<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use yii\bootstrap5\ActiveForm;

$this->title = 'Sign in';


$form = ActiveForm::begin([

    'id' => 'Formsignup',

    'action' => Yii::$app->homeUrl . 'site-country/formsignup',

    'method' => 'post'

]);
?>


<div class="col-12 pr12 background-gardient" style="margin-top: 90px;">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="<?= Yii::$app->homeUrl ?>img/sign-up.png" class="width-12">
        </div>
        <div class="col-lg-1">
            <img src="<?= Yii::$app->homeUrl ?>img/woman-img.png" class="width-woman">
        </div>
        <div class="col-lg-5 col-md-6 col-12">
            <div class="p-3 mb-5  rounded shadowformsign" style="border-radius: 10px;">
                <div class="col-12 text-center">
                    <span class="pg-s">S</span>
                    <span class="pg-i">I</span>
                    <span class="pg-g">G</span>
                    <span class="pg-n">N</span>
                    <span class="pg-u">U</span>
                    <span class="pg-p">P</span>
                </div>
                <div class="row">
                    <div class="col-6 mt-20 pl-50">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user con-color" aria-hidden="true"></i></span>
                            <input type="text" class="form-control con-color1" placeholder="Firstname" name="firstName" aria-label="Firstname" aria-describedby="addon-wrapping" required>
                        </div>
                    </div>
                    <div class="col-6 mt-20 lastname-cs">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user con-color" aria-hidden="true"></i></span>
                            <input type="text" class="form-control con-color1" placeholder="Lastname" name="lastName" aria-label="lastname" aria-describedby="addon-wrapping" required>
                        </div>
                    </div>
                </div>
                <div class="col-11 mt-20 pl-40">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user con-color" aria-hidden="true"></i></span>
                        <input type="text" class="form-control con-color1" placeholder="Username" name="username" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-11 mt-20 pl-40">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user con-color" aria-hidden="true"></i></span>
                        <input type="text" class="form-control con-color1" placeholder="Nickname" name="nickName" aria-label="Nickname" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-11 mt-20 pl-40">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="birthday"><i class="fa fa-birthday-cake con-color" aria-hidden="true"></i></span>
                        <input type="date" class="form-control con-color1" placeholder="Birthday" name="birthDate" required>
                    </div>
                </div>
                <div class="col-11 mt-20 pl-40">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="email"><i class="fa fa-envelope con-color" aria-hidden="true"></i></span>
                        <input type="email" class="form-control con-color1" placeholder="Email" aria-label="Email" name="email" required>
                    </div>
                </div>
                <div class="col-11 mt-20 pl-40">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text"><i class="fa fa-unlock-alt con-color" aria-hidden="true"></i></span>
                        <input id="password_hash" type="password" class="form-control con-color1" placeholder="password" name="password_hash">
                        <span class="input-group-text" onmousedown="javascript:showPassword2()" onmouseup="javascript:setPassword2()"><i class="fa fa-eye curser-eye" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="col-11 mt-20 pl-40">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text"><i class="fa fa-unlock-alt con-color" aria-hidden="true"></i></span>
                        <input id="password3" type="password" class="form-control con-color1" placeholder="Repeat your password" name="password3">
                        <span class="input-group-text" onmousedown="javascript:showPassword3()" onmouseup="javascript:setPassword3()"><i class="fa fa-eye curser-eye" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="col-11 mt-20 pl-40">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text"><i class="fa fa-globe con-color" aria-hidden="true"></i></span>
                        <select class="form-select con-color1" id="country" require>
                            <option selected>Choose country</option>
                            <option value="1">English</option>
                            <option value="2">Thailand</option>
                            <option value="3">Europe</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-info btn-rounded signup mt-20">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>



<?php ActiveForm::end(); ?>