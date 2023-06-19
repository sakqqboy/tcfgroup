<?php
    $this -> title = 'Create Branch';
    use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin([
    'id' => 'create-job-form',
    'method' => 'post',
    'options' => [
        'enctype' => 'multipart/form-data',
    ],

    ]); ?>
    <div class="row mt-3">
        <div class="col-lg-12 mt-4 border border-dark bd-position">
            <div class="col-lg-12 text-center font-title">
                CREATE BRANCH<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    BRANCH NAME<br>
                    <input type="text" name="branchname" class="font-input form-control col-lg-6" required>
                </div>
                <div class="col-lg-12 font-body h4">
                    COUNTRY<br>
                    <select class="font-input form-control col-lg-6" name="countryid" required>
                        <option value="">Please select your country</option>
                        <?php 
                            if(isset($country) && count($country) > 0) {
                                foreach ($country as $x) :
                        ?>
                        <option value="<?= $x['countryId'] ?>"><?= $x['countryName'] ?></option>
                        <?php 
                                endforeach;
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-12 font-body">
                    Flag<br>
                    <input type="file" name="flag" class="font-input col-lg-6" required>
                </div>
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'masterdata/branch/create-branch'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>