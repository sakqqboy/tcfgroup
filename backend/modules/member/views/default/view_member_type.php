<?php

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;
use backend\models\tokyoconsulting\Section;
use common\models\ModelMaster;

    $this -> title = 'View Member Type';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY MEMBER 
        </div>
        <div class="mt-2">
           <span class="font-sub"> ID : </span>
           <span class="font-body"><?= isset($membertype -> memberTypeId) ? $membertype -> memberTypeId : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Type : </span>
           <span class="font-body"><?= isset($membertype -> memberTypeName) ? $membertype -> memberTypeName : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Status : </span>
           <span class="font-body"><?= isset($membertype -> status) ? $membertype -> status : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Create date : </span>
           <span class="font-body"><?= isset($membertype -> createDatetime) ? ModelMaster::engDate($membertype -> createDatetime, 2) : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Update date : </span>
           <span class="font-body"><?= isset($membertype -> updateDatetime) ? ModelMaster::engDate($membertype -> updateDatetime, 2) : '' ?></span>
        </div>
        <div class="mt-2"></div>
    </div>
</div>