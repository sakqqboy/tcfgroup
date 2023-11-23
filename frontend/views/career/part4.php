<?php

use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Carousel;

?>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($culture) && count($culture) > 0) {
            $i = 0;
            foreach ($culture as $cu) :
                if ($i < 2) {

        ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="col-12 name-explore">
                            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="img2 mr-1"> <?= $cu['title'] ?>
                        </div>
                        <div class="col-12  mt-10 box-name">
                            <p><?= $cu['detail'] ?></p>
                            <p class="title-end"><a href="#" class="no-underline"><?= $cu['detail2'] ?></a></p>
                        </div>
                    </div>
        <?php
                }
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>
<div>
    <?php
    if ($admin == 1) {
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $cu['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php Carousel::widget([]); ?>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

            <div class="col-12 carousel-inner text-center">
                <?php
                if (isset($video)  && count($video) > 0) {
                    $i = 0;
                    foreach ($video as $vo) :

                ?>
                        <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" data-bs-interval="10000" style="">
                            <div class="col-12">
                                <div class="our-video">
                                    <video class="myvideos" controls="" loop="" src="http://vjs.zencdn.net/v/oceans.mp4" width="auto" height="auto" alt=""></video>
                                </div>
                            </div>
                            <div class="badge bg-primary life-play mt-3"> <a href="#" class="no-underline4"> <i class="fa fa-play-circle play-auto" aria-hidden="true"></i></a>
                                <?= $vo['detail'] ?>
                            </div>
                        </div>


                <?php

                        $i++;
                    endforeach;
                }
                ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <i class="fa fa-chevron-circle-left title-left" aria-hidden="true" style="color: black;font-size: 35px;"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <i class="fa fa-chevron-circle-right title-right" aria-hidden="true" style="color: black;font-size: 35px;"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php
if ($admin == 1) {
?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $vo['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>
</div>