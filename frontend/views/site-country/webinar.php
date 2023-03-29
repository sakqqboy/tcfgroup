<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'webinar';
?>

<div class="col-12 pr12 seccondary-background">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12">
                <img src="<?= Yii::$app->homeUrl ?>img/webinar.png" class="img-webinar">
                <img src="<?= Yii::$app->homeUrl ?>img/image8.png" class="image8">
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-12 page-webinar">
            <p>Discover the practical knowledge of experienced consultants in business </p>
            <div class="col-12 page-webinar-home1">
                Coworking offers beautifully crafted workspaces where people can create, connect, and grow their businesses at prime locations in multiple cities.
            </div>
            <div class="col-12 pr12 mt-50">
                <div class="row">
                    <div class="col-12">
                        <img src="<?= Yii::$app->homeUrl ?>img/calendar.png" class="img-calendar">
                        <p> Every Week</p>
                        <p> We discuss new topic every week</p>
                    </div>
                    <div class="col-12">
                        <img src="<?= Yii::$app->homeUrl ?>img/qa.png" class="img-QA">
                        <p> Live Q&A</p>
                        <p> Live Question and answer session</p>
                    </div>
                    <div class="col-12">
                        <img src="<?= Yii::$app->homeUrl ?>img/time.png" class="img-time">
                        <p> 30 Mins</p>
                        <p> We keep it short for your
                            busy schedule </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12" style="margin-top: 80px;">
    <div class="col-12 title-Trending">
        <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> join Free Live Webinar
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-50">
                <div class="row">
                    <div class="col-5 title-bangladesh">
                        <p>Bangladesh Business
                            Environment </p>
                    </div>
                    <div class="col-2">
                        <img src="<?= Yii::$app->homeUrl ?>img/woman.png" class="img-woman">
                        <div class="alert alert-secondary  text-center">
                            <p class="table-calendar"> <i class="fa fa-calendar" aria-hidden="true"> June 2023</i></p>
                            <p> S&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;S</p>
                            <p> 3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5 <button class="btn btn-primary calendar-button" type="button">6</button>&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;9</p>
                        </div>
                    </div>

                    <div class="col-5">
                        <img src="<?= Yii::$app->homeUrl ?>img/button-1.png" class="img-button">
                        <img src="<?= Yii::$app->homeUrl ?>img/button-2.png" class="img-button">
                        <img src="<?= Yii::$app->homeUrl ?>img/button-4.png" class="img-button">
                        <img src="<?= Yii::$app->homeUrl ?>img/button-3.png" class="img-button">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="col-12 title-join">
                    Join us on the next webinar
                </div>
                <div class="col-12 title-topic mt-10">
                    <p> <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> ABOUT THE TOPIC</p>
                </div>
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can i get recorded videos of the webinars or online seminars ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How to create a community Account ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary button-register mt-30"> Register for Webinar</button>
                    <p class="title-sign-in">Already have account? <a href="#sign in" class="no-underline">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12 mt-50">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 title-Trending">
            <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> Webinar Playlist
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            It is always the most vital time to provide the entire picture of company and remind the mission in society. We believe that the purpose of business is ultimately the same all over the world. Let’s grow together.
        </div>
    </div>
    <form class="row g-3 pl-40 mt-50 form-search1">
        <div class="col-3">
            <input type="search" class="form-control" id="inputsearch" placeholder="Search, Business Videos">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3"><i class="fa fa-search" aria-hidden="true"> Search</i></button>
        </div>
    </form>
</div>

<div class="col-12 pr12 mt-50">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="col-4">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-5 mt-10">
                    <div class="col-12 text-art">
                        Self-Development
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        7:36 mins
                    </div>
                </div>
                <div class="col-3 mt-20 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        Service Operations Management
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        20:54 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        Grow your Company
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        40:12 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        Culture and you!
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        20:45 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        You can make the change
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        6:12 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="col-4">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-5 mt-10">
                    <div class="col-12 text-art">
                        The Art of Innovation
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        10:45 mins
                    </div>
                </div>
                <div class="col-3 mt-20 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        Hiden Success
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        17:12 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        Take Better Decission
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        25:45 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        A corporate Story of success
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        3:45 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-5 mt-50">
                    <div class="col-12 text-art">
                        Three Golden Rules
                    </div>
                    <div class="col-12 mt-10">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                        <img src="<?= Yii::$app->homeUrl ?>img/star.png" class="img-star">
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        33:12 mins
                    </div>
                </div>
                <div class="col-3 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mt-50 text-center">
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    Page 1 of 13
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
</div>