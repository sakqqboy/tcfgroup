<?php

use common\helpers\Path;
use common\models\ModelMaster;

if (isset($import) && !empty($import) > 0) {
	$i = 0;
?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="<?= Path::backendUrl() . $importDetail['image'] ?>" class="img-transportation">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<p class="title-import mt-10"><?= $importDetail['title'] ?></p> <br>
			<p class="title-zero"><?= $importDetail['detail'] ?></p> <br>
			<p class="circle-icon"><a href="#read more" class="no-underline"> <?= $importDetail['detail2'] ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></p>
		</div>
	</div>
<?php
}
?>
<?php
if ($canEdit == 1 && $userInThisBranch == 1 && isset($import['contentBranchId'])) { ?>
	<div class="col-12 text-end">
		<a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $import['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
	</div>
<?php
}
?>