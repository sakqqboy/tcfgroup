<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\tokyoconsulting\part $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="part-create">
    <div class="row bg-create">
        <div class="col-lg-12 box-create" style="margin-bottom:200px">
            <div class="col-lg-12 title-create">
                <?= Html::encode($this->title) ?>
            </div>
            <div class="part-form">
                <div class="row mt-4">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-lg-6 input-part mt-1">
                            <?= $form->field($model, 'partName')->textInput(['maxlength' => true]) ?>
                        </div>

                        <div class="col-lg-6 input-part mt-1">
                            <div class="col-lg-6 input-part">
                                Branch Name
                            </div>
                            <select class="input-part form-control col-lg-6" name="Part[branchId]" required>
                                <option value="">Please select your branch</option>
                                <?php
                                if (isset($branchs) && count($branchs) > 0) {
                                    foreach ($branchs as $x) :
                                ?>
                                        <option value="<?= $x['branchId'] ?>"><?= $x['branchName'] ?></option>
                                <?php
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 input-part mt-1">
                            <?= $form->field($model, 'expirde')->textInput() ?>
                        </div>

                        <div class="col-lg-6 input-part mt-1">
                            <?= $form->field($model, 'status')->textInput() ?>
                        </div>
                    </div>


                    <div class="form-group text-end mt-3">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>