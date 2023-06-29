<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'contact';
?>


<div class="col-12">
    <?php
    if (isset($contact) && count($contact) > 0) {
        $i = 0;
        foreach ($contact as $tact) :
    ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $tact['image'] ?>" class="image-Google-Forms-Job">
            </div>

            <div class="col-12 line-back">
                <a href="#" class="no-underline"><i class="fa fa-chevron-left" aria-hidden="true"> <?= $tact['title'] ?></i></a>
            </div>

            <div class="col-12 name-text-applying">
                <?= $tact['detail'] ?><span class="txt-cousultant"><?= $tact['detail2'] ?></span>
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
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $contactContent['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>

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
            <img src="<?= Path::backendUrl() ?>image/upload.png" class="image-upload">
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
                <button type="submit" class="btn btn-primary"><?= $dis['detail7'] ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
    <?php
        endforeach;
    }
    ?>
</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $disclaimerContent['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>

<div class="col-12 pr12 mt-50 form-text-footer">
    <div class="row">
        <?php
        if (isset($footercontact) && count($footercontact) > 0) {
            $i = 0;
            foreach ($footercontact as $ft) :
        ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="col-12 title-more">
                        <p><?= $ft['title'] ?></p>
                    </div>
                    <div class="col-12 title-form-text">
                        <p><a href="#" class="no-underline"><?= $ft['detail'] ?> </a></p>
                        <p><a href="#" class="no-underline"><?= $ft['detail2'] ?></a></p>
                        <p><a href="#" class="no-underline"><?= $ft['detail3'] ?></a></p>
                        <p><a href="#" class="no-underline"><?= $ft['detail4'] ?></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-tcf">
                    <div class="col-12">
                        <span class="title-tcf"><?= $ft['detail5'] ?></span>
                        <p class="title-tcf1"><?= $ft['detail6'] ?></p>
                    </div>
                </div>

        <?php
                $i++;
            endforeach;
        }
        ?>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="col-12 media-picture">
                Follow Career in
                <a href="#"><i class="fa fa-facebook-square square-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square square-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram aquare-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin-square square-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube-play square-youtube" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $footercontactContent['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>
<div class="col-12" style="margin-top:60px;"></div>