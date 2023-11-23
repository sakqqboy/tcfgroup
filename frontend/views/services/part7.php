<!-- <?php

        use common\helpers\Path;
        use common\models\ModelMaster;
        ?>


<div class="col-12 pr12 mt-50">
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <div class="col-12 connect-experts mt-40">
                <img src="<?= Yii::$app->homeUrl ?>image/Rectangle1.png" class="image mr-1"> Connect Experts
            </div>
            <div class="col-12 Get-free mt-30">
                Get Free Appointment on your Business Issuefa-spin
            </div>
            <div class="col-12 If-you mt-10">
                If you would like to discuss a project or have a question, please fill in the form and we ll get right
                back to you.
            </div>
            <div class="col-12 mt-30 pr12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mt-50 pr-40 form-input">
                        <div class="row">
                            <div class="col-7">
                                <p class="If-you2">Do you prefer to communicate as an entity or an individual?</p>
                            </div>
                            <div class="col-5">
                                <label for="formGroupExampleInput" class="form-label label-thin">
                                    &nbsp;&nbsp;&nbsp;Select Country</label>
                                <select class="form-select mt-10" name="countryid" id="countryid" aria-label="Default select example">
                                    <option>Select country</option>
                                    <?php
                                    if (isset($dropdown) && count($dropdown) > 0) {
                                        foreach ($dropdown as $dd) :
                                    ?>
                                            <option value="<?= $dd["countryId"] ?>"><?= $dd["countryName"] ?></option>
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
                                            <label class="form-check-label ml-10" for="legalEntity"> Legal
                                                Entity</label>
                                        </div>
                                    </div>
                                    <div class="col-5 left-box-select">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typeperson" id="individual" value="2" checked>
                                            <label class="form-check-label ml-10" for="individual">
                                                Individual</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 your-company" style="margin-top: 30px;">
                            <label for="exampleInputCompany" class="form-label label-thin"> Your Company<span class="moon">*</span></label>
                            <input type="Company" class="form-control" name="company" id="company" aria-describedby="company">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputName" class="form-label label-thin"> Your Name<span class="moon">*</span></label>
                            <input type="Name" class="form-control" name="name" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputPosition" class="form-label label-thin"> Position<span class="moon">*</span></label>
                            <input type="Position" class="form-control" name="position" id="position" aria-describedby="position">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputEmail" class="form-label label-thin"> Your e-mail<span class="moon">*</span></label>
                            <input type="Email" class="form-control" id="email" name="email" aria-describedby="email">
                        </div>
                        <div class="mb-3 your-company">
                            <div class="row">
                                <div class="col-6 text-start">
                                    <label for="exampleInputEmail" class="form-label label-thin"> Phone Number<span class="moon">*</span></label>
                                    <input type="number" class="form-control" name="phonenumber" id="phonenumber" placeholder="+880" aria-label="Phone">
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail" class="form-label label-thin"> Your Business<span class="moon">*</span></label>
                                    <select class="form-select" name="businesstype" id="businesstype" aria-label="Default select example">
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
                            <input type="Questions" class="form-control" name="question" id="question" aria-describedby="Questions">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label label-thin">Details of
                                Inquiry</label>
                            <textarea class="form-control" name="detail" id="detail" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6 text-start label-thin mt-4">
                                ATTACHMENT (IF ANY) <a href="" class="no-underline"><i class="fa fa-paperclip" aria-hidden="true"></i></a>

                            </div>
                            <div class="col-6 mt-4 text-end">
                                <a class="btn btn-primary button-get" href="javascript:newClient()">Get Free
                                    Appointment</a>
                            </div>
                            <div class="col-4 text-start mt-4">
                                <div class="contact-social mb-2">Whatsapp</div>
                                <a href="" class="no-underline">
                                    <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf
                                    </p>
                                </a>
                            </div>
                            <div class="col-8 text-end mt-4">
                                <div class="contact-social mb-2">Email</div>
                                <p class="info-tokyo"> <a href="" class="no-underline"> f-info@tokyoconsultinggroup.com
                                        <i class="fa fa-envelope" aria-hidden="true"></i></p></a>
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
                                    <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->