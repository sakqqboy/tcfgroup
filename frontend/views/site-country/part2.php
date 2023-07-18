<?php

use common\helpers\Path;
use common\models\ModelMaster;

if (isset($topic) && !empty($topic) > 0) {
	$i = 0;
?>
	<div class="col-12 title-Trending">
		<img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $topic['title'] ?>
	</div>
<?php
}
?>
<div class="row mt-50 procress">
	<?php
	if (isset($topicDetail) && count($topicDetail) > 0) {
		$i = 0;
		foreach ($topicDetail as $td) :
	?>
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" id="content2-siteindex-<?= $i ?>" onmouseover="javascript:showSiteindex2(<?= $i ?>)">
				<div class="card-body">
					<div class="col-12 body-copy1"></div>
					<p class="home1"><?= $td['title'] ?></p>
					<p class="home2"><?= $td['detail'] ?></p>
				</div>
			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" style="display:none;" id="content2-siteindex2-<?= $i ?>" onmouseleave="javascript:showSiteindex1(<?= $i ?>)">
				<div class="card-body">
					<div class="col-12 body-copy"></div>
					<p class="home1-copy"><?= $td['title'] ?></p>
					<p class="home2-copy"><?= $td['detail'] ?></p>
				</div>
			</div>
	<?php
			$i++;
		endforeach;
	}
	?>
</div>
<?php
if ($canEdit == 1 && $userInThisBranch == 1 && isset($topic["contentBranchId"])) { ?>
	<div class="col-12 text-end mt-10">
		<a class="bt-line btn btn-warning" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $topic['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
	</div>
<?php
}
?>