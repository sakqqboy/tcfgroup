<?php

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;
use backend\models\tokyoconsulting\Section;
use common\models\ModelMaster;

    $this -> title = 'View Team Position';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY Team Position
        </div>
        <div class="mt-2">
           <span class="font-sub"> ID : </span>
           <span class="font-body"><?= isset($teamposition -> id) ? $teamposition -> id : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Name : </span>
           <span class="font-body"><?= isset($teamposition -> name) ? $teamposition -> name : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Status : </span>
           <span class="font-body"><?= isset($teamposition -> status) ? $teamposition -> status : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Create date : </span>
           <span class="font-body"><?= isset($teamposition -> createDateTime) ? ModelMaster::engDate($teamposition -> createDateTime, 2) : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Update date : </span>
           <span class="font-body"><?= isset($teamposition -> updateDateTime) ? ModelMaster::engDate($teamposition -> UpdateDateTime, 2) : '' ?></span>
        </div>
        <div class="mt-2"></div>
    </div>
</div>