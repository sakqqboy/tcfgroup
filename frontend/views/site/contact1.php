<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'contact';
?>

<div class="col-12">
    <img src="<?= Yii::$app->homeUrl ?>image/Google-Forms-Job.png" class="image-Google-Forms-Job">
</div>

<div class="col-12 line-back">
    <a href="#" class="no-underline"><i class="fa fa-chevron-left" aria-hidden="true"> Back to Job Posting</i></a>
</div>

<div class="col-12 name-text-applying">
    Applying for the position of <span class="txt-cousultant">Consultant, Accounts & Taxation</span>
</div>

<div class="col-12 pr12 form-range2">
    <div class="row">
        <div class="col-12">
            <label for="customRange2" class="form-label"></label>
            <input type="range" class="form-range" min="0" max="4" id="customRange2">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <p class="form-font-small"> My Information</p>
        </div>
        <div class="col-3 fr-1">
            <p class="form-font-small"> My Experience</p>
        </div>
        <div class="col-3 fr-2">
            <p class="form-font-small"> Application Question</p>
        </div>
        <div class="col-2 fr-3">
            <p class="form-font-small"> Attechments</p>
        </div>
        <div class="col-1 fr-4">
            <p class="form-font-small"> Review & Submit</p>
        </div>
    </div>
</div>


<div class="col-12 name-box-one">
    <div class="col-12 no-name-1">
        My Information
    </div>
    <div class="col-12  font-name-one">
        <span class="moon">*</span>Indicates a required field
    </div>
</div>

<div class="col-lg-6 col-md-6 col-11 form-input-detail">
    <form>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">How Did You Hear About Us? <span class="moon">*</span></label>
            <input type="text" class="form-control" id="exampleInput" aria-describedby="Help">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">Country<span class="moon">*</span></label>
            <input type="text" class="form-control" id="exampleInput">
        </div>
    </form>
</div>

<div class="col-12 name-box-one">
    <div class="col-6 no-name-1">
        Introduction
    </div>
</div>

<div class="col-12 pr12 form-input-detail">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-11">
            <div class="mb-3">
                <label for="exampleInput" class="form-label form-label-type">First Name (Fast Name & Last Name)<span class="moon">*</span></label>
                <input type="text" class="form-control" id="exampleInput" aria-describedby="Help">
            </div>

            <div class="col-lg-12 col-md-12 col-12 text-start">
                <div class="mb-3">
                    <label for="birthdaytime" class="form-label form-label-type">Date of Birth<span class="moon">*</span></label>
                    <p><input type="datetime-local" class="form-control" id="exampleinputbirthdaytime" name="birthdaytime"></p>
                </div>
            </div>
        </div>
        <div class="offset-1 col-lg-5 col-md-6 col-12 form-image-upload">
            <p> <span class="text-upload">Upload Your Image</span></p>
            <img src="<?= Yii::$app->homeUrl ?>image/upload.png" class="image-upload">
            <span class="text-drop">Drag or Drop Your Image</span>
            <p class="tex-Or">Or</p>
            <div class="upload-btn-wrapper">
                <button class="btn btn-button ">Browse</button>
                <input type="file" name="myfile" />
                <p class="title-file">Supported Files: JPEG, PNG</p>
            </div>
        </div>
    </div>
</div>

<div class="col-12 name-box-one">
    <div class="col-12  no-name-1">
        Present Address
    </div>
</div>

<div class="col-lg-6 col-md-6 col-11 form-input-detail">
    <form>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">Address Line 1<span class="moon">*</span></label>
            <input type="text" class="form-control" id="exampleInput" aria-describedby="Help">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">City<span class="moon">*</span></label>
            <input type="text" class="form-control" id="exampleInput">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">Postal Code<span class="moon">*</span></label>
            <input type="text" class="form-control" id="exampleInput">
        </div>
    </form>
</div>


<div class="col-12 name-box-one">
    <div class="col-12  no-name-1">
        Communication
    </div>
</div>

<div class="col-lg-6 col-md-6 col-11  form-input-detail">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label form-label-type">Email<span class="moon">*</span></label>
            <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPhone" class="form-label form-label-type">Phone Number<span class="moon">*</span></label>
            <input type="text" class="form-control" id="exampleInputPhone">
        </div>

    </form>
</div>

<div class="col-12">
    <div class="col-12 select-name-dis">
        Disclaimer
    </div>
    <div class="col-8 mt-20 select-name-privacy">
        <p>We understand that your privacy and personal information are important to you. We want to assure all potential job candidates that the information you provide through our job application portal will be used solely for the purpose of evaluating your qualifications and determining your suitability for employment with our company.</p>
        <p> We will not misuse your personal information or share it with any third parties without your consent, except as required by law. We take great care in protecting the security of your information and have implemented appropriate measures to ensure its confidentiality.</p>
        <p>By submitting your application through our portal, you acknowledge and agree to the terms of this disclaimer. If you have any questions or concerns about our use of your information, please do not hesitate to contact us.
            Thank you for considering employment with our company. </p>
        <p> Read Complete <span class="title-read">Tokyo Consulting Group Recruitment Policy</span></p>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">I agree to Terms and Condition</label>
        </div>
        <button type="submit" class="btn btn-primary">Save & Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
    </div>
</div>


<div class="col-12 pr12 mt-50 form-text-footer">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="col-12 title-more">
                <p>More About us</p>
            </div>
            <div class="col-12 title-form-text">
                <p><a href="#" class="no-underline">About us </a></p>
                <p><a href="#" class="no-underline">Conotact us</a></p>
                <p><a href="#" class="no-underline">Work life at TCF</a></p>
                <p><a href="#" class="no-underline">Our Work Philosopy</a></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 form-tcf">
            <div class="col-12">
                <span class="title-tcf">“TCF Equal Opportunity Statement”</span>
                <p class="title-tcf1">Google is proud to be an equal opportunity workplace and is an affirmative action employer. We are committed to equal employment opportunity regardless of race, color, ancestry, religion, sex, national origin, sexual orientation, age, citizenship, marital status, disability, gender identity or Veteran status. We also consider qualified applicants regardless of criminal histories, consistent with legal requirements. See also Google's EEO Policy and EEO is the Law. If you have a need that requires accommodation, please let us know by completing our Accommodations for Applicants form.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="col-12 media-picture">
                Follow Career in
                <a href="#facebook"><img src="<?= Yii::$app->homeUrl ?>image/facebook.png"></a>
                <a href="#twitter"><img src="<?= Yii::$app->homeUrl ?>image/twitter.png"></a>
                <a href="#Instagram"><img src="<?= Yii::$app->homeUrl ?>image/Instagram.png"></a>
                <a href="#LinkedIn"><img src="<?= Yii::$app->homeUrl ?>image/LinkedIn.png"></a>
                <a href="#YouTube"><img src="<?= Yii::$app->homeUrl ?>image/YouTube.png"></a>
            </div>
        </div>
    </div>
</div>