<?php
use common\helpers\Path;
use common\models\ModelMaster;
?>

<?php
if (isset($footer) && count($footer) > 0) {
    $i = 0;
    foreach ($footer as $h) :
?>
<div class="col-12 pr12 blue pt-20 pb-10">
    <div class="row">
        <div class="col-1g-10 col-md-10 col-12 text-update">
            <p><?= $h['title'] ?></p>
            <p> <?= $h['detail'] ?></p>
        </div>
        <div class="col-1g-10 col-md-10 col-12 text-project">
            <p><?= $h['detail2'] ?></p>
        </div>
        <div class="col-lg-5 col-md-6 col-12 mt-10 input-group-form">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control input-your-email" placeholder="Your Email address"
                    aria-label="Your Email address with two button addons">
                <button class="btn btn-primary" type="button"><?= $h['detail3'] ?></button>
            </div>
            <br>
        </div>
    </div>
</div>
<div class="col-12 pr12">
    <div class="row">
        <div class="offset-lg-6 col-lg-6 col-12 text-center">
            <img src="<?= Path::backendUrl() . $h['image'] ?>" class="image-book">
        </div>
    </div>
</div>

<?php
        $i++;
    endforeach;
}
?>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $footerContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>