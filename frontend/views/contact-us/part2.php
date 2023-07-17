<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

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
            <label for="exampleInput" class="form-label form-label-type">How Did You Hear About Us? <span
                    class="moon">*</span></label>
            <input type="text" class="form-control" name="hearus" id="hearus" aria-describedby="Help">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">Country<span class="moon">*</span></label>
            <input type="text" class="form-control" name="countryname" id="countryname">
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
                <label for="exampleInput" class="form-label form-label-type">First Name (Fast Name & Last Name)<span
                        class="moon">*</span></label>
                <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="Help">
            </div>

            <div class="col-lg-12 col-md-12 col-12 text-start">
                <div class="mb-3">
                    <label for="birthdaytime" class="form-label form-label-type">Date of Birth<span
                            class="moon">*</span></label>
                    <p><input type="datetime-local" class="form-control" name="birthdate" id="birthdate"></p>
                </div>
            </div>
        </div>
        <div class="offset-1 col-lg-5 col-md-6 col-12 form-image-upload">
            <p> <span class="text-upload">Upload Your Image</span></p>
            <img src="<?= Path::backendUrl() ?>image/upload.png" class="image-upload">
            <span class="text-drop">Drag or Drop Your Image</span>
            <p class="tex-Or">Or</p>
            <div class="upload-btn-wrapper">
                <a class="btn btn-button" href="javascript:newImage()">Browse</a>
                <input type="file" name="image" id="image" />
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
            <label for="exampleInput" class="form-label form-label-type">Address Line 1<span
                    class="moon">*</span></label>
            <input type="text" class="form-control" name="address" id="address" aria-describedby="Help">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">City<span class="moon">*</span></label>
            <input type="text" class="form-control" name="cityname" id="cityname">
        </div>
        <div class="mb-3">
            <label for="exampleInput" class="form-label form-label-type">Postal Code<span class="moon">*</span></label>
            <input type="text" class="form-control" name="postalcode" id="postalcode">
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
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPhone" class="form-label form-label-type">Phone Number<span
                    class="moon">*</span></label>
            <input type="text" class="form-control" name="phonenumber" id="phonenumber">
        </div>

    </form>
</div>

<div class="col-12">
    <?php
    if (isset($disclaimer) && count($disclaimer) > 0) {
        $i = 0;
        foreach ($disclaimer  as  $dis) :
    ?>
    <div class="col-12 select-name-dis">
        <?= $dis['title'] ?>
    </div>
    <div class="col-8 mt-20 select-name-privacy">
        <p><?= $dis['detail'] ?></p>
        <p><?= $dis['detail2'] ?></p>
        <p><?= $dis['detail3'] ?> </p>
        <p> <?= $dis['detail4'] ?> <span class="title-read"><?= $dis['detail5'] ?></span></p>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"><?= $dis['detail6'] ?></label>
        </div>
        <a class="btn btn-primary" href="javascript:newContact()"> <?= $dis['detail7'] ?> <i class="fa fa-arrow-right"
                aria-hidden="true"></i></a>
    </div>
    <?php
        endforeach;
    }
    ?>
</div>
<?php
if ($admin == 1) { ?>
<div class=" col-12 text-end edit-content">
    <a class="btn btn-warning bt-line"
        href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $disclaimerContent['contentId']]) ?>"
        target="_blank">Edit</a>
</div>
<?php
}
?>