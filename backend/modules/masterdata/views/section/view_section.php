<?php

use backend\models\tokyoconsulting\Branch;
use backend\models\tokyoconsulting\Country;

    $this -> title = 'View Section';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY Section
        </div>
        <div class="mt-2">
           <span class="font-sub"> Name : </span>
           <span class="font-body"><?= isset($section -> sectionName) ? $section -> sectionName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Branch : </span>
            <span class="font-body"><?= Branch::branchName($section -> branchId) ?></span>
        </div>
        <div>
           <span class="font-sub"> Detail : </span>
           <span class="font-body"><?= isset($section -> sectionDetail) ? $section -> sectionDetail : '' ?></span>
        </div>
        <div class="mt-2"></div>
    </div>
</div>