<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>


<!-- <div class="site-login">
    <div class="mt-5 offset-lg-3 col-lg-6">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block mb-3', 'name' => 'login-button']) ?>

        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div> -->






<div class="col-12">
    <div class="col-12">
        <div class="col-12 name-login">
            <p> LoG In</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="<?= Yii::$app->homeUrl ?>image/completer.jpg" class="background-login">
            </div>
            <div class="col-lg-6 col-md-6 col-12 site-login">
                <div class="">
                    <div class="col-12">
                        <div class="col-12">
                            <img src="<?= Yii::$app->homeUrl ?>image/users.png" class="ic-username">
                        </div>
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <div class="col-6">
                            <label for="exampleInputEmail1" class="form-label login-mail"> <i class="fa fa-user log-assome" aria-hidden="true"></i> Email <span class="login-moon"> *</span></label>
                            <input type="email" class="form-control black-sitelogin" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label login-mail"> <i class="fa fa-lock log-assome" aria-hidden="true"></i> Password <span class="login-moon"> *</span></label>
                            <input type="password" class="form-control black-sitelogin" id="exampleInputPassword1">
                        </div>
                        <div class="col-12  text-center">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block mb-3', 'name' => 'login-button']) ?>
                            <!-- <button type="submit" class="btn btn-primary submit-login"> Log in</button> -->
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>