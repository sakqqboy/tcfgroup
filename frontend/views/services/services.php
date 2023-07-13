<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Carousel;

$this->title = 'services';
?>

<?= $this->render('part1', [
    "together" => $together,
    "ther" => $ther,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>

<?= $this->render('business', [
    "businessdetail" => $businessdetail,
    "busi" => $busi,
    "wikiimage" => $wikiimage,
    "wiki" => $wiki,
    "userInThisBranch" => $userInThisBranch,
    "canEdit" => $canEdit,
    "branchName" => $branchName,
]) ?>
<?= $this->render('part3', [
    "standing" => $standing,
    "understanding" => $understanding,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "newservices" => $newservices,
    "nameslider" => $nameslider,
    "branchName" => $branchName,
]) ?>

<?= $this->render('part4', [
    "shape" => $shape,
    "shapestar" => $shapestar,
    "support" => $support,
    "marketing" => $marketing,
    "companymarket" => $companymarket,
    "related" => $related,
    "canEdit" => $canEdit,
    "userInThisBranch" => $userInThisBranch,
    "branchName" => $branchName,
]) ?>


<div class="col-12 pr12 background-establish pb-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($topiccountry) && count($topiccountry) > 0) {

            ?>
            <div class="col-12 title-establish">
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $topiccountry['title'] ?>
            </div>
            <div class="col-12 title-select">
                <p> <?= $topiccountry['detail'] ?></p>
            </div>
            <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($topiccountry['contentBranchId'])) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $topiccountry['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
                }
                ?>
            <?php
            }
            ?>

            <div class="col-12 pr12 mt-50">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-4 select-country1">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs) :
                                if ($i < 8) {
                        ?>
                        <a href="<?= Yii::$app->homeUrl . $bs['url'] ?>">
                            <p class="no-underline1">
                                <img src="<?= Path::backendUrl() . $bs['image'] ?>">
                                <?= $bs['title'] ?>
                            </p>
                        </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>

                    <div class="col-lg-3 col-md-6 col-4 select-country2">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs2) :
                                if ($i > 7 && $i < 16) {
                        ?>
                        <a href="<?= Yii::$app->homeUrl . $bs2['url'] ?>">
                            <p class="no-underline1">
                                <img src="<?= Path::backendUrl() . $bs2['image'] ?>"
                                    class="<?= $bs2['title'] == 'Japan' ? 'width-japan' : '' ?>">
                                <?= $bs2['title'] ?>
                            </p>
                        </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-lg-4 col-md-6 col-4 select-country3">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs3) :
                                if ($i > 15 && $i < 24) {
                        ?>
                        <a href="<?= Yii::$app->homeUrl . $bs3['url'] ?>">
                            <p class="no-underline1">
                                <img src="<?= Path::backendUrl() . $bs3['image'] ?>">
                                <?= $bs3['title'] ?>
                            </p>
                        </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-6 col-4 select-country4">
                        <?php
                        if (isset($branchserpage) && count($branchserpage) > 0) {
                            $i = 0;
                            foreach ($branchserpage as $bs4) :
                                if ($i > 23 && $i < 26) {
                        ?>
                        <a href="<?= Yii::$app->homeUrl . $bs4['url'] ?>">
                            <p class="no-underline1">
                                <img src="<?= Path::backendUrl() . $bs4['image'] ?>"
                                    class="<?= $bs4['title'] == 'Nigeria' ? 'width-japan' : '' ?>">
                                <?= $bs4['title'] ?>
                            </p>
                        </a>
                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($bsp['contentBranchId'])) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $bsp['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($imgcountrydetail) && count($imgcountrydetail) > 0) {
            ?>
            <div class="col-lg-12 col-md-6">
                <img src=" <?= Path::backendUrl()  . $imgcountrydetail['image'] ?>" class="width-group">
            </div>
            <?php
            }
            ?>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($imgcountrydetail['contentBranchId'])) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $imgcountrydetail['contentBranchId']]) ?>"
                    target="_blank">Edit(<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 service-stage">
                <?php
                if (isset($sl) && !empty($sl)) {
                ?>
                <img src="<?= Yii::$app->homeUrl ?>image/img/Rectangle.png"><?= $sl['title'] ?>
                <?php
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sl['contentBranchId'])) { ?>
                <div class="col-12 text-end mt-3">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $sl['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="col-5 form-selectcountry">
                    Select Country
                </div>
                <div class="col-5 country">
                    <select class="form-select" aria-label="Default select example">
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
            </div>
            <div class="col-12">
                <?php
                if (isset($serleft) && count($serleft) > 0) {
                    $i = 0;
                    foreach ($serleft as $sleft) :
                ?>
                <img src="<?= Path::backendUrl() ?><?= $sleft['image'] ?>" class="width-asset">
                <?php
                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sleft['contentBranchId'])) { ?>
                <div class="col-12 text-end mt-3">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sleft['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="col-12 services-account">
                <?php
                if (isset($sr) && !empty($sr)) {
                ?>
                <p> <?= $sr['detail'] ?></p>
                <?php
                }
                ?>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sr['contentBranchId'])) { ?>
                <div class="col-12 text-end mt-3">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/update-content-branch/' . ModelMaster::encodeParams(["contentBranchId" => $sr['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="col-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <?php
                    if (isset($serright) && count($serright) > 0) {
                        $i = 0;
                        foreach ($serright as $sright) :
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="<?= $sright['contentBranchDetailId'] ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#f<?= $sright['contentBranchDetailId'] ?>" aria-expanded="true"
                                aria-controls="<?= $sright['contentBranchDetailId'] ?>">
                                <?= $sright['title'] ?>
                            </button>
                        </h2>
                        <div id="f<?= $sright['contentBranchDetailId'] ?>" class="accordion-collapse collapse"
                            aria-labelledby="<?= $sright['contentBranchDetailId'] ?>"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?= $sright['detail'] ?>
                            </div>
                        </div>
                    </div>
                    <?php
                            $i++;
                        endforeach;
                    }
                    ?>
                </div>
                <?php
                if ($canEdit == 1 && $userInThisBranch == 1 && isset($sright['contentBranchId'])) { ?>
                <div class="col-12 text-end mt-3">
                    <a class="btn btn-warning bt-line"
                        href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $sright['contentBranchId']]) ?>"
                        target="_blank">Edit(<?= $branchName ?>)</a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

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
                                <select class="form-select mt-10" name="countryid" id="countryid"
                                    aria-label="Default select example">
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
                                            <input class="form-check-input" type="radio" name="typeperson"
                                                id="legalEntity" value="1">
                                            <label class="form-check-label ml-10" for="legalEntity"> Legal
                                                Entity</label>
                                        </div>
                                    </div>
                                    <div class="col-5 left-box-select">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typeperson"
                                                id="individual" value="2" checked>
                                            <label class="form-check-label ml-10" for="individual">
                                                Individual</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 your-company" style="margin-top: 30px;">
                            <label for="exampleInputCompany" class="form-label label-thin"> Your Company<span
                                    class="moon">*</span></label>
                            <input type="Company" class="form-control" name="company" id="company"
                                aria-describedby="company">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputName" class="form-label label-thin"> Your Name<span
                                    class="moon">*</span></label>
                            <input type="Name" class="form-control" name="name" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputPosition" class="form-label label-thin"> Position<span
                                    class="moon">*</span></label>
                            <input type="Position" class="form-control" name="position" id="position"
                                aria-describedby="position">
                        </div>
                        <div class="mb-3 your-company">
                            <label for="exampleInputEmail" class="form-label label-thin"> Your e-mail<span
                                    class="moon">*</span></label>
                            <input type="Email" class="form-control" id="email" name="email" aria-describedby="email">
                        </div>
                        <div class="mb-3 your-company">
                            <div class="row">
                                <div class="col-6 text-start">
                                    <label for="exampleInputEmail" class="form-label label-thin"> Phone Number<span
                                            class="moon">*</span></label>
                                    <input type="number" class="form-control" name="phonenumber" id="phonenumber"
                                        placeholder="+880" aria-label="Phone">
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail" class="form-label label-thin"> Your Business<span
                                            class="moon">*</span></label>
                                    <select class="form-select" name="businesstype" id="businesstype"
                                        aria-label="Default select example">
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
                            <input type="Questions" class="form-control" name="question" id="question"
                                aria-describedby="Questions">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label label-thin">Details of
                                Inquiry</label>
                            <textarea class="form-control" name="detail" id="detail" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6 text-start label-thin mt-4">
                                ATTACHMENT (IF ANY) <a href="" class="no-underline"><i class="fa fa-paperclip"
                                        aria-hidden="true"></i></a>

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
</div>