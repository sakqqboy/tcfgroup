<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'services';
?>



<div class="col-12">
    <?php
    if (isset($together) && count($together) > 0) {
        $i = 0;
        foreach ($together as $ther) :
    ?>
            <div class="col-12">
                <img src="<?= Yii::$app->homeUrl . $ther['image'] ?>" class="image-asdsadasdasd1">
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

    <?php
    if (isset($contribute) && count($contribute) > 0) {
        $i = 0;
        foreach ($contribute as $tri) :
    ?>
            <div class="col-12">
                <img src="<?= Yii::$app->homeUrl . $tri['image'] ?>" class="image-together">
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>



<?php
if (isset($understanding) && count($understanding) > 0) {
    $i = 0;
    foreach ($understanding as $standing) :
?>
        <div class="col-12 title-new1">
            <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $standing['title'] ?>
        </div>
        <div class="col-12 pr12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mt-50">
                    <img src="<?= Yii::$app->homeUrl . $standing['image'] ?>" class="image-Asset">
                </div>
                <div class="col-lg-6 col-md-6 col-12 detail-asset">
                    <?= $standing['detail'] ?>
                </div>
            </div>
        </div>
<?php
        $i++;
    endforeach;
}
?>



<div class="col-12 pr12">
    <div class="row mt-20">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 title-new1">
                <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> Service at Every Stage of Business
            </div>
            <div class="row mt-40 form-services-page">
                <div class="col-4">
                    Select Country
                </div>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example">
                        <option selected onclick="javascript:showBangladresh(<? $i ?>)">bangladresh</option>
                        <option selected>Brazil</option>
                        <option selected>Combodia</option>
                        <option selected>China</option>
                        <option selected>Columbia</option>
                        <option selected>Dubai(UAE)</option>
                        <option selected>Hong kong</option>
                        <option selected>India</option>
                        <option selected>Indonesia</option>
                        <option selected>kenya</option>
                        <option selected>Japan</option>
                        <option selected>Laos</option>
                        <option selected>Malaysia</option>
                        <option selected>Mexico</option>
                        <option selected>Mongolia</option>
                        <option selected>Nigeria</option>
                        <option selected>Mayanmar</option>
                        <option selected>Morocco</option>
                        <option selected>Peru</option>
                        <option selected>Philippines</option>
                        <option selected>Russia</option>
                        <option selected>South Afroca</option>
                        <option selected>Singapore</option>
                        <option selected>Thailad</option>
                        <option selected>Turkey</option>
                    </select>
                </div>
            </div>
            <div class="col-12 pic-group">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-1.png" style="width:23%" class="group1">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-2.png" style="width:26%" class="group2">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-3.png" style="width:22%" class="group3">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-4.png" style="width:19%" class="group4">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-5.png" style="width:25%" class="group5">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-6.png" style="width:23%" class="group6">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-7.png" style="width:26%" class="group7">
                <img src="<?= Yii::$app->homeUrl ?>img/Group-8.png" style="width:32%" class="group8">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($companymarket) && count($companymarket) > 0) {
                $i = 0;
                foreach ($companymarket as $marketing) :
            ?>
                    <div class="col-12 detail-text-sevices">
                        <?= $marketing['title'] ?>
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
        </div>
    </div>
</div>


<div class="col-12 pr12 mt-50 background-home">
    <div class="row">
        <?php
        if (isset($banneservices) && count($banneservices) > 0) {
            $i = 0;
            foreach ($banneservices as $s) :
        ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
                    <div class="col-12 title-new1 mt-20">
                        <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $s['title'] ?>
                    </div>
                    <div class="col-lg-12 home-form-one">
                        <p> <?= $s['detail'] ?></p>
                        <p><?= $s['detail2'] ?></p>
                        <p><?= $s['detail3'] ?></p>
                        <button type="button" class="btn btn-outline-dark"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-outline-dark"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div>
        <?php

                $i++;
            endforeach;
        }
        ?>

        <?php
        if (isset($background) && count($background) > 0) {
            $i = 0;
            foreach ($background as $bk) :
        ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 show-text-home">
                    <div class="col-12 pl-20 home-two">
                        <p> <?= $bk['title'] ?></p>
                        <p><?= $bk['detail'] ?></p>
                    </div>
                    <div class="col-12 pt-20 pl-20 form-two">
                        <img src="<?= Yii::$app->homeUrl ?>image/expand.png" style="width: 30px;"> <?= $bk['detail2'] ?>
                    </div>
                    <div class="col-12 pt-20 pl-20 form-tree">
                        <p> <?= $bk['detail3'] ?></p>
                        <p><?= $bk['detail4'] ?></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <img src="<?= Yii::$app->homeUrl ?>img/image7.png" class="image-image7">
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
        <div class="col-lg-5 col-md-6 col-12 mt-20">
            <?php
            if (isset($founder) && count($founder) > 0) {
                $i = 0;
                foreach ($founder as $o) :
            ?>
                    <div class="col-12 title-new1 mt-20">
                        <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $o['title'] ?>
                    </div>

                    <div class="col-12 mt-50 title-jinji">
                        <img src="<?= Yii::$app->homeUrl . $o['image'] ?>">
                        <p><?= $o['detail'] ?></p>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="col-12 mt-20">
                <div class="row">

                    <div class="col-4 mt-30 pade-jinji">
                        <?php
                        if (isset($shapestar) && count($shapestar) > 0) {
                            $i = 0;
                            foreach ($shapestar as $shape) :
                                if ($i < 3) {
                        ?>
                                    <p><img src="<?= Yii::$app->homeUrl . $shape['image'] ?>" style="width: 90px;"></p>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>

                    <div class="col-6 mt-30">
                        <?php
                        if (isset($support) && count($support) > 0) {
                            $i = 0;
                            foreach ($support as $sup) :
                        ?>
                                <div class="col-12 ">
                                    <p class="text-Goal"><?= $sup['title'] ?></p>
                                    <p class="text-one"><?= $sup['detail'] ?></p>
                                    <p class="text-Goal"><?= $sup['detail2'] ?></p>
                                    <p class="text-one"><?= $sup['detail3'] ?></p>
                                    <p class="text-Goal"><?= $sup['detail4'] ?></p>
                                    <p class="text-one"><?= $sup['detail5'] ?></p>
                                </div>
                                <button type="button" class="btn btn-primary button-name-Schedule"> <?= $sup['detail6'] ?></button>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 col-md-6  col-12 pr-0">
            <?php
            if (isset($support) && count($support) > 0) {
                $i = 0;
                foreach ($support as $sup) :
            ?>
                    <img src="<?= Yii::$app->homeUrl . $sup['image'] ?>" class="image-Group-6">

            <?php
                    $i++;
                endforeach;
            }
            ?>
        </div>

    </div>
</div>


<div class=" col-12">
    <img src="<?= Yii::$app->homeUrl ?>img/image6.png" class="image-image6">
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-12 all-picture-account">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6">
                    <?php
                    if (isset($companymarket) && count($companymarket) > 0) {
                        $i = 0;
                        foreach ($companymarket as $marketing) :
                    ?>
                            <div class="col-12 text-why">
                                <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $marketing['detail'] ?>
                            </div>
                    <?php
                            $i++;
                        endforeach;
                    }
                    ?>

                    <?php
                    if (isset($chooseservices) && count($chooseservices) > 0) {
                        $i = 0;
                        foreach ($chooseservices as $choose) :

                            if ($i < 3) {
                    ?>
                                <div class="col-12 page-3">
                                    <img src="<?= Yii::$app->homeUrl . $choose['image'] ?>" class="image-account"> <?= $choose['title'] ?>
                                </div>
                                <div class="col-12 select-project-3">
                                    <?= $choose['detail'] ?>
                                </div>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>


                    <div class="col-6 cal-download">
                        <div class="card download-button">
                            <a href="" class="no-underline1">
                                <?php
                                if (isset($companymarket) && count($companymarket) > 0) {
                                    $i = 0;
                                    foreach ($companymarket as $marketing) :
                                ?>
                                        <p class="text-download1"> <?= $marketing['detail2'] ?> <i class="fa fa-download name-download3" aria-hidden="true"></i></p>
                                <?php

                                        $i++;
                                    endforeach;
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                    <?php
                    if (isset($development) && count($development) > 0) {
                        $i = 0;
                        foreach ($development as $dave) :

                            if ($i < 3) {
                    ?>
                                <div class="col-12 mt-20 page-2">
                                    <img src="<?= Yii::$app->homeUrl . $dave['image'] ?>" class="image-account"><?= $dave['title'] ?>
                                </div>
                                <div class="col-12 select-project-1">
                                    <?= $dave['detail'] ?>
                                </div>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>
                </div>
            </div>
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
                        <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf</p>
                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Email</div>
                        <p class="info-tokyo">f-info@tokyoconsultinggroup.com <i class="fa fa-envelope" aria-hidden="true"></i></p>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Skype</div>
                        <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i> inquarrytcf</p>

                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Phone</div>
                        <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>