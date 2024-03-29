<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'webinar-video';
?>

<div class="col-12 background-1">
    <div class="col-12 text-center">
        <?php
        if (isset($pagewebinarvideo) && count($pagewebinarvideo) > 0) {
            $i = 0;
            foreach ($pagewebinarvideo as $pagevideo) :
        ?>
        <img src="<?= Path::backendUrl() . $pagevideo['image'] ?>" class="img-20">
        <img src="<?= Path::backendUrl() ?>image/img/img21.png" class="img-21">
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
    <div>
        <?php
            if ($admin == 1) { 
        ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $pagevideo['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
            }
        ?>
    </div>

    <div class="col-12 pr12 page-video1">
        <div class="row">
            <div class="col-1 icon-pause">
                <a href="#" class="no-underline1"><i class="fa fa-pause" aria-hidden="true"></i></a>
            </div>
            <div class="col-8 icon-volume-down">
                <a href="#" class="no-underline1"><i class="fa fa-volume-down" aria-hidden="true"></i></a>
            </div>
            <div class="col-1 icon-cloud-download">
                <a href="#" class="no-underline1"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
            </div>
            <div class="col-2 icon-share-alt">
                <a href="#" class="no-underline1"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 pr12">
        <div class="row">
            <?php
            if (isset($namevideo) && count($namevideo) > 0) {
                $i = 0;
                foreach ($namevideo as $name1) :
            ?>
            <div class="col-6 title-video1 text-start">
                <?= $name1['title'] ?>
            </div>
            <div class="col-6 title-video2 text-end">
                <div class="row">
                    <div class="col-7">
                        <h4 class="font-video1"> <?= $name1['detail'] ?></h4>
                        <h6 class="font-video2"> <?= $name1['detail2'] ?></h6>
                    </div>
                    <div class="col-2">
                        <img src="<?= Path::backendUrl() . $name1['image'] ?>" class="img-veona">
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
</div>
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $name1['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($summary) && count($summary) > 0) {
            $i = 0;
            foreach ($summary  as  $mary) :
        ?>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 title-summary">
                <?= $mary['title'] ?>
            </div>
            <div class="col-12 title-summary1">
                <?= $mary['detail'] ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 title-related1">
                <?= $mary['detail2'] ?>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <img src="<?= Path::backendUrl() ?>image/img/video2.png" class="img-video">
                    </div>
                    <div class="col-6 mt-10">
                        <div class="col-12 text-art">
                            <?= $mary['detail3'] ?>
                        </div>
                        <div class="col-12 mt-10 picture-star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="col-12 mt-10 font-mins">
                            <?= $mary['detail4'] ?>
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
            if ($admin == 1) { 
        ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $mary['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
            }
        ?>
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
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $playlist['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
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
            <div>
                <?php
                    if ($admin == 1) { 
                ?>
                    <div class=" col-12 text-end mt-1 mb-3">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $py['contentId']]) ?>" target="_blank">Edit</a>
                    </div>
                <?php
                    }
                ?>
            </div>
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
            <div>
                <?php
                    if ($admin == 1) { 
                ?>
                    <div class=" col-12 text-end mt-1 mb-3">
                            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $pla['contentId']]) ?>" target="_blank">Edit</a>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mt-50 text-center">
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    Page 1 of 13
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($subwebinar) && count($subwebinar) > 0) {
            $i = 0;
            foreach ($subwebinar as $subfree) :
        ?>
        <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
            <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $subfree['title'] ?>
        </div>
        <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
            <?= $subfree['detail'] ?>
        </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="accordion mt-20 pl-50" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What are topic of webinar ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>How can i join ?</strong>
                            <p>It is as easy as to join through one single click by going to the following link -</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is there any certification associated ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
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

                        <div class="col-12 text-center mt-50 account-signin">
                            - Or signup with your email -
                        </div>

                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Full name</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"
                                        aria-hidden="true"> </i></span>
                                <input type="text" class="form-control" placeholder="Email" aria-label="email"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Password</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="password" aria-label="Password"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"><a href="#"><i class="fa fa-eye-slash"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                        <div class="mb-3 form-check mt-20">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> I agreed to the Terms &
                                Conditions</label>
                        </div>
                        <div class="col-7 mt-10">
                            <button type="submit" class="btn btn-primary"> Register for Webinar</button>
                            <p class="account-signin">Already have account? <a href="#" class="no-underline1"><span
                                        class="sign-in"> Sign in</span></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>