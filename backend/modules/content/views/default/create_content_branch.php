<?php
    $this -> title = 'Create Content';
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
                CREATE CONTENT<br>
            </div>
            <div class="padding">
                <div class="col-lg-12 font-body h4">
                    CONTENT NAME<br>
                    <input type="text" name="contentname" id="member-address" class="font-input form-control col-lg-6">
                </div>
                <div class="col-lg-12 font-body h4">
                    TITLE<br>
                    <input type="text" name="title" id="member-address" class="font-input form-control col-lg-6">
                </div>
                <div class="col-lg-12 font-body h4">
                    DETAIL<br>
                    <textarea class="font-input form-control" name="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-lg-12 font-body h4">
                    BRANCH<br>
                    <select class="font-input form-control col-lg-6" name="branchid" required>
                        <option value="">Please select your branch</option>
                        <?php 
                            if(isset($branchs) && count($branchs) > 0) {
                                foreach ($branchs as $x) :
                        ?>
                        <option value="<?= $x['branchId'] ?>"><?= $x['branchName'] ?></option>
                        <?php 
                                endforeach;
                            }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-success font-button" href="<?=Yii::$app->homeUrl.'content/default/create-content-branch'?>">Submit</button>
                <div class="col-lg-12">
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>