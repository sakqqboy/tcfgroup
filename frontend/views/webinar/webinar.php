<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'webinar';
?>


<div class="col-12 pr12 seccondary-background">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12">
                <?php
                if (isset($webinarvideo) && count($webinarvideo) > 0) {
                    $i = 0;
                    foreach ($webinarvideo as $binar) :
                ?>
                        <img src="<?= Path::backendUrl() . $binar['image'] ?>" class="img-webinar">
                        <span class="badge bg-primary image8"> <a href="#" class="no-underline1"><i class="fa fa-play-circle-o play-y" aria-hidden="true"></i> </a> When People changes Their
                            Perspective</span>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($webinarvideo) && count($webinarvideo) > 0) {
                $i = 0;
                foreach ($webinarvideo   as   $binar) :
            ?>
                    <div class="col-10 page-webinar">
                        <?= $binar['detail'] ?>
                    </div>
                    <div class="col-10 page-webinar-home1">
                        <?= $binar['detail2'] ?>
                    </div>
            <?php
                endforeach;
            }
            ?>

            <div class="row mt-50">
                <?php
                if (isset($everyweek) & count($everyweek) > 0) {
                    $i = 0;
                    foreach ($everyweek as $icon) :
                ?>
                        <div class="col-4 detail-calendar">
                            <div class="col-12">
                                <i class="fa fa-calendar form-calendar1" aria-hidden="true"></i>
                                <p class="text-1"> <?= $icon['title'] ?></p>
                                <p class="text-2"><?= $icon['detail'] ?></p>
                            </div>
                        </div>
                <?php

                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if (isset($question) & count($question) > 0) {
                    $i = 0;
                    foreach ($question as $icon2) :
                ?>
                        <div class="col-4 detail-liveqa">
                            <i class="fa fa-comments-o form-comment" aria-hidden="true"></i>
                            <p class="text-1"> <?= $icon2['title'] ?></p>
                            <p class="text-2"> <?= $icon2['detail'] ?></p>
                        </div>
                <?php

                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if (isset($mins) & count($mins) > 0) {
                    $i = 0;
                    foreach ($mins as $icon3) :
                ?>
                        <div class="col-4">
                            <i class="fa fa-clock-o form-clock" aria-hidden="true"></i>
                            <p class="text-1"> <?= $icon3['title'] ?></p>
                            <p class="text-2"> <?= $icon3['detail'] ?></p>
                            
                        </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12" style="margin-top: 80px;">
    <div class="col-12 title-Trending">
        <?php
        if (isset($bangladresh) && count($bangladresh) > 0) {
            $i = 0;
            foreach ($bangladresh as $la) :
        ?>
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $la['title'] ?>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-50">
                <?php
                if (isset($bangladresh) && count($bangladresh) > 0) {
                    $i = 0;
                    foreach ($bangladresh as $la) :
                ?>
                        <div class="row">
                            <div class="col-4 title-bangladesh">
                                <p><?= $la['detail'] ?> </p>
                            </div>
                            <div class="col-2">
                                <img src="<?= Path::backendUrl() . $la['image'] ?>" class="img-woman">
                                <div class="alert alert-secondary  text-center">
                                    <p class="table-calendar"> <i class="fa fa-calendar" aria-hidden="true"> June 2023</i></p>
                                    <p> S&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;S
                                    </p>
                                    <p> 3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5 <button class="btn btn-primary calendar-button" type="button">6</button>&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;9
                                    </p>
                                </div>
                            </div>

                            <div class="col-6 img-iconday">
                                <img src="<?= Path::backendUrl() ?>image/img/button-1.png" class="img-button">
                                <img src="<?= Path::backendUrl() ?>image/img/button-2.png" class="img-button">
                                <img src="<?= Path::backendUrl() ?>image/img/button-4.png" class="img-button">
                                <img src="<?= Path::backendUrl() ?>image/img/button-3.png" class="img-button">
                            </div>
                        </div>
                <?php
                        $i++;
                    endforeach;
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
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="accordion mt-20" id="accordionExample">
                            <?php
                            if (isset($webinarDetail) && count($webinarDetail) > 0) {
                                $i = 1;
                                foreach ($webinarDetail as $w) :
                            ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="<?= $w['contentDetailId'] ?>">
                                            <button class="<?= $i == 1 ? 'accordion-button' : 'accordion-button collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#a<?= $w['contentDetailId'] ?>" aria-expanded="true" aria-controls="<?= $w['contentDetailId'] ?>">
                                                <?= $w['title'] ?>
                                            </button>
                                        </h2>
                                        <div id="a<?= $w['contentDetailId'] ?>" class="accordion-collapse collapse <?= $i == 1 ? 'show' : '' ?>" aria-labelledby="<?= $w['contentDetailId'] ?>" data-bs-parent="#accordionExample">
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
                        <?php
                        if (isset($register) && count($register) > 0) {
                            $i = 0;
                            foreach ($register as $regis) :
                        ?>
                                <button type="button" class="btn btn-primary button-register mt-30"> <?= $regis['title'] ?></button>
                                <p class="title-sign-in"> <?= $regis['detail'] ?><a href="#sign in" class="no-underline">
                                        <?= $regis['detail2'] ?></a></p>

                        <?php
                            endforeach;
                        }
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12 mt-50">
    <div class="row">
        <?php
        if (isset($webinarplaylist) && count($webinarplaylist) > 0) {
            $i = 0;
            foreach ($webinarplaylist  as $playlist) :
        ?>
                <div class="col-lg-4 col-md-6 col-12 title-Trending">
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $playlist['title'] ?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 title-always">
                    <?= $playlist['detail'] ?>
                </div>
        <?php
            endforeach;
        }
        ?>
    </div>
    <form class="row g-3 mt-50 form-search1">
        <div class="col-4">
            <input type="search" class="form-control" id="inputsearch" placeholder="Search, Business Videos">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3"><i class="fa fa-search" aria-hidden="true">
                    Search</i></button>
        </div>
        <div class="col-lg-4 col-md-6 col-12 form-sort">
            <select class="form-select" aria-label="Default select example">
                <option selected> Sort by: Latest</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </form>
</div>


<div class="col-12 pr12 mt-50">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 all-player">
            <?php
            if (isset($player1) && count($player1) > 0) {
                $i = 0;
                foreach ($player1 as $py) :
                    if ($i < 5) {
            ?>
                        <div class="row pr12">
                            <div class="col-4">
                                <img src="<?= Path::backendUrl() . $py['image'] ?>" class="img-video">
                            </div>
                            <div class="col-6 mt-10">
                                <div class="col-12 text-art">
                                    <?= $py['title'] ?>
                                </div>
                                <div class="col-12 mt-10 picture-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="col-12 mt-10 font-mins">
                                    <?= $py['detail'] ?>
                                </div>
                            </div>
                            <div class="col-2 mt-20 text-end">
                                <a href="<?= Yii::$app->homeUrl . $py['url'] ?>">
                                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                                </a>
                            </div>
                        </div>
                        <div class="row pr12 mt-10"></div>
                        <div class="row pr12 mt-10"></div>
                        <div class="row pr12 mt-10"></div>
                        <div class="row pr12 mt-10"></div>
            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>

        </div>
        <div class="col-lg-6 col-md-6 col-12 all-play1">
            <?php
            if (isset($player2) && count($player2) > 0) {
                $i = 0;
                foreach ($player2  as  $pla) :
                    if ($i < 5) {

            ?>
                        <div class="row pr12">
                            <div class="col-4">
                                <img src="<?= Path::backendUrl() . $pla['image'] ?>" class="img-video">
                            </div>
                            <div class="col-6 mt-10">
                                <div class="col-12 text-art">
                                    <?= $pla['title'] ?>
                                </div>
                                <div class="col-12 mt-10 picture-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="col-12 mt-10 font-mins">
                                    <?= $pla['detail'] ?>
                                </div>
                            </div>
                            <div class="col-2 mt-20 text-end">
                                <a href="<?= Yii::$app->homeUrl . $pla['url'] ?>">
                                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                                </a>
                            </div>
                        </div>
                        <div class="row pr12 mt-10"></div>
                        <div class="row pr12 mt-10"></div>
                        <div class="row pr12 mt-10"></div>
                        <div class="row pr12 mt-10"> </div>

            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>
            
        </div>
    </div>
</div>

<div class="col-12 mt-50 text-center">
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    <span class="of-13"> Page &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp; of &nbsp;&nbsp;13</span>
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
</div>

<div class="col-12 pr12" style="background-color: #F4F4F6;">
    <div class="col-12 pr12 mt-50">
        <div class="row">
            <?php
            if (isset($participants) && count($participants) > 0) {
                $i = 0;
                foreach ($participants  as $pants) :
            ?>
                    <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
                        <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $pants['title'] ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
                        <?= $pants['detail'] ?>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12 mt-50 pl-40">
            <?php
            if (isset($comment) && count($comment) > 0) {
                $i = 0;
                foreach ($comment as $com) :
                    if ($i < 2) {
            ?>
                        <div class="col-12 mt-20">
                            <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left:20px;">
                                <div class="card-body p-4" style="background-color: #FFFFFF;">
                                    <div class="col-12">
                                        <?= $com['title'] ?>
                                    </div>
                                    <div class="d-flex text-black mt-20">
                                        <div class="flex-shrink-0">
                                            <img src="<?= Path::backendUrl() . $com['image'] ?>" class="img-minnie">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1"><?= $com['detail'] ?></h5>
                                            <p class="mb-2 pb-1" style="color: #4F96FF;">
                                                <?= $com['detail2'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>
            
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-50 pl-30">
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left:20px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to
                            great lengths to assist me. Her patience with me as I continuously changed my plans is to be
                            commended. Her service re-affirms why I always choose to book through an agency instead of
                            directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Path::backendUrl() ?>image/img/veona.png" class="img-veona">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Veona Watson</h5>
                                    <p class="mb-2 pb-1" style="color: #4F96FF;">
                                        @hi.veona
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left:20px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to
                            great lengths to assist me. Her patience with me as I continuously changed my plans is to be
                            commended. Her service re-affirms why I always choose to book through an agency instead of
                            directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Path::backendUrl() ?>image/img/paseka.png" class="img-veona">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Paseka Nku</h5>
                                    <p class="mb-2 pb-1" style="color: #4F96FF;">
                                        @hey.nku
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-50 pl-30">
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; width: 21rem;margin-left: 10px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to
                            great lengths to assist me. Her patience with me as I continuously changed my plans is to be
                            commended. Her service re-affirms why I always choose to book through an agency instead of
                            directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Path::backendUrl() ?>image/img/cherice.png" class="img-veona">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Cherice</h5>
                                    <p class="mb-2 pb-1" style="color: #4F96FF;">
                                        @cherice.me
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; width: 21rem;margin-left: 10px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to
                            great lengths to assist me. Her patience with me as I continuously changed my plans is to be
                            commended. Her service re-affirms why I always choose to book through an agency instead of
                            directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Path::backendUrl() ?>image/img/thais.png" class="img-veona">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Thais Carballal</h5>
                                    <p class="mb-2 pb-1" style="color: #4F96FF;">
                                        @myself.thais
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-50 pl-30">
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left: 30px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            Many thanks for you kind and efficient service. I have already and will definitely continue
                            to recommend your services to others in the future. Wishing you all a </div>
                        <div class="d-flex text-black mt-20">
                            <div class="flex-shrink-0">
                                <img src="<?= Path::backendUrl() ?>image/img/minnie.png" class="img-minnie">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Minnie Horn</h5>
                                <p class="mb-2 pb-1" style="color: #4F96FF;">
                                    @hello.mimmie
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left: 30px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            Baie dankie en weereens dankie vir jou moeite. Ek moet net se - as ons iewers moet slaap en
                            ek kan nie deur SA Places boek nie - dan los ek dit liewer! </div>
                        <div class="d-flex text-black mt-20">
                            <div class="flex-shrink-0">
                                <img src="<?= Path::backendUrl() ?>image/img/vieona.png" class="img-minnie">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Veona Watson</h5>
                                <p class="mb-2 pb-1" style="color: #4F96FF;">
                                    @me.veona
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-50">
        </div>
    </div>
</div>

<div class="col-12 pr12">
    <?php
    if (isset($meet) && count($meet) > 0) {
        $i = 0;
        foreach ($meet as $mee) :
    ?>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $mee['title'] ?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
                    <?= $mee['detail'] ?>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div class="col-12">
    <?php
    if (isset($meet) && count($meet) > 0) {
        $i = 0;
        foreach ($meet as $mee) :
    ?>
            <img src="<?= Path::backendUrl() ?>image/img/ceo.png" class="img-ceo">
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div class="col-12 pr12">
    <?php
    if (isset($meet) && count($meet) > 0) {
        $i = 0;
        foreach ($meet as $mee) :
    ?>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
                    <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $mee['detail2'] ?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
                    <?= $mee['detail3'] ?>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>


<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 data-table-form">
            <div class="accordion mt-20" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What are topic of webinar ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>How can i join ?</strong>
                            <p>It is as easy as to join through one single click by going to the following link -</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is there any certification associated ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-20 form-contact-webinar">
            <div class="alert alert-primary" role="alert">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 bg-white  form-bg-media">
                                <a href="#" class="no-underline-form">
                                    <i class="fa fa-google-plus-square form-gooogle" aria-hidden="true"> </i> Signup
                                    with google
                                </a>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="col-4 bg-white  form-bg-media">
                                <a href="#" class="no-underline-form">
                                    <i class="fa fa-linkedin-square form-linkedin" aria-hidden="true"></i> Signup with
                                    LinkedIn
                                </a>
                            </div>
                        </div>

                        <div class="col-12 text-center account-signin">
                            - Or signup with your email -
                        </div>

                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Full name</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"> </i></span>
                                <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Password</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="password" aria-label="Password" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"><a href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                        <div class="mb-3 form-check mt-20">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> I agreed to the Terms &
                                Conditions</label>
                        </div>
                        <div class="col-7 mt-10">
                            <button type="submit" class="btn btn-primary"> Register for Webinar</button>
                            <p class="account-signin">Already have account? <a href="" class="no-underline1"><span class="sign-in"> Sign in</span></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>