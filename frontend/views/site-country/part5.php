<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>
<div class="row"><input type="hidden" id="total-servicesbangladesh" value="<?= count($professionalDetail) ?>">
	<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
		<?php if (isset($professional) && count($professional) > 0) {
		?>
			<div class="col-lg-12 title-Trending"> <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1">
				<?= $professional['title'] ?>
			</div>
			<?php
		}

		if (isset($professionalDetail) && count($professionalDetail) > 0) {
			$i = 0;
			foreach ($professionalDetail as $prode) : if ($i < 6) {

			?>
					<div class="col-lg-12 Company">
						<li onclick="javascript:showBangladresh(<?= $i ?>)"><?= $prode['title'] ?></li>
					</div>
		<?php
				}
				$i++;
			endforeach;
		}
		?>
	</div>

	<div class="col-lg-4 col-md-6 col-sm-6 col-12 show-text-home">
		<?php if (isset($professionalDetail) && !empty($professionalDetail)) {
			$i = 0;
			foreach ($professionalDetail as $profes) :
		?>
				<div class="col-12 text-legal pl-20" style="display: <?= $i == 0 ? '' : 'none' ?>" id="bangladresh-detail-<?= $i ?>">
					<?= $profes['detail'] ?>
				</div>
				<div class="col-12 Our pt-20 pl-20" style="display: <?= $i == 0 ? '' : 'none' ?>" id="bangladresh-detail2-<?= $i ?>"> <?= $profes['detail2'] ?> <br>
					<button type="button" class="btn btn-primary button-text5"><?= $profes['url'] ?></button>
				</div>
		<?php

				$i++;
			endforeach;
		}
		?>
	</div>
	<div class="col-lg-4 col-12">
		<?php if (isset($professionalDetail) && count($professionalDetail) > 0) {
			$i = 0;
			foreach ($professionalDetail as $profes) :

		?>
				<img src="<?= Path::backendUrl() . $profes['image'] ?>" class="img-zgif" style="display: <?= $i == 0 ? '' : 'none' ?>" id="bangladresh-detail3-<?= $i ?>">
		<?php
				$i++;
			endforeach;
		}
		?>
	</div>
</div>
<?php
if ($canEdit == 1 && $userInThisBranch == 1 && isset($professional['contentBranchId'])) { ?>
	<div class="col-12 text-end mt-3 mb-3">
		<a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $professional['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
	</div>
<?php
}
?>