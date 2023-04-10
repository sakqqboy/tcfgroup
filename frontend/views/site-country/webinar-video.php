<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'webinar-video';
?>

<div class="col-12 background-1">
    <div class="col-12 text-center">
        <img src="<?= Yii::$app->homeUrl ?>img/img20.png" class="img-20">
        <img src="<?= Yii::$app->homeUrl ?>img/img21.png" class="img-21">
    </div>
    <div class="col-12 pr12 page-video1">
        <div class="row">
            <div class="col-1 icon-pause">
                <a href="" class="no-underline1"><i class="fa fa-pause" aria-hidden="true"></i></a>
            </div>
            <div class="col-8 icon-volume-down">
                <a href="" class="no-underline1"><i class="fa fa-volume-down" aria-hidden="true"></i></a>

            </div>
            <div class="col-1 icon-cloud-download">
                <a href="" class="no-underline1"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
            </div>
            <div class="col-2 icon-share-alt">
                <a href="" class="no-underline1"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 pr12">
        <div class="row">
            <div class="col-6 title-video1 text-start">
                The Path of a Good Leader
            </div>
            <div class="col-6 title-video2 text-end">
                <div class="row">
                    <div class="col-7">
                        <h4 class="font-video1"> Kaori Saito</h4>
                        <h6 class="font-video2"> International Affairs, Bangladesh Branch</h6>
                    </div>
                    <div class="col-2">
                        <img src="<?= Yii::$app->homeUrl ?>img/Saito.png" class="img-veona">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 title-summary">
                Summary
            </div>
            <div class="col-12 title-summary1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis consectetur adipiscing elit.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis consectetur adipiscing elit.
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 title-related1">
                Related Videos
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                    </div>
                    <div class="col-6 mt-10">
                        <div class="col-12 text-art">
                            Self-Development
                        </div>
                        <div class="col-12 mt-10 picture-star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="col-12 mt-10 font-mins">
                            7:36 mins
                        </div>
                    </div>
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
        <div class="col-4">
            <input type="search" class="form-control" id="inputsearch" placeholder="Search, Business Videos">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3"><i class="fa fa-search" aria-hidden="true"> Search</i></button>
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
        <div class="col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="col-4">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-6 mt-10">
                    <div class="col-12 text-art">
                        Self-Development
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        7:36 mins
                    </div>
                </div>
                <div class="col-2 mt-20 text-end">
                    <a href="<?= Yii::$app->homeUrl ?>site-country/webinar-video">
                        <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        Service Operations Management
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        20:54 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        Grow your Company
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        40:12 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        Culture and you!
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        20:45 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        You can make the change
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        6:12 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="col-4">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-6 mt-10">
                    <div class="col-12 text-art">
                        The Art of Innovation
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        10:45 mins
                    </div>
                </div>
                <div class="col-2 mt-20 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        Hiden Success
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        17:12 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        Take Better Decission
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        25:45 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video2.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        A corporate Story of success
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        3:45 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
                    <h1><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-50">
                    <img src="<?= Yii::$app->homeUrl ?>img/video1.png" class="img-video">
                </div>
                <div class="col-6 mt-50">
                    <div class="col-12 text-art">
                        Three Golden Rules
                    </div>
                    <div class="col-12 mt-10 picture-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="col-12 mt-10 font-mins">
                        33:12 mins
                    </div>
                </div>
                <div class="col-2 mt-50 text-end">
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
                        <div class="row">
                            <div class="col-5 p-2 mb-2 form-bg-media">
                                <a href="#" class="no-underline-form">
                                    <i class="fa fa-google-plus-square form-gooogle" aria-hidden="true"> </i> Signup with google
                                </a>
                            </div>
                            <div class="col-5 p-2 mb-2  form-bg-media">
                                <a href="#" class="no-underline-form">
                                    <i class="fa fa-linkedin-square form-linkedin" aria-hidden="true"></i> Signup with LinkedIn
                                </a>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-50 account-signin">
                            - Or signup with your email -
                        </div>

                        <div class="col-10 mb-4">
                            <label for="formGroupExampleInput" class="form-label form-contact-name">Full name</label>
                            <i class="fa fa-users" aria-hidden="true"></i> <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Quazi Ehsan Hossain">
                        </div>
                        <div class="col-10 mb-4">
                            <label for="formGroupExampleInput2" class="form-label form-contact-name">Email</label>
                            <i class="fa fa-envelope" aria-hidden="true"></i> <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ehsan@tokyoconsultingfirmlimited.com">
                        </div>
                        <div class="col-10 mb-4">
                            <label for="inputPassword" class="form-label form-contact-name">Password</label>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> I agreed to the Terms & Conditions</label>
                        </div>
                        <div class="col-7 mt-10">
                            <button type="submit" class="btn btn-primary"> Register for Webinar</button>
                            <p class="account-signin">Already have account? <span class="sign-in"> Sign in</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>