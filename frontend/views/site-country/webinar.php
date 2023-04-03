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
        <div class="col-lg-6 col-md-6 col-12 ">
            <div class="col-12 page-webinar">
                <p> Discover the practical knowledge of experienced consultants in business </p>
            </div>
            <div class="col-12 page-webinar-home1">
                Coworking offers beautifully crafted workspaces where people can create, connect, and grow their businesses at prime locations in multiple cities.
            </div>
            <div class="row">
                <div class="col-12 pr12 mt-50 pl-40">
                    <div class="col-12">
                        <img src="<?= Yii::$app->homeUrl ?>img/calendar.png" class="img-calendar">
                        <p> Every Week</p>
                        <p> We discuss new topic every week</p>
                        <img src="<?= Yii::$app->homeUrl ?>img/qa.png" class="img-QA">
                        <p> Live Q&A</p>
                        <p> Live Question and answer session</p>
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
        <div class="col-lg-6 col-md-6 col-12 title-always pl-40">
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
        <div class="col-lg-8 col-md-6 col-12 form-webinar">
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
        <div class="col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="col-4">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-5 mt-10">
                    <div class="col-12 text-art">
                        Self-Development
                    </div>
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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
                    <div class="col-12 mt-10 picture-star">
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



<div class="col-12 pr12" style="background-color: #F4F4F6;">
    <div class="col-12 pr12 mt-50">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
                <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> What Participants Says
            </div>
            <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
                It is always the most vital time to provide the entire picture of company and remind the mission in society. We believe that the purpose of business is ultimately the same all over the world. Let’s grow together.
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12 mt-50 pl-40">
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left:20px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would like to take this oppertunity to thank SA Places for the great service rendered to us and in particular Estelle. You got me the best place ever in just a few moments after I spoke to you.
                        </div>
                        <div class="d-flex text-black mt-20">
                            <div class="flex-shrink-0">
                                <img src="<?= Yii::$app->homeUrl ?>img/minnie-horn.png" class="img-minnie">
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
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left:20px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            Many thanks for you kind and efficient service. I have already and will definitely continue to recommend your services to others in the future. </div>
                        <div class="d-flex text-black mt-20">
                            <div class="flex-shrink-0">
                                <img src="<?= Yii::$app->homeUrl ?>img/Merryn-Manley.png" class="img-Merryny">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Merryn Manley</h5>
                                <p class="mb-2 pb-1" style="color: #4F96FF;">
                                    @merryn.manley
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-50 pl-30">
            <div class="col-12 mt-20">
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; margin-left:20px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to great lengths to assist me. Her patience with me as I continuously changed my plans is to be commended. Her service re-affirms why I always choose to book through an agency instead of directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Yii::$app->homeUrl ?>img/veona.png" class="img-veona">
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
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to great lengths to assist me. Her patience with me as I continuously changed my plans is to be commended. Her service re-affirms why I always choose to book through an agency instead of directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Yii::$app->homeUrl ?>img/paseka.png" class="img-veona">
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
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; width: 21rem;margin-left: 30px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to great lengths to assist me. Her patience with me as I continuously changed my plans is to be commended. Her service re-affirms why I always choose to book through an agency instead of directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Yii::$app->homeUrl ?>img/cherice.png" class="img-veona">
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
                <div class="card" style="border-radius: 30px; font-size:12px; font-family:'klavika'; font-weight:100; line-height: 19px; width: 21rem;margin-left: 30px;">
                    <div class="card-body p-4" style="background-color: #FFFFFF;">
                        <div class="col-12">
                            I would just like to compliment Estelle Pestana. She has been most professional and gone to great lengths to assist me. Her patience with me as I continuously changed my plans is to be commended. Her service re-affirms why I always choose to book through an agency instead of directly. Thank you <div class="d-flex text-black mt-20">
                                <div class="flex-shrink-0">
                                    <img src="<?= Yii::$app->homeUrl ?>img/thais.png" class="img-veona">
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
                            Many thanks for you kind and efficient service. I have already and will definitely continue to recommend your services to others in the future. Wishing you all a </div>
                        <div class="d-flex text-black mt-20">
                            <div class="flex-shrink-0">
                                <img src="<?= Yii::$app->homeUrl ?>img/minnie.png" class="img-minnie">
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
                            Baie dankie en weereens dankie vir jou moeite. Ek moet net se - as ons iewers moet slaap en ek kan nie deur SA Places boek nie - dan los ek dit liewer! </div>
                        <div class="d-flex text-black mt-20">
                            <div class="flex-shrink-0">
                                <img src="<?= Yii::$app->homeUrl ?>img/vieona.png" class="img-minnie">
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
        <div class="col-12">

        </div>
    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
            <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> Meet Presenters
        </div>
        <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
            It is always the most vital time to provide the entire picture of company and remind the mission in society. We believe that the purpose of business is ultimately the same all over the world. Let’s grow together. </div>
    </div>
</div>

<div class="col-12">
    <img src="<?= Yii::$app->homeUrl ?>img/ceo.png" class="img-ceo">
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 title-Trending mt-50">
            <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> Free Registration
        </div>
        <div class="col-lg-6 col-md-6 col-12 title-always mt-50 pl-40">
            It is always the most vital time to provide the entire picture of company and remind the mission in society. We believe that the purpose of business is ultimately the same all over the world. Let’s grow together.
        </div>
    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="accordion mt-20 pl-30" id="accordionExample">
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
                        <div class="col-5 p-2 mb-2 bg-white text-white" style="border-radius: 8px;">
                            <a href="#" class="google">
                                <img src="<?= Yii::$app->homeUrl ?>img/google-plus.png" class="img-google"> Signup with google
                            </a>
                        </div>

                        <div class="col-12">
                            <div class="col-5 p-2 mb-2 bg-white text-white" style="border-radius: 8px;">
                                <a href="#" class="LinkeIn">
                                    <img src="<?= Yii::$app->homeUrl ?>img/LinkedIn.png" class="img-google"> Signup with LinkedIn
                                </a>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-50 account-signin">
                            - Or signup with your email -
                        </div>

                        <div class="col-10 mb-4">
                            <label for="formGroupExampleInput" class="form-label form-contact-name">Full name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Quazi Ehsan Hossain">
                        </div>
                        <div class="col-10 mb-4">
                            <label for="formGroupExampleInput2" class="form-label form-contact-name">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ehsan@tokyoconsultingfirmlimited.com">
                        </div>
                        <div class="col-10 mb-4">
                            <label for="inputPassword" class="form-label form-contact-name">Password</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> I agreed to the Terms & Conditions</label>
                        </div>
                        <div class="col-5 mt-10">
                            <button type="submit" class="btn btn-primary"> Register for Webinar</button>
                            <p class="account-signin">Already have account? <span class="sign-in"> Sign in</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>