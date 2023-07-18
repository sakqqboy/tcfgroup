<?php

use common\helpers\Path;
use common\models\ModelMaster;

if (isset($bannerDetail) && !empty($bannerDetail) > 0) {

	$i = 0;

	if ($canEdit == 1 && $userInThisBranch == 1) {
?>
		<div class="col-6" style="margin-top: 100px;margin-bottom:-70px;z-index:99;position:relative;">
			<div class="form-check form-switch">
				<input class="form-check-input" type="checkbox" role="switch" id="switch-admin-branch-part1" onchange="javascript:showContentBranch('admin-branch-part1', <?= $branchId ?>)" value=" <?= $isShow == 1 ? '0' : '1' ?>" <?= $isShow == 1 ? 'checked' : '1' ?>>
				<label class="form-check-label" for="switch-admin-branch-part1">Show</label>
			</div>
		</div>
	<?php
	}
	?>
	<div class="col-12">
		<img src="<?= Path::backendUrl() . $bannerDetail['image'] ?>" class="image-TCG">
	</div>
	<div class="offset-1 col-10 text-star">
		<?= $bannerDetail['detail'] ?> <br>
		<?= $bannerDetail['detail2'] ?> <br>
		<?= $bannerDetail['detail3'] ?><br>
		<button type="button" class="btn btn-primary button-start"><?= $bannerDetail['detail4'] ?></button>
	</div>
<?php

} ?>
<div class="row">
	<?php
	if ($canEdit == 1 && $userInThisBranch == 1 && isset($banner['contentBranchId'])) { ?>
		<div class="col-12 text-end mt-10">
			<a class="bt-line btn btn-warning" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $banner['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
		</div>
	<?php
	}
	?>
</div>