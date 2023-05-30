<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use yii\db\ForeignKeyConstraint;

use function PHPUnit\Framework\isEmpty;

$this->title = 'services';
?>


<div class="col-12">
    <?php
    if (isset($services) && count($services) > 0) {
        $i = 0;
        foreach ($services as $r) :
    ?>
            <img src="<?= Yii::$app->homeUrl . $r['image'] ?>" class="image-Linkedin-Cover">

    <?php
            $i++;
        endforeach;
    }
    ?>
</div>

<div class="col-12 pr12 background-home">
    <div class="row">
        <?php
        if (isset($bannerservices) && count($bannerservices) > 0) {
            $i = 0;
            foreach ($bannerservices as $s) :

        ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
                    <div class=" col-12 home-form mt-20">
                        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> <?= $s['title'] ?>
                    </div>
                    <div class="col-lg-12 home-form-one">
                        <p> <?= $s['detail'] ?></p>
                        <p> <?= $s['detail2'] ?></p>
                        <p> <?= $s['detail3'] ?></p>
                    </div>
                    <div class="col-12 text-end mt-30">
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
                        <i class="fa fa-arrows-alt arrows-icon" aria-hidden="true"></i> <?= $bk['detail2'] ?>
                    </div>
                    <div class="col-12 pt-20 pl-20 form-tree">
                        <p> <?= $bk['detail3'] ?></p>
                        <p><?= $bk['detail4'] ?></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <img src="<?= Yii::$app->homeUrl . $bk['image'] ?>" class="img-tree">
                </div>
        <?php

                $i++;
            endforeach;
        }
        ?>

    </div>
</div>

<div class="col-12 pr12 page-two">
    <?php
    if (isset($box) && count($box) > 0) {
        $i = 0;
        foreach ($box as $x) :

    ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mt-20">
                    <div class="col-12 form-select-one mt-20">
                        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $x['title'] ?>
                    </div>
                    <div class="col-12 pt-20 form-select-two">
                        <p> <?= $x['detail'] ?></p>
                        <p><?= $x['detail2'] ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mt-50">
                    <div class="col-12 form-select-tree">
                        <?= $x['detail3'] ?>
                    </div>
                    <div class="col-12 pt-20">
                        <img src="<?= Yii::$app->homeUrl . $x['image'] ?>" class="image-Asset">
                    </div>
                </div>
            </div>
    <?php

            $i++;
        endforeach;
    }
    ?>
</div>

<div class="col-12 pr12 page-tree">
    <input type="hidden" id="total-countryindex2" value="<?= count($countryindex2) ?>">
    <div class="row mt-20">
        <div class="col-md-4 col-12">
            <?php
            if (isset($services) && count($services) > 0) {
                $i = 0;
                foreach ($services as $r) :
            ?>
                    <div class="col-12 form-services mt-50">
                        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> <?= $r['title'] ?>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="row mt-40 form-services-page">
                <div class="col-4">
                    Select Country
                </div>
                <div class="col-5">
                    <select class="form-select" aria-label="Default select example">
                        <?php
                        if (isset($countryindex2) && count($countryindex2)) {
                            $i = 0;
                            foreach ($countryindex2 as $tryin) :
                                if ($i < 26) {


                        ?>
                                    <option selected onclick="javasript:showCountry(<?= $i ?>)"> <?= $tryin['title'] ?> </option>

                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-12 pic-asset">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-3.png" class="asset-11" id="content2-asset-<?= $i ?>" onmousemove="javascript:showAsset2(<?= $i ?>)">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-4.png" class="asset-4">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-5.png" class="asset-5">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-6.png" class="asset-6">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-7.png" class="asset-7">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-8.png" class="asset-8">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-9.png" class="asset-9">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-10.png" class="asset-10">
            </div>

            <div class="col-12 copy-pic-asset">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-3.png" class="copy-asset-11" style="display: none;" id="content2-asset2-<?= $i ?>" onmouseleave="javascript:showAsset1(<?= $i ?>)">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-4.png" class="copy-asset-4">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-5.png" class="copy-asset-5">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-6.png" class="copy-asset-6">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-7.png" class="copy-asset-7">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-8.png" class="copy-asset-8">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-9.png" class="copy-asset-9">
                <img src="<?= Yii::$app->homeUrl ?>img/Asset-10.png" class="copy-asset-10">
            </div>


        </div>
        <div class="col-md-8 col-12">
            <?php
            if (isset($stage) && count($stage) > 0) {
                $i = 0;
                foreach ($stage as $select) :
            ?>
                    <div class="col-12 form-select-tree1">
                        <?= $select['title'] ?>
                    </div>
                    <div class="col-12 form-services">
                        <?= $select['detail'] ?>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="col-12 mt-20">
                <div class="row">

                    <?php
                    if (isset($taxation) && count($taxation) > 0) {
                        $i = 0;
                        foreach ($taxation as $table) :
                            if ($i < 6) {

                    ?>
                                <div class="col-lg-4 col-md-6 col-sm-4 col-8">
                                    <div class="card col-10 mt-20 form-page-text" style="display:<?= $i == 0 ? '' : 'none' ?>" id="content2-button-<?= $i ?>">
                                        <div class="text-center">
                                            <img src="<?= Yii::$app->homeUrl . $table['image'] ?>" class="card-img-top">
                                            <div class="card-body text-center" style="display:<?= $i == 0 ? '' : 'none' ?>" id="content2-button2-<?= $i ?>">
                                                <h6> <?= $table['title'] ?></h6>
                                                <p><?= $table['detail'] ?></p>
                                                <button type="button" class="btn btn-outline-primary"><?= $table['detail2'] ?></button>
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
            </div>
        </div>
    </div>
</div>


<div class="col-12 pr12 backgroup-submit">
    <div class="row">
        <div class="col-lg-5 col-md-6 col-12 mt-20">
            <?php
            if (isset($founder) && count($founder) > 0) {
                $i = 0;
                foreach ($founder as $o) :
            ?>
                    <div class="col-12 form-select-business mt-20">
                        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> <?= $o['title'] ?>
                    </div>
                    <div class="col-12 mt-20">
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
                    <div class="col-4 mt-30">
                        <?php
                        if (isset($item) && count($item) > 0) {
                            $i = 0;
                            foreach ($item as $t) :

                        ?>
                                <p><img src="<?= Yii::$app->homeUrl . $t['image'] ?>" style="width: 90px;"></p>

                            <?php

                                $i++;
                            endforeach;
                        }

                        if (isset($star) && count($star) > 0) {
                            $i = 0;
                            foreach ($star as $u) :
                            ?>
                                <p><img src="<?= Yii::$app->homeUrl . $u['image'] ?>" style="width: 90px;"></p>

                            <?php
                                $i++;
                            endforeach;
                        }

                        if (isset($itemstar) && count($itemstar) > 0) {
                            $i = 0;
                            foreach ($itemstar as $v) :
                            ?>
                                <p><img src="<?= Yii::$app->homeUrl . $v['image'] ?>" style="width: 90px;"></p>

                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>

                    </div>
                    <div class="col-6 mt-30">
                        <?php
                        if (isset($detail) && count($detail) > 0) {
                            $i = 0;
                            foreach ($detail as $d) :

                        ?>
                                <div class="col-12 ">
                                    <p class="text-Goal"><?= $d['title'] ?></p>
                                    <p class="text-one"><?= $d['detail'] ?></p>
                                </div>

                        <?php

                                $i++;
                            endforeach;
                        }
                        ?>

                        <?php
                        if (isset($data) && count($data) > 0) {
                            $i = 0;
                            foreach ($data as $g) :
                        ?>
                                <p class="text-Goal"><?= $g['title'] ?></p>
                                <p class="text-one"><?= $g['detail'] ?></p>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>

                        <?php
                        if (isset($drive) && count($drive) > 0) {
                            $i = 0;
                            foreach ($drive  as $w) :
                        ?>
                                <p class="text-Goal"><?= $w['title'] ?></p>
                                <p class="text-one"><?= $w['detail'] ?></p>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>

                        <?php
                        if (isset($button) && count($button) > 0) {
                            $i = 0;
                            foreach ($button  as $q) :
                        ?>

                                <button type="button" class="btn btn-primary"><?= $q['title'] ?></button>
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
            if (isset($button) && count($button) > 0) {
                $i = 0;
                foreach ($button as $q) :
            ?>
                    <img src="<?= Yii::$app->homeUrl . $q['image'] ?>" class="image-Group-6">
            <?php

                    $i++;
                endforeach;
            }
            ?>
        </div>
    </div>
</div>

<div class="col-12">
    <img src="<?= Yii::$app->homeUrl ?>image/boat-1.png" class="image-boat-2">
</div>


<div class="col-12 pr12">
    <div class="row">
        <div class="col-12 title-all">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6 form-oftcf">
                    <?php
                    if (isset($services) && count($services) > 0) {
                        $i = 0;
                        foreach ($services as $r) :
                    ?>
                            <div class="col-12 text-the-best">
                                <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> <?= $r['detail'] ?>
                            </div>
                    <?php

                            $i++;
                        endforeach;
                    }
                    ?>
                    <?php
                    if (isset($picturegraphics) && count($picturegraphics) > 0) {
                        $i = 0;
                        foreach ($picturegraphics as $tokyo) :
                            if ($i < 3) {

                    ?>
                                <div class="col-12 mt-10  page-1">
                                    <img src="<?= Yii::$app->homeUrl . $tokyo['image'] ?>" class="image-account"> <?= $tokyo['title'] ?>
                                </div>
                                <div class="col-12 select-project">
                                    <?= $tokyo['detail'] ?>
                                </div>
                    <?php
                            }
                            $i++;
                        endforeach;
                    }
                    ?>



                    <div class="col-12 cal-form">
                        <?php
                        if (isset($most) && count($most) > 0) {
                            $i = 0;
                            foreach ($most as $mos) :
                        ?>
                                <div class="card form-card">
                                    <?= $mos['detail'] ?> <a href="#" class="no-underline"><span class="card download"> <?= $mos['detail2'] ?> <i class="fa fa-download" aria-hidden="true"></i> </a></span>
                                </div>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                    <?php
                    if (isset($most) && count($most) > 0) {
                        $i = 0;
                        foreach ($most as $mos) :
                    ?>
                            <div class="col-12 text-form-most">
                                <?= $mos['title'] ?>
                            </div>
                    <?php
                            $i++;
                        endforeach;
                    }
                    ?>

                    <?php
                    if (isset($best) && count($best) > 0) {
                        $i = 0;
                        foreach ($best as $tcf) :
                            if ($i < 3) {

                    ?>
                                <div class="col-12 mt-10 page-2">
                                    <img src="<?= Yii::$app->homeUrl . $tcf['image'] ?>" class="image-account"><?= $tcf['title'] ?>
                                </div>
                                <div class="col-12 select-project-1">
                                    <?= $tcf['detail'] ?>
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
        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> Connect Experts
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
                            <input type="text" class="form-control" placeholder="+880" aria-label="Phone">
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
                        ATTACHMENT (IF ANY) <a href="" class="no-underline"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-6 mt-4 text-end">
                        <button type="button" class="btn btn-primary button-get">Get Free Appointment</button>
                    </div>
                    <div class="col-6 text-start mt-4">
                        <div class="contact-social mb-2">Whatsapp</div>
                        <a href="" class="no-underline">
                            <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf</p>
                        </a>
                    </div>
                    <div class="col-6 text-end mt-4">
                        <div class="contact-social mb-2">Email</div>
                        <a href="" class="no-underline">
                            <p class="info-tokyo">f-info@tokyoconsultinggroup.com<i class="fa fa-envelope" aria-hidden="true"></i></p>
                        </a>
                    </div>
                    <div class="col-6 text-start mt-4">
                        <div class="contact-social mb-2">Skype</div>
                        <a href="" class="no-underline">
                            <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i> inquarrytcf</p>
                        </a>
                    </div>
                    <div class="col-6 text-end mt-4">
                        <div class="contact-social mb-2">Phone</div>
                        <a href="" class="no-underline">
                            <p class="info-tokyo">+090-111-222<i class="fa fa-phone" aria-hidden="true"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    s
</div>