<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use yii\bootstrap5\Offcanvas;

$this->title = 'Bangladesh';
?>

<div class="">
    <?php
    if (isset($shape) && count($shape) > 0) {
        $i = 0;
        foreach ($shape as $pe) :
    ?>
            <div class="col-12">
                <img src="<?= Yii::$app->homeUrl . $pe['image'] ?>" class="image-TCG">
            </div>
            <div class="offset-1 col-10 text-star">
                <?= $pe['title'] ?> <br>
                <?= $pe['detail'] ?> <br>
                <?= $pe['detail2'] ?><br>
                <button type="button" class="btn btn-primary button-start"><?= $pe['detail3'] ?></button>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

</div>


<div class="col-12 pr12 mt-50">
    <?php
    if (isset($services) && count($services) > 0) {
        $i = 0;
        foreach ($services as $r) :
    ?>
            <div class="col-12 title-Trending">
                <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $r['detail2'] ?>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
    <div class="row mt-50 procress">
        <?php
        if (isset($topic) && count($topic) > 0) {
            $i = 0;
            foreach ($topic  as  $tp) :
                if ($i < 6) {

        ?>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10">
                        <div class="card-body">
                            <!-- <img src="<?= Yii::$app->homeUrl ?>img/height.png" class="img-height"> -->
                            <p class="home1"><?= $tp['title'] ?></p>
                            <p class="home2"><?= $tp['detail'] ?></p>
                        </div>
                    </div>
        <?php
                }
            endforeach;
        }
        ?>
    </div>
</div>


<div class="col-12 pr12 mt-50">
    <?php
    if (isset($import) && count($import) > 0) {
        $i = 0;
        foreach ($import as $port) :
    ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="<?= Yii::$app->homeUrl . $port['image'] ?>" class="img-transportation">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <p class="title-import mt-10"><?= $port['title'] ?></p> <br>
                    <p class="title-zero"><?= $port['detail'] ?></p> <br>
                    <p class="circle-icon"><a href="#read more" class="no-underline"> <?= $port['detail2'] ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></p>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>

<div class="col-12 pr12" style="margin-top: 80px;">
    <div class="col-12 title-Trending">
        <?php
        if (isset($bangladresh) && count($bangladresh) > 0) {
            $i = 0;
            foreach ($bangladresh as $la) :
        ?>
                <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $la['title'] ?>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mt-50">
            <?php
            if (isset($bangladresh) && count($bangladresh) > 0) {
                $i = 0;
                foreach ($bangladresh as $la) :
            ?>
                    <div class="row pr12">
                        <div class="col-4 title-bangladesh">
                            <p><?= $la['detail'] ?></p>
                        </div>
                        <div class="col-2">
                            <img src="<?= Yii::$app->homeUrl . $la['image'] ?>" class="img-woman">
                            <div class="alert alert-secondary  text-center">
                                <p class="table-calendar"> <i class="fa fa-calendar" aria-hidden="true"> June 2023</i></p>
                                <p> S&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;S</p>
                                <p> 3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5 <button class="btn btn-primary calendar-button" type="button">6</button>&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;9</p>
                            </div>
                        </div>
                        <div class="col-6 img-iconday">
                            <img src="<?= Yii::$app->homeUrl ?>img/button-1.png" class="img-button">
                            <img src="<?= Yii::$app->homeUrl ?>img/button-2.png" class="img-button">
                            <img src="<?= Yii::$app->homeUrl ?>img/button-4.png" class="img-button">
                            <img src="<?= Yii::$app->homeUrl ?>img/button-3.png" class="img-button">
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
                foreach ($webinar  as  $nar) :
            ?>
                    <div class="col-12 title-join">
                        <?= $nar['title'] ?>
                    </div>
                    <div class="col-12 title-topic mt-10">
                        <p> <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $nar['detail'] ?></p>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
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
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary button-register mt-30"> Register for Webinar</button>
                <p class="title-sign-in">Already have account? <a href="#sign in" class="no-underline">Sign in</a></p>
            </div>
        </div>
    </div>
</div>



<div class="col-12 pr12 background-site">
    <div class="row">
        <input type="hidden" id="total-servicesbangladesh" value="<?= count($servicesbangladesh) ?>">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
            <?php
            if (isset($professiona) && count($professiona) > 0) {
                $i = 0;
                foreach ($professiona  as $pro) :
            ?>
                    <div class="col-lg-12 title-Trending">
                        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> <?= $pro['title'] ?>
                    </div>
                    <?php
                    $i++;
                endforeach;
            }
            if (isset($servicesbangladesh) && count($servicesbangladesh) > 0) {
                $i = 0;
                foreach ($servicesbangladesh as $profes) :
                    if ($i < 6) {

                    ?>
                        <div class="col-lg-12 Company">
                            <li onclick="javascript:showBangladresh(<?= $i ?>)"> <?= $profes['title'] ?></li>
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
            if (isset($servicesbangladesh) && count($servicesbangladesh) > 0) {
                $i = 0;
                foreach ($servicesbangladesh  as $profes) :

            ?>
                    <div class="col-12 text-legal pl-20" style="display: <?= $i == 0 ? '' : 'none' ?>" id="bangladresh-detail-<?= $i ?>">
                        <?= $profes['detail'] ?>
                    </div>
                    <div class="col-12 Our pt-20 pl-20" style="display: <?= $i == 0 ? '' : 'none' ?>" id="bangladresh-detail2-<?= $i ?>">
                        <?= $profes['detail2'] ?> <br>
                        <button type="button" class="btn btn-primary button-text5"><?= $profes['detail3'] ?></button>
                    </div>
            <?php

                    $i++;
                endforeach;
            }
            ?>
        </div>
        <div class="col-lg-4 col-12">
            <?php
            if (isset($professiona) && count($professiona) > 0) {
                $i = 0;
                foreach ($professiona  as $pro) :

            ?>
                    <img src="<?= Yii::$app->homeUrl . $pro['image'] ?>" class="img-zgif">
            <?php

                    $i++;
                endforeach;
            }
            ?>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="col-12 connect-experts mt-40">
        <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png" class="image mr-1"> Connect Experts
    </div>
    <div class="col-12 Get-free mt-30">
        Get Free Appointment on your Business Issuefa-spin
    </div>
    <div class="col-12 If-you mt-10">
        If you would like to discuss a project or have a question, please fill in the form and we ll get right back to you.
    </div>
    <div class="col-12 mt-30 pr12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-50 pl-40 pr-40 form-input">
                <div class="row">
                    <div class="col-7">
                        <p class="If-you2">Do you prefer to communicate as an entity or an individual?</p>
                    </div>
                    <div class="col-5">
                        <label for="formGroupExampleInput" class="form-label label-thin"> &nbsp;&nbsp;&nbsp;Select Country</label>
                        <select class="form-select mt-10" aria-label="Default select example">
                            <option selected>Bangladesh</option>
                            <option value="1">Brazil</option>
                            <option value="2">Combodia</option>
                            <option value="3">China</option>
                            <option value="4">Columbia</option>
                            <option value="5">Dubai(UAE)</option>
                            <option value="6">Hong kong</option>
                            <option value="7">India</option>
                            <option value="8">Indonesia</option>
                            <option value="9">kenya</option>
                            <option value="10">Japan</option>
                            <option value="11">Laos</option>
                            <option value="12">Malaysia</option>
                            <option value="13">Mexico</option>
                            <option value="14">Mongolia</option>
                            <option value="15">Nigeria</option>
                            <option value="16">Mayanmar</option>
                            <option value="17">Morocco</option>
                            <option value="18">Peru</option>
                            <option value="19">Philippines</option>
                            <option value="20">Russia</option>
                            <option value="21">South Afroca</option>
                            <option value="22">Singapore</option>
                            <option value="23">Sir Lanka</option>
                            <option value="24">Thailad</option>
                            <option value="25">Turkey</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="row mt-20">
                            <div class="col-5 left-box-select">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label ml-10" for="flexRadioDefault1"> Legal Entity</label>
                                </div>
                            </div>
                            <div class="col-5 left-box-select">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label ml-10" for="flexRadioDefault2"> Individual</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 your-company" style="margin-top: 30px;">
                    <label for="exampleInputCompany" class="form-label label-thin"> Your Company<span class="moon">*</span></label>
                    <input type="Company" class="form-control" id="exampleInputCompany" aria-describedby="company">
                </div>
                <div class="mb-3 your-company">
                    <label for="exampleInputName" class="form-label label-thin"> Your Name<span class="moon">*</span></label>
                    <input type="Name" class="form-control" id="exampleInputName" aria-describedby="name">
                </div>
                <div class="mb-3 your-company">
                    <label for="exampleInputPosition" class="form-label label-thin"> Position<span class="moon">*</span></label>
                    <input type="Position" class="form-control" id="exampleInputPosition" aria-describedby="position">
                </div>
                <div class="mb-3 your-company">
                    <label for="exampleInputEmail" class="form-label label-thin"> Your e-mail<span class="moon">*</span></label>
                    <input type="Email" class="form-control" id="exampleInputEmail" aria-describedby="email">
                </div>
                <div class="mb-3 your-company">
                    <div class="row">
                        <div class="col-6 text-start">
                            <label for="exampleInputEmail" class="form-label label-thin"> Phone Number<span class="moon">*</span></label>
                            <input type="number" class="form-control" placeholder="+880" aria-label="Phone">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputEmail" class="form-label label-thin"> Your Business<span class="moon">*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select business Type</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 form-Questions mt-50 pr-40">
                <div class="mb-3">
                    <label for="exampleInputQuestions" class="form-label label-thin">Questions & Concern</label>
                    <input type="Questions" class="form-control" id="exampleInputQuestions" aria-describedby="Questions">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label label-thin">Details of Inquiry</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-6 text-start label-thin mt-4">
                        ATTACHMENT (IF ANY) <i class="fa fa-paperclip" aria-hidden="true"></i>
                    </div>
                    <div class="col-6 mt-4 text-end">
                        <button type="button" class="btn btn-primary button-get">Get Free Appointment</button>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Whatsapp</div>
                        <a href="" class="no-underline3">
                            <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf</p>
                        </a>
                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Email</div>
                        <a href="" class="no-underline3">
                            <p class="info-tokyo">f-info@tokyoconsultinggroup.com <i class="fa fa-envelope" aria-hidden="true"></i></p>
                        </a>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Skype</div>
                        <a href="" class="no-underline3">
                            <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i> inquarrytcf</p>
                        </a>

                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Phone</div>
                        <a href="" class="no-underline3">
                            <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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