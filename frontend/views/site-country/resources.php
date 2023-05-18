<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'contact';
?>

<div class="col-12  home-contact2">
    <?php
    if (isset($bannerresource) && count($bannerresource) > 0) {
        $i = 0;
        foreach ($bannerresource  as $resource) :
    ?>
            <div class="col-12">
                <img src="<?= Yii::$app->homeUrl ?>img/Resources.png" class="img-Resources">
            </div>
            <div class="col-12 page-resource">
                <?= $resource['title'] ?>
            </div>
            <div class="col-12 detail-resource">
                <?= $resource['detail'] ?>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

    <div class="col-12 form-search-template">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-search search-resources" aria-hidden="true"></i></span>
            <input type="text" class="form-control table-search" placeholder="Search forms & Templates" aria-label="Search forms & Templates">
        </div>
    </div>
    <div class="col-12 pr12 form-select-search">
        <div class="row">
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Bangladesh</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Department</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Type</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary txt-search"> Search</button>
            </div>
        </div>
    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($national) && count($national) > 0) {
            $i = 0;
            foreach ($national  as $tio) :
                if ($i < 4) {

        ?>

                    <div class="col-lg-3 col-md-6 col-12 mt-10 item-dropdown">
                        <div class="btn-group">
                            <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= Yii::$app->homeUrl . $tio['image'] ?>" class="img-icon"> <?= $tio['title'] ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><?= $tio['detail'] ?></a></li>
                                <li><a class="dropdown-item" href="#"><?= $tio['detail2'] ?></a></li>
                                <li><a class="dropdown-item" href="#"><?= $tio['detail3'] ?></a></li>
                            </ul>
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

<table class="table table-striped mt-50">
    <thead class="table1">
        <tr>
            <?php
            if (isset($description) && count($description) > 0) {
                $i = 0;
                foreach ($description as $des) :
            ?>
                    <th><?= $des['title'] ?></th>
                    <th><?= $des['detail'] ?></th>
                    <th><?= $des['detail2'] ?></th>
                    <th><?= $des['detail3'] ?></th>
                    <th><?= $des['detail4'] ?></th>
                    <th><?= $des['detail5'] ?></th>
            <?php
                    $i++;
                endforeach;
            }
            ?>

        </tr>
    </thead>


    <?php
    if (isset($tabledetail) && count($tabledetail) > 0) {
        $i = 0;
        foreach ($tabledetail  as  $blede) :
            if ($i < 20) {

    ?>
                <tbody class="table2">
                    <tr>
                        <th scope="row" style="color:#0078C8;"><?= $blede['title'] ?></th>
                        <td><?= $blede['detail'] ?></td>
                        <td><?= $blede['detail2'] ?></td>
                        <td><?= $blede['detail3'] ?></td>
                        <td><?= $blede['detail4'] ?></td>
                        <td class="fot-sm"><button type="button" class="btn btn-primary td-download"><i class="fa fa-cloud-download" aria-hidden="true"></i> <?= $blede['detail5'] ?></button></td>
                    </tr>
                </tbody>
    <?php
            }
            $i++;
        endforeach;
    }
    ?>

</table>

<div class="col-12 mt-50 text-center">
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    <span class="of-13"> Page &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp; of &nbsp;&nbsp;13</span>
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
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