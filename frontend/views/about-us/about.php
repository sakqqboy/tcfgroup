<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'About Us';
?>



<div class="col-12">
    <?php
    if (isset($vision) && count($vision) > 0) {
        $i = 0;
        foreach ($vision as $ut) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $ut['image'] ?>" class="image-Vision-page">
    </div>
    <div class="col-12">
        <div class="col-12 text-Our">
            <?= $ut['title'] ?>
        </div>
        <div class="col-12 text-vision">
            <?= $ut['detail'] ?>
        </div>
        <div class="col-12 vlog-1">
            <?= $ut['detail2'] ?>
        </div>
        <div class="col-12 title-color">
            <p><?= $ut['detail3'] ?></p>
        </div>
    </div>
    <?php
        endforeach;
    }
    ?>

</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $visionContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>



<div class="col-12">
    <?php
    if (isset($existence) && count($existence) > 0) {
        $i = 0;
        foreach ($existence  as  $ce) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $ce['image'] ?>" class="image-bali">
    </div>

    <div class="col-12">
        <div class="col-12 box-data-1">
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $ce['title'] ?>
        </div>
        <div class="col-12 box-data-2">
            <?= $ce['detail'] ?>
        </div>
        <div class="col-12 box-data-3">
            <?= $ce['detail2'] ?>
        </div>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $existenceContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>
<div class="col-12">
    <?php
    if (isset($strategy) && count($strategy) > 0) {
        $i = 0;
        foreach ($strategy  as  $tr) :
    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $tr['image'] ?>" class="image-yogendra-singh">
    </div>
    <div class="col-12  Block-1">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $tr['title'] ?>
    </div>
    <div class="col-12 Block-2">
        <?= $tr['detail'] ?>
    </div>
    <div class="col-12 Block-3">
        <?= $tr['detail2'] ?>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $strategyContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>

<div class="col-12">
    <?php

    if (isset($should) && count(($should)) > 0) {
        $i = 0;
        foreach ($should as  $ld) :

    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() ?>image/whale2.png" class="image-whale">
    </div>
    <div class="col-12 Type-home-page-one">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $ld['title'] ?>
    </div>
    <div class="col-12 Type-home-page-two">
        <?= $ld['detail'] ?>
    </div>
    <?php

            $i++;
        endforeach;
    }

    ?>
</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $shouldContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>
<div class="col-12 pr12">
    <?php
    if (isset($consultinggroup) && count($consultinggroup) > 0) {
        $i = 0;
        foreach ($consultinggroup  as  $group) :
    ?>
    <div class="col-12 padding-box">
        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $group['title'] ?>
    </div>
    <div class="col-12">
        <div class="col-8 padding-text mb-5">
            <?= $group['detail'] ?>
        </div>
    </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $group['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
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

<div class="col-12 pr12 mt-50 form-text-footer">
    <div class="row">
        <?php
        if (isset($footercontact) && count($footercontact) > 0) {
            $i = 0;
            foreach ($footercontact as $ft) :
        ?>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="col-12 title-more">
                <p><?= $ft['title'] ?></p>
            </div>
            <div class="col-12 title-form-text">
                <p><a href="#" class="no-underline"><?= $ft['detail'] ?> </a></p>
                <p><a href="#" class="no-underline"><?= $ft['detail2'] ?></a></p>
                <p><a href="#" class="no-underline"><?= $ft['detail3'] ?></a></p>
                <p><a href="#" class="no-underline"><?= $ft['detail4'] ?></a></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 form-tcf">
            <div class="col-12">
                <span class="title-tcf"><?= $ft['detail5'] ?></span>
                <p class="title-tcf1"><?= $ft['detail6'] ?></p>
            </div>
        </div>

        <?php
                $i++;
            endforeach;
        }
        ?>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="col-12 media-picture">
                Follow Career in
                <a href="#"><i class="fa fa-facebook-square square-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square square-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram aquare-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin-square square-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube-play square-youtube" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <?php
    if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ftContact['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>