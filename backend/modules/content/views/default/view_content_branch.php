<?php

use backend\models\tokyoconsulting\Branch;
use common\models\ModelMaster;

    $this -> title = 'View Content';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY CONTENT
        </div>
        <div>
           <span class="font-sub"> ID : </span>
           <span class="font-body"><?= isset($contentbranch -> contentBranchId) ? $contentbranch -> contentBranchId : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Name : </span>
            <span class="font-body"><?= isset($contentbranch -> contentName) ? $contentbranch -> contentName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Title : </span>
            <span class="font-body"><?= isset($contentbranch -> title) ? $contentbranch -> title : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Detail : </span>
            <span class="font-body"><?= isset($contentbranch -> detail) ? $contentbranch -> detail : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Branch : </span>
            <span class="font-body"><?= Branch::branchName($contentbranch -> branchId) ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Status : </span>
           <span class="font-body"><?= isset($contentbranch -> status) ? $contentbranch -> status : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Create date : </span>
           <span class="font-body"><?= isset($contentbranch -> createDateTime) ? ModelMaster::engDate($contentbranch -> createDateTime, 2) : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Update date : </span>
           <span class="font-body"><?= isset($contentbranch -> updateDateTime) ?  ModelMaster::engDate($contentbranch -> updateDateTime, 2) : '' ?></span>
        </div>
        <div class="mt-2"></div>
    </div>
</div>