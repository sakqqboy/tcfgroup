<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Carousel;

$this->title = 'TCFGROUP';
?>


<div class="">
    <div class="col-12" style="margin-top: 70px;">
        <?php Carousel::widget([]); ?>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                if (isset($banners) && count($banners) > 0) {
                    $i = 0;
                    foreach ($banners as $index) :
                ?>
                        <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" data-bs-interval="10000">
                            <img src="<?= Path::backendUrl() . $index['image'] ?>" class="d-block" style="width:100%; margin-top:20px;">
                            <div class="offset-1 col-11 text-star">
                                <?= $index['title'] ?><br>
                                <?= $index['detail'] ?> <br>
                                <?= $index['detail2'] ?><br>
                                <button type="button" class="btn btn-primary button-start"> <?= $index['detail3'] ?></button>
                            </div>
                        </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <?php
    if ($admin == 1) { ?>
        <div class=" col-12 text-end edit-content" style="position: relative;">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $index['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>



<div class="col-12 col-background">
    <?php
    if (isset($country) && count($country) > 0) {
        $i = 0;
        foreach ($country as $n) :
    ?>
            <div class="col-12 pt-20 Global-Business">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $n['title'] ?>
            </div>
            <div class="col-12 text-TCG">
                <?= $n['detail'] ?>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

    <div class="col-12">
        <div class="row col-12">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-6 country-index">
                        <?php
                        if (isset($branch) && count($branch) > 0) {
                            $i = 0;
                            foreach ($branch as $b) :
                                if ($i < 13) {
                        ?>
                                    <p><a href="<?= Yii::$app->homeUrl . $b['url'] ?>" class="no-underline1">
                                            <img src="<?= Path::backendUrl() . $b['image'] ?>" class="img-country">
                                            <?= $b['title'] ?></a>
                                    </p>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-6 country-index">
                        <?php
                        if (isset($branch) && count($branch) > 0) {
                            $i = 0;
                            foreach ($branch as $p) :
                                if ($i > 12) {
                        ?>
                                    <p><a href="<?= Yii::$app->homeUrl . $p['url'] ?>" class="no-underline1">
                                            <img src="<?= Path::backendUrl() . $p['image'] ?>" class="img-country">
                                            <?= $p['title'] ?></a></p>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <img src="<?= Path::backendUrl() ?>image/gol1.png" class="image-gol1">
            </div>
        </div>
    </div>

</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $pp['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>

<div class="col-12 pr12">
    <div class="row">
        <input type="hidden" id="total-company" value="<?= count($company) ?>">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
            <?php
            if (isset($titleservice) && count($titleservice) > 0) {
                $i = 0;
                foreach ($titleservice  as  $sertitle) :
            ?>
                    <div class="col-lg-12 text-establish">
                        <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $sertitle['title'] ?>
                    </div>
                    <?php
                    $i++;
                endforeach;
            }
            if (isset($company) && count($company) > 0) {
                $i = 0;
                foreach ($company as $c) :
                    if ($i < 6) {

                    ?>
                        <div class="col-lg-12 Company">
                            <li onclick="javascript:showContent(<?= $i ?>)"> <?= $c['title'] ?> </li>
                        </div>

            <?php
                    }
                    $i++;
                endforeach;
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 show-text-home">
            <?php
            if (isset($company) && count($company) > 0) {
                $i = 0;
                foreach ($company as $c) :

            ?>
                    <div class="col-12 text-legal" style="display:<?= $i == 0 ? '' : 'none' ?>" id="content-title-<?= $i ?>">
                        <?= $c['detail'] ?>
                    </div>
                    <div class="col-12 Our pt-20" style="display:<?= $i == 0 ? '' : 'none' ?>" id="content-title2-<?= $i ?>">
                        <?= $c['detail2'] ?> <br>
                        <button type="button" class="btn btn-primary button-text5"> <?= $c['detail3'] ?></button>
                    </div>
            <?php


                    $i++;
                endforeach;
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12" style="padding-right:0px;">
            <img src="<?= Path::backendUrl() ?>image/background.png" class="img-background">
        </div>
    </div>
</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $c['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>

<div class="col-12">
    <img src="<?= Path::backendUrl() ?>image/Yokhohama.png" class="image-Yokhohamaa">
    <div class="row">
        <?php
        if (isset($business) && count($business) > 0) {
            $i = 0;
            foreach ($business as $d) :
        ?>
                <div class="col-12">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="text-japan">
                            <p> <?= $d['title'] ?></p>
                            <p><?= $d['detail'] ?></p>
                        </div>
                        <div class="text-Unlock">
                            <p><?= $d['detail2'] ?></p>
                            <button type="button" class="btn btn-primary button-contact"> <?= $d['detail3'] ?></button>
                            <p><img src="<?= Path::backendUrl() . $d['image'] ?>" class="image-graph"></p>
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
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $d['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>




<div class="col-12 ">
    <?php
    if (isset($society) && count($society) > 0) {
        $i = 0;
        foreach ($society as $e) :
    ?>
            <img src="<?= Path::backendUrl() . $e['image'] ?>" style="width: 100%;">
            <div class="text2">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $e['title'] ?>
            </div>
            <div class="text3">
                <p> <?= $e['detail'] ?> <span class="font-color-blue"><?= $e['detail3'] ?> </span> is</p>
                <p>&nbsp;&nbsp;&nbsp; <?= $e['detail2'] ?><span class="font-color-blue"> <?= $e['detail4'] ?></span> ❞ </p>
            </div>
            <div class="col-md-5 col-12 text-tokyo">
                <?= $e['detail5'] ?>
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
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $e['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>




<div class="col-12">
    <?php
    if (isset($about) && count($about) > 0) {
        $i = 0;
        foreach ($about as $f) :
    ?>
            <img src="<?= Path::backendUrl() . $f['image'] ?>" style="width:100%">
            <div class="text4">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $f['title'] ?>
            </div>
            <div class="col-lg-8 col-md-6 col-12  text-Yasunari">
                <p><?= $f['detail'] ?></p>
                <p><?= $f['detail2'] ?></p>
                <p class="text-end"><?= $f['detail3'] ?></p>
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
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $f['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>

<div class="col-12">
    <div class="col-12 connect-experts mt-40">
        <?php
        if (isset($subtopic) && !empty($subtopic)) {
        ?>
            <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png" class="image mr-1"><?= $subtopic['title'] ?>
        <?php
        }
        ?>
    </div>
    <div class="col-12 Get-free mt-30">
        <?php
        if (isset($subtopicDetail) && !empty($subtopicDetail)) {
        ?>
            <?= $subtopicDetail['title'] ?>
        <?php
        }
        ?>
    </div>
    <div class="col-12 If-you mt-10">
        <?php
        if (isset($subtopicDetail) && !empty($subtopicDetail)) {
        ?>
            <?= $subtopicDetail['detail'] ?>
        <?php
        }
        ?>
    </div>
    <div class="col-12 mt-30 pr12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-50 pl-40 pr-40 form-input">
                <div class="row">
                    <div class="col-7">
                        <?php
                        if (isset($subtopicDetail) && !empty($subtopicDetail)) {
                        ?>
                            <p class="If-you2"><?= $subtopicDetail['detail2'] ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-5">
                        <label for="formGroupExampleInput" class="form-label label-thin">
                            &nbsp;&nbsp;&nbsp;Select Country</label>
                        <select class="form-select mt-10" name="countryid" aria-label="Default select example" id="countryid">
                            <option>Select country</option>
                            <?php
                            if (isset($dropdown) && count($dropdown) > 0) {
                                foreach ($dropdown as $a) :
                            ?>
                                    <option value="<?= $a["countryId"] ?>"><?= $a["countryName"] ?></option>
                            <?php
                                endforeach;
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="row mt-20">
                            <div class="col-5 left-box-select">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeperson" id="legalEntity" value="1">
                                    <label class="form-check-label ml-10" for="legalEntity">Legal Entity</label>
                                </div>
                            </div>
                            <div class="col-5 left-box-select">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="typeperson" id="individual" value="2" checked>
                                    <label class="form-check-label ml-10" for="individual">Individual</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 your-company" style="margin-top: 30px;"><label for="exampleInputCompany" class="form-label label-thin">Your Company<span class="moon">*</span></label>
                    <input type="Company" class="form-control" name="company" id="company" aria-describedby="company">
                </div>
                <div class="mb-3 your-company"><label for="exampleInputName" class="form-label label-thin">Your
                        Name<span class="moon">*</span></label><input type="Name" class="form-control" name="name" id="name" aria-describedby="name"></div>
                <div class="mb-3 your-company"><label for="exampleInputPosition" class="form-label label-thin">Position<span class="moon">*</span></label><input type="Position" class="form-control" name="position" id="position" aria-describedby="position"></div>
                <div class="mb-3 your-company"><label for="exampleInputEmail" class="form-label label-thin">Your
                        e-mail<span class="moon">*</span></label><input type="Email" class="form-control" id="email" name="email" aria-describedby="email"></div>
                <div class="mb-3 your-company">
                    <div class="row">
                        <div class="col-6 text-start"><label for="exampleInputEmail" class="form-label label-thin">Phone
                                Number<span class="moon">*</span></label><input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="+880" aria-label="Phone"></div>
                        <div class="col-6"><label for="exampleInputEmail" class="form-label label-thin">Your
                                Business<span class="moon">*</span></label><select class="form-select" name="businesstype" id="businesstype" aria-label="Default select example">
                                <option selected>Select business Type</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select></div>
                    </div>
                </div>
            </div>

            <!-- right side -->
            <div class="col-lg-6 col-md-6 col-12 form-Questions mt-50 pr-40">
                <div class="mb-3"><label for="exampleInputQuestions" class="form-label label-thin">Questions &
                        Concern</label><input type="Questions" class="form-control" name="question" id="question" aria-describedby="Questions"></div>
                <div class="mb-3"><label for="exampleFormControlTextarea1" class="form-label label-thin">Details of
                        Inquiry</label><textarea class="form-control" name="detail" id="detail" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-9 text-start label-thin mt-4">ATTACHMENT (IF ANY) <i class="fa fa-paperclip" aria-hidden="true"></i></div>
                    <a class="col-3 mt-4 text-end btn btn-primary button-get" href="javascript:newClient()">
                        <div class="text-center">
                            Get
                            Free
                            Appointment
                        </div>
                    </a>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Whatsapp</div><a href="" class="no-underline3">
                            <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i>inquarrytcf</p>
                        </a>
                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Email</div><a href="" class="no-underline3">
                            <p class="info-tokyo">f-info@tokyoconsultinggroup.com <i class="fa fa-envelope" aria-hidden="true"></i></p>
                        </a>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Skype</div><a href="" class="no-underline3">
                            <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i>inquarrytcf</p>
                        </a>
                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Phone</div><a href="" class="no-underline3">
                            <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($admin == 1 && isset($subtopic['contentId'])) { ?>
        <div class=" col-12 text-end edit-content">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $subtopic['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>

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
                        <input type="text" class="form-control input-your-email" placeholder="Your Email address" aria-label="Your Email address with two button addons">
                        <button class="btn btn-primary" type="button"><?= $h['detail3'] ?></button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-12 pr12">
            <div class="row">
                <div class="offset-lg-6 col-lg-6 col-12 text-center">
                    <img src="<?= Yii::$app->homeUrl . $h['image'] ?>" class="image-book">
                </div>
            </div>
        </div>
<?php
        $i++;
    endforeach;
}
?>