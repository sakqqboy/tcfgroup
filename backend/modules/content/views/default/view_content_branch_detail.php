<?php

use common\models\ModelMaster;

    $this -> title = 'View Content Branch Detail';
?>
<div class="row mt-3">
    <div class="col-lg-12 mt-4 border border-dark bd-position">
      <h2 class="text-center font-title mt-4">
         MY CONTENT
      </h2>
      <img class="img-size mt-3" src="<?= Yii::$app->homeUrl . $contentBranchDetail['image'] ?>">
      <div class="mt-4">
         <span class="font-sub"> Title : </span>
         <span class="font-body"><?= isset($contentBranchDetail->title) ? $contentBranchDetail->title : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail : </span>
         <span class="font-body"><?= isset($contentBranchDetail->detail) ? $contentBranchDetail->detail : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 2 : </span>
         <span class="font-body"> <?= isset($contentBranchDetail->detail2) ? $contentBranchDetail->detail2 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 3 : </span>
         <span class="font-body"> <?= isset($contentBranchDetail->detail3) ? $contentBranchDetail->detail3 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 4 : </span>
         <span class="font-body"> <?= isset($contentBranchDetail->detail4) ? $contentBranchDetail->detail4 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 5 : </span>
         <span class="font-body"> <?= isset($contentBranchDetail->detail5) ? $contentBranchDetail->detail5 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 6 : </span>
         <span class="font-body"> <?= isset($contentBranchDetail->detail6) ? $contentBranchDetail->detail6 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 7 : </span>
         <span class="font-body"> <?= isset($contentBranchDetail->detail7) ? $contentBranchDetail->detail7 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> URL : </span>
         <span class="font-body"> <?= isset($contentBranchDetail->url) ? $contentBranchDetail->url : '' ?></span>
      </div>
      <div class="mt-2">
           <span class="font-sub"> Status : </span>
           <span class="font-body"><?= isset($contentBranchDetail -> status) ? $contentBranchDetail -> status : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Create date : </span>
           <span class="font-body"><?= isset($contentBranchDetail -> createDatetime) ? ModelMaster::engDate($contentBranchDetail -> createDatetime, 2) : '' ?></span>
        </div>
        <div class="mt-2">
           <span class="font-sub"> Update date : </span>
           <span class="font-body"><?= isset($contentBranchDetail -> updateDatetime) ?  ModelMaster::engDate($contentBranchDetail -> updateDatetime, 2) : '' ?></span>
        </div>
      <div class="mt-2"></div>
   </div>
</div>