<?php

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;
use backend\models\tokyoconsulting\Section;
use common\models\ModelMaster;

    $this -> title = 'View Team';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY Section
        </div>
        <div class="mt-2">
           <span class="font-sub"> Name : </span>
           <span class="font-body"><?= isset($team -> teamName) ? $team -> teamName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Branch : </span>
            <span class="font-body"><?= Branch::branchName($team -> branchId) ?></span>
        </div>
        <div>
            <span class="font-sub"> Section : </span>
            <span class="font-body"><?= Section::sectionName($team -> sectionId) ?></span>
        </div>
        <div>
           <span class="font-sub"> Detail : </span>
           <span class="font-body"><?= isset($team -> teamDetail) ? $team -> teamDetail : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Status : </span>
           <span class="font-body"><?= isset($team -> status) ? $team -> status : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Create date : </span>
           <span class="font-body"><?= isset($team -> createDateTime) ? ModelMaster::engDate($team -> createDateTime, 2) : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Update date : </span>
           <span class="font-body"><?= isset($team -> updateDateTime) ? ModelMaster::engDate($team -> updateDateTime, 2) : '' ?></span>
        </div>
        <div class="mt-2"></div>
    </div>
</div>