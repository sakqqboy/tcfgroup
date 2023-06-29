<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'People';
?>

<div class="col-12">
    <?php
    if (isset($people) && count($people) > 0) {
        foreach ($people as $at) :

    ?>
            <img src="<?= Path::backendUrl() . $at['image'] ?>" class="image-working">
            <div class="col-12 title-At">
                <?= $at['title'] ?>
                <?= $at['detail'] ?>
            </div>
            <div class="col-10 text-center form-data-block">
                <div class="col-12">
                    <?= $at['detail2'] ?>
                </div>
            </div>
    <?php

        endforeach;
    }
    ?>
</div>
<div>
<?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $at['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
    ?>
</div>

<div class="col-12 pr12 blackground-black mt-50 ">
    <div class="row">
        <?php
        if (isset($kuno) && count($kuno) > 0) {
            $i = 0;
            foreach ($kuno as $uno) :
        ?>
                <div class="col-lg-6 col-md-6 col-12 OUR-PEOPLE">
                    <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $uno['title'] ?>
                    <img src="<?= Path::backendUrl() . $uno['image'] ?>" class="image-no">
                    <p class="text-name-kuno"><?= $uno['detail'] ?></p>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <?php
        if (isset($textmain) && count($textmain) > 0) {
            $i = 0;
            foreach ($textmain as $our) :
        ?>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="<?= Path::backendUrl() . $our['image'] ?>" class="image-icon-name">
                    <div class="col-12 title-empowering">
                        <p> <?= $our['title'] ?> </p>
                        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $our['detail'] ?></p>
                    </div>
                </div>

        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div>
<?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $our['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
    ?>
</div>

<div class="col-12  title-employees mt-50">
    <?php
    if (isset($global) && count($global) > 0) {
        $i = 0;
        foreach ($global as $meetting) :
    ?>
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $meetting['title'] ?>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div class="col-12 pr12 tcf-type">
    <div class="row">
        <?php
        if (isset($global) && count($global) > 0) {
            $i = 0;
            foreach ($global as $meetting) :
        ?>
                <div class="col-md-3 col-5 Global-TCF">
                    <?= $meetting['detail'] ?>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
        <div class="col-md-3 col-5">
            <select class="form-select" aria-label="Default select example">
                <?php
                if (isset($insider) && count($insider) > 0) {
                    $i = 0;
                    foreach ($insider as $incountry) :
                        if ($i < 26) {
                ?>
                            <option selected><?= $incountry['title'] ?></option>
                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
            </select>
        </div>
    </div>
</div>
<div class="col-12">
    <?php
    if (isset($global) && count($global) > 0) {
        $i = 0;
        foreach ($global as $meetting) :
    ?>
            <img src="<?= Path::backendUrl() . $meetting['image'] ?>" class="image-ceo">
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
<?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $meetting['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
    ?>
</div>


<div class="col-12 title-culture">
    <?php
    if (isset($global) && count($global) > 0) {
        $i = 0;
        foreach ($global as $meetting) :
    ?>
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $meetting['detail2'] ?>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>


<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($personnel) && count($personnel) > 0) {
            $i = 0;
            foreach ($personnel as $person) :
        ?>
                <div class="col-7">
                    <img src="<?= Path::backendUrl() . $person['image'] ?>" class="image-code">
                </div>
                <div class="col-5">
                    <div class="card card-title1">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="col-12">
                                    <h5 class="card-title-home"><?= $person['title'] ?></h5>
                                </div>
                                <div class="col-12">
                                    <p class="title1"><?= $person['detail'] ?></p>
                                </div>
                                <div class="col-12">
                                    <p class="title2"> <?= $person['detail2'] ?> </p>
                                </div>
                                <div class="col-12 title3">
                                    <a href="#"> <?= $person['detail3'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div>
<?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $person['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
    ?>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($doctrines) && count($doctrines) > 0) {
            $i = 0;
            foreach ($doctrines as $work) :

        ?>
                <div class="col-5">
                    <div class="card card-title2">
                        <div class="card-body">
                            <div class="col-12">
                                <h5 class="card-title-page"><?= $work['title'] ?></h5>
                            </div>
                            <div class="col-12">
                                <p class="title4"><?= $work['detail'] ?></p>
                            </div>
                            <div class="col-12">
                                <p class="title5"> <?= $work['detail2'] ?> </p>
                            </div>
                            <div class="col-12 title6">
                                <a href="#"><?= $work['detail3'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <img src="<?= Path::backendUrl() . $work['image'] ?>" class="image-philosophy">
                </div>
        <?php

                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div>
<?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $work['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
    ?>
</div>

<div class="col-12 stye-people"></div>