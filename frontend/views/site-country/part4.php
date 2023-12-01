<div class="col-12 title-Trending">
	<?php

	use common\helpers\Path;
	use common\models\ModelMaster;

	if (isset($bangladresh) && count($bangladresh) > 0) {
		$i = 0;
	?>
		<img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $bangladresh['title'] ?>
	<?php
	}
	?>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-12 mt-50">
		<?php
		if (isset($bangladreshDetail) && count($bangladreshDetail) > 0) {
			$i = 0;
		?>
			<div class="row pr12">
				<div class="col-4 title-bangladesh">
					<p><?= $bangladreshDetail['title'] ?></p>
				</div>
				<div class="col-2">
					<img src="<?= Path::backendUrl() . $bangladreshDetail['image'] ?>" class="img-woman">
					<div class="alert alert-secondary  text-center">
						<p class="table-calendar"> <i class="fa fa-calendar" aria-hidden="true"> June 2023</i></p>
						<p>S&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;S
						</p>
						<p> 3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5 <button class="btn btn-primary calendar-button" type="button">6</button>&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;9
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-6">
					<div id="countdown">
						<ul>
							<li class="li"><span class="typedayss" id="days"></span><span class="daytime">days</span></li>
							<li class="li"><span class="typedayss" id="hours"></span><span class="daytime">Hours</span></li>
							<li class="li"><span class="typedayss" id="minutes"></span><span class="daytime">Minutes</span></li>
							<li class="li"><span class="typedayss" id="seconds"></span><span class="daytime">Seconds</span></li>
						</ul>
					</div>
					<div id="content" class="emoji">
						<span class="emo">🥳</span>
						<span class="emo">🎉</span>
						<span class="emo">🎂</span>
					</div>
				</div>
			</div>
		<?php
		}
		?>
		<?php
		if ($canEdit == 1 && $userInThisBranch == 1) { ?>
			<div class="col-12 text-end">
				<a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $bangladreshDetail['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
			</div>
		<?php
		}
		?>
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<?php
		if (isset($webinar) && count($webinar) > 0) {
			$i = 0;
		?>
			<div class="col-12 title-join">
				<?= $webinar['title'] ?>
			</div>
			<div class="col-12 title-topic mt-10">
				<p> <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $webinar['detail'] ?></p>
			</div>
		<?php
		}
		?>
		<div class="accordion mt-20" id="accordionExample">
			<?php
			if (isset($webinarDetail) && count($webinarDetail) > 0) {
				$i = 1;
				foreach ($webinarDetail as $w) :
			?>
					<div class="accordion-item">
						<h2 class="accordion-header" id="<?= $w['contentBranchDetailId'] ?>">
							<button class="<?= $i == 1 ? 'accordion-button' : 'accordion-button collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#a<?= $w['contentBranchDetailId'] ?>" aria-expanded="true" aria-controls="<?= $w['contentBranchDetailId'] ?>">
								<?= $w['title'] ?>
							</button>
						</h2>
						<div id="a<?= $w['contentBranchDetailId'] ?>" class="accordion-collapse collapse <?= $i == 1 ? 'show' : '' ?>" aria-labelledby="<?= $w['contentBranchDetailId'] ?>" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong><?= $w['detail'] ?></strong><br>
								<?= $w['detail2'] ?>
							</div>
						</div>
					</div>
			<?php
					$i++;
				endforeach;
			}
			?>
		</div>

		<div class="col-12"><button type="button" class="btn btn-primary button-register mt-30">Register for
				Webinar</button>
			<p class="title-sign-in"><?= $webinar['title'] ?><a href="#sign in" class="no-underline">Sign in</a></p>
		</div>
		<?php
		if ($canEdit == 1 && $userInThisBranch == 1) { ?>
			<div class="col-12 text-end">
				<a class="btn btn-warning  bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $webinar['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
			</div>
		<?php
		}
		?>

	</div>
</div>