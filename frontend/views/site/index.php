<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use yii\bootstrap5\Carousel;

$this->title = 'TCFGROUP';
?>


<div class="">
    <div class="col-12">
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
                    foreach ($banners as $banner) :
                ?>
                        <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>" data-bs-interval="10000">
                            <img src="<?= Yii::$app->homeUrl . $banner['image'] ?>" class="d-block" style="width:100%; margin-top:20px;">
                            <div class="offset-1 col-11 text-star">
                                <?= $banner['detail'] ?><br>
                                <?= $banner['detail2'] ?> <br>
                                <?= $banner['detail3'] ?><br>
                                <button type="button" class="btn btn-primary button-start"> <?= $banner['title'] ?></button>
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
</div>



<div class="col-12 col-background">
    <div class="col-12 pt-20 Global-Business">
        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> Global Business Environment
    </div>
    <div class="col-12 text-TCG">
        Browse TCG Services by contry
    </div>
    <div class="col-12">
        <div class="row col-12">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-6 country-index">
                        <?php
                        if (isset($braanchs) && count($branch) > 0) {
                            $i = 0;
                            foreach ($branchs as $branch) :
                                if ($i < 13) {
                        ?>
                                    <p><a href="<? Yii::$app->homeUrl . $branch['url'] ?>" class="no-underline1">
                                            <img src="<?= Yii::$app->homeUrl . $branch['image'] ?>" class="img-country"> .<?= $branch['title'] ?></a></p>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-6 country-index">
                        <?php

                        if (isset($branchs) && count($branch) > 0) {
                            $i = 0;
                            foreach ($branchs as $branch) :
                                if ($i > 14) {
                        ?>
                                    <p><img src="<?= Yii::$app->homeUrl . $branch['image'] ?>" class="img-country"> .<?= $branch['title'] ?></p>
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
                <img src="<?= Yii::$app->homeUrl ?>image/gol1.png" class="image-gol1">
            </div>
        </div>
    </div>
</div>


<div class=" col-12 pr12">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
            <div class="col-lg-12 text-establish">
                <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> Our Professional Services
            </div>

            <?php
            if (isset($subbranchs) && !empty($subbranch) > 0) {
                $i = 0;
                foreach ($subbranchs as $subbranch) :


            ?>
                    <div class="col-lg-12 Company <?= $i == 0 ? 'active' : '' ?>">
                        <li> <?= $subbranch["title"] ?></li> <br>
                        <li><?= $subbranch["title"] ?></li> <br>
                        <li><?= $subbranch["title"] ?></li> <br>
                        <li><?= $subbranch["title"] ?></li> <br>
                        <li>Human Resource</li> <br>
                        <li> Recruitment & Placement </li><br>
                    </div>
            <?php

                    $i++;
                endforeach;
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 show-text-home">
            <div class="col-12 text-legal">
                <?php
                if (isset($paddings) && !empty($padding) > 0) {
                    $i = 0;
                    foreach ($paddings as $padding) :
                        $i++;
                    endforeach;
                }
                ?>
                Legal & Secretarial
            </div>
            <?php
            if (isset($section) && !empty($section) > 0) {
                $i = 0;
                foreach ($section as $section) :
                    $i++;
                endforeach;
            }
            ?>
            <div class="col-12 Our pt-20">
                Our consulting firm specializes in providing legal and
                secretarial support to multinational companies. Our
                services include - Compliance Support, Corporate
                Governance, Document Preparation, Secretarial
                Services, corporate laws, contract laws, labor laws,
                intellectual property laws, and compliance with local
                laws and regulations. <br>
                <button type="button" class="btn btn-primary button-text5"> Get Free Appointment</button>
            </div>

        </div>
        <div class="col-lg-4 col-12">
            <img src="<?= Yii::$app->homeUrl ?>image/background.png" class="img-background">
        </div>
    </div>
</div>


<div class="col-12">
    <img src="<?= Yii::$app->homeUrl ?>image/Yokhohama.png" class="image-Yokhohamaa">
    <div class="row">
        <div class="col-12">
            <div class="col-lg-4 col-md-6 col-12">
                <?php
                if (isset($paddings) &&  !empty($padding) > 0) {
                    $i = 0;
                    foreach ($paddings as $padding) :
                        $i++;
                    endforeach;
                }
                ?>
                <div class="text-japan">
                    <p> Establish</p>
                    <p> Business in Japan</p>
                </div>
                <div class="text-Unlock">
                    <p>Unlock the full potential of your business in Japan with our comprehensive and customized support services. From market research and regulatory compliance to local representation and cultural integration, our team of experts will guide you every step of the way to ensure a seamless entry and successful establishment in the Japanese market.</p>
                    <button type="button" class="btn btn-primary button-contact"> Contact Experts</button>
                    <p><img src="<?= Yii::$app->homeUrl ?>image/image-icon.png" class="image-graph"></p>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="col-12 ">
    <img src="<?= Yii::$app->homeUrl ?>image/Boat1.png" style="width: 100%;">
    <div class="text2">
        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> Our Philosophy: Contributing to Society, Driving Growth
    </div>
    <div class="text3">
        <p> ❝ What we <span class="font-color-blue"> GIVE</span> is </p>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;What we <span class="font-color-blue"> GET</span> ❞</p>
    </div>
    <div class="col-md-5 col-12 text-tokyo">
        At Tokyo Consulting Group, our philosophy is centered around making a positive impact on society. We believe that this is the ultimate goal of any company and we strive to develop human resources to fulfill this purpose. Our management principles and philosophies are dynamic, adapting to the changing times, but our commitment to contributing to society remains steadfast. Our vision,strategies and tactics are continuously evolving to stay ahead of the curve, but never at thecost of our core values. Our company's growth is measured not just by profits, but also by our ability to fulfill our social mission. As a responsible corporate citizen, we believe in findingthe appropriate size that balances our growth aspirations with our obligation to society.Join us in our journey to create a better future for all."
    </div>
</div>




<div class="col-12">
    <img src="<?= Yii::$app->homeUrl ?>image/Rectangle4239.png" style="width:100%">
    <div class="text4">
        <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> About Yasunari Kuno
    </div>
    <div class="col-lg-8 col-md-6 col-12  text-Yasunari">
        <p>Yasunari Kuno is a seasoned business professional with over two decades of experience in the industry. He has a strong track record of success and is respected for his leadership skills, strategic vision, and ability to drive growth and profitability. In addition to his work as the chairman and founder of TCF and TCG, Yasunari Kuno is also an accomplished author, having published several books on business and personal development.</p>
        <p>As a thought leader in the business world, Yasunari Kuno is known for his innovative ideas and forward thinking approach to solving complex business challenges. He is passionate about helping others achieve their full potential and has dedicated his career to helping businesses succeed and thrive.</p>
        <p class="text-end">YASUNARI KUNO, CEO, TOKYO CONSULTING GROUP</p>
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
            <div class="col-lg-6 col-md-6 col-12 mt-50 pr-40 form-input">
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
                        ATTACHMENT (IF ANY) <a href="" class="no-underline"><i class="fa fa-paperclip" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-6 mt-4 text-end">
                        <button type="button" class="btn btn-primary button-get">Get Free Appointment</button>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Whatsapp</div>
                        <a href="" class="no-underline">
                            <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf</p>
                        </a>
                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Email</div>
                        <p class="info-tokyo"> <a href="" class="no-underline"> f-info@tokyoconsultinggroup.com <i class="fa fa-envelope" aria-hidden="true"></i></p></a>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Skype</div>
                        <a href="" class="no-underline">
                            <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i> inquarrytcf</p>
                        </a>

                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Phone</div>
                        <a href="" class="no-underline">
                            <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12 blue pt-20 pb-10">
    <div class="row">
        <div class="col-1g-10 col-md-10 col-12 text-update">
            <p>GET UPDATE FROM</p>
            <p> All OVER THE WORLD</p>
        </div>
        <div class="col-1g-10 col-md-10 col-12 text-project">
            <p>Project starts fall but small spots of hope indicate green shoots of recovery are there.</p>
        </div>
        <div class="col-lg-5 col-md-6 col-12 mt-10 input-group-form">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control input-your-email" placeholder="Your Email address" aria-label="Your Email address with two button addons">
                <button class="btn btn-primary" type="button">Subscribe Now</button>
            </div>
            <br>
        </div>
    </div>
</div>
<div class="col-12 pr12"><!-- ตรงนี้หน้าจอเล็ก ไม่แสดง-->
    <div class="row">
        <div class="offset-lg-6 col-lg-6 col-12 text-center">
            <img src="<?= Yii::$app->homeUrl ?>image/book.png" class="image-book">
        </div>
    </div>
</div>