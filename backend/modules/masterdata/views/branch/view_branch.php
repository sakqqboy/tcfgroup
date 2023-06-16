<?php

use backend\models\tokyoconsulting\Country;

    $this -> title = 'View Branch';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY Branch
        </div>
        <img class="img-size mt-3" src="<?= Yii::$app->homeUrl . $branch['flag'] ?>">
        <div class="mt-4">
           <span class="font-sub"> Branch : </span>
           <span class="font-body"><?= isset($branch -> branchName) ? $branch -> branchName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Country : </span>
            <span class="font-body"><?= Country::countryName($branch -> countryId) ?></span>
        </div>
        <div class="mt-2"></div>
    </div>
</div>