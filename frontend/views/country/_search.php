<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CountrySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="country-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'countryId') ?>

    <?= $form->field($model, 'countryName') ?>

    <?= $form->field($model, 'continentId') ?>

    <?= $form->field($model, 'flag') ?>

    <?= $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'lng') ?>

    <?php // echo $form->field($model, 'hasBranch') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'createDateTime') ?>

    <?php // echo $form->field($model, 'updateDateTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
