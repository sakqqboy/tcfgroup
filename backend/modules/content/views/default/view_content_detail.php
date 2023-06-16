<?php
    $this -> title = 'View Content Detail';
?>
<div class="row mt-3">
    <div class="col-lg-12 mt-4 border border-dark bd-position">
      <h2 class="text-center font-title mt-4">
         MY CONTENT
      </h2>
      <img class="img-size mt-3" src="<?= Yii::$app->homeUrl . $contentDetail['image'] ?>">
      <div class="mt-4">
         <span class="font-sub"> Title : </span>
         <span class="font-body"><?= isset($contentDetail->title) ? $contentDetail->title : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail : </span>
         <span class="font-body"><?= isset($contentDetail->detail) ? $contentDetail->detail : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 2 : </span>
         <span class="font-body"> <?= isset($contentDetail->detail2) ? $contentDetail->detail2 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 3 : </span>
         <span class="font-body"> <?= isset($contentDetail->detail3) ? $contentDetail->detail3 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 4 : </span>
         <span class="font-body"> <?= isset($contentDetail->detail4) ? $contentDetail->detail4 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 5 : </span>
         <span class="font-body"> <?= isset($contentDetail->detail5) ? $contentDetail->detail5 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 6 : </span>
         <span class="font-body"> <?= isset($contentDetail->detail6) ? $contentDetail->detail6 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> Detail 7 : </span>
         <span class="font-body"> <?= isset($contentDetail->detail7) ? $contentDetail->detail7 : '' ?></span>
      </div>
      <div>
         <span class="font-sub"> URL : </span>
         <span class="font-body"> <?= isset($contentDetail->url) ? $contentDetail->url : '' ?></span>
      </div>
      <div class="mt-2"></div>
   </div>
</div>