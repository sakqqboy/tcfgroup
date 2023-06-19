<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>

<div class="col-12 site-login">
    <div class="container">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55);backdrop-filter: blur(30px);">
                    <div class="card-body p-5 shadow-5 text-center">
                        <p class="name-login mb-5">LoG In</p>

                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'method' => 'POST',
                            'action' => Yii::$app->homeUrl . 'site/login'
                        ]); ?>
                        <div class="form-outline mb-3 form-outline1">
                            <label class="form-label" for="form3Example3"> <i class="fa fa-user log-assome" aria-hidden="true"></i> Username</label>
                            <input type="text" id="email" class="form-control" name="LoginForm[username]">
                        </div>
                        <div class="form-outline mb-3 form-outline1">
                            <label class="form-label" for="form3Example4"> <i class="fa fa-lock log-assome" aria-hidden="true"></i> Password</label>
                            <input type="password" id="password" class="form-control" name="LoginForm[password]">

                        </div>

                        <div class="row justify-content-center my-3 px-3">
                            <button class="btn-block btn-color">Login</button>
                        </div>

                        <?php ActiveForm::end(); ?>

                        <div class="col-12 text-center">
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-google" aria-hidden="true"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fa fa-github-square" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5  mb-lg-0">
                <img src="<?= Yii::$app->homeUrl ?>image/col-12.jpg" class="width-col rounded-4 shadow-4">
            </div>
        </div>
    </div>
</div>