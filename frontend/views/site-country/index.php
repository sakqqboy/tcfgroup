<?php

/** @var yii\web\View $this */

use backend\models\tokyoconsulting\MemberHasType;
use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;
use yii\bootstrap5\Offcanvas;

$this->title = $branchName;
?>

<div class="">
    <?php
    if (isset($bannerDetail) && !empty($bannerDetail) > 0) {
        $i = 0;

    ?>
    <div class="col-12">
        <img src="<?= Path::backendUrl() . $bannerDetail['image'] ?>" class="image-TCG">
    </div>
    <div class="offset-1 col-10 text-star">
        <?= $bannerDetail['detail'] ?> <br>
        <?= $bannerDetail['detail2'] ?> <br>
        <?= $bannerDetail['detail3'] ?><br>
        <button type="button" class="btn btn-primary button-start"><?= $bannerDetail['detail4'] ?></button>
    </div>
    <?php

    }
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($banner['contentBranchId'])) { ?>
    <div class="col-12 text-end mt-10">
        <a class="bt-line btn btn-warning"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $banner['contentBranchId']]) ?>"
            target="_blank">Edit (<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>

</div>


<div class="col-12 pr12 mt-50">
    <?php
    if (isset($topic) && !empty($topic) > 0) {
        $i = 0;
    ?>
    <div class="col-12 title-Trending">
        <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $topic['title'] ?>
    </div>
    <?php
    }
    ?>
    <div class="row mt-50 procress">
        <?php
        if (isset($topicDetail) && count($topicDetail) > 0) {
            $i = 0;
            foreach ($topicDetail as $td) :
        ?>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" id="content2-siteindex-<?= $i ?>"
            onmouseover="javascript:showSiteindex2(<?= $i ?>)">
            <div class="card-body">
                <div class="col-12 body-copy1"></div>
                <p class="home1"><?= $td['title'] ?></p>
                <p class="home2"><?= $td['detail'] ?></p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" style="display:none;"
            id="content2-siteindex2-<?= $i ?>" onmouseleave="javascript:showSiteindex1(<?= $i ?>)">
            <div class="card-body">
                <div class="col-12 body-copy"></div>
                <p class="home1-copy"><?= $td['title'] ?></p>
                <p class="home2-copy"><?= $td['detail'] ?></p>
            </div>
        </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
    </div>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($topic["contentBranchId"])) { ?>
    <div class="col-12 text-end mt-10">
        <a class="bt-line btn btn-warning"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $topic['contentBranchId']]) ?>"
            target="_blank">Edit (<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>

</div>


<div class="col-12 pr12 mt-50">
    <?php
    if (isset($import) && !empty($import) > 0) {
        $i = 0;
    ?>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="<?= Path::backendUrl() . $importDetail['image'] ?>" class="img-transportation">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <p class="title-import mt-10"><?= $importDetail['title'] ?></p> <br>
            <p class="title-zero"><?= $importDetail['detail'] ?></p> <br>
            <p class="circle-icon"><a href="#read more" class="no-underline"> <?= $importDetail['detail2'] ?> <i
                        class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></p>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($import['contentBranchId'])) { ?>
    <div class="col-12 text-end">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $import['contentBranchId']]) ?>"
            target="_blank">Edit (<?= $branchName ?>)</a>
    </div>
    <?php
    }
    ?>

</div>



<div class="col-12 pr12" style="margin-top: 80px;">
    <div class="col-12 title-Trending">
        <?php
        if (isset($bangladresh) && count($bangladresh) > 0) {
            $i = 0;
        ?>
        <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $bangladresh['title'] ?>
        <?php
        }
        ?>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mt-50">
            <?php
            if (isset($bangladreshDetail) && count($bangladreshDetail) > 0) {
                $i = 0;
            ?>
            <div class="row pr12">
                <div class="col-4 title-bangladesh">
                    <p><?= $bangladreshDetail['title'] ?></p>
                </div>
                <div class="col-2">
                    <img src="<?= Path::backendUrl() . $bangladreshDetail['image'] ?>" class="img-woman">
                    <div class="alert alert-secondary  text-center">
                        <p class="table-calendar"> <i class="fa fa-calendar" aria-hidden="true"> June 2023</i></p>
                        <p> S&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;&nbsp;&nbsp;T&nbsp;&nbsp;&nbsp;&nbsp;F&nbsp;&nbsp;&nbsp;&nbsp;S
                        </p>
                        <p> 3&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;5 <button
                                class="btn btn-primary calendar-button"
                                type="button">6</button>&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;9
                        </p>
                    </div>
                </div>
                <div class="col-6 img-iconday">
                    <img src="<?= Path::backendUrl() ?>image/img/button-1.png" class="img-button">
                    <img src="<?= Path::backendUrl() ?>image/img/button-2.png" class="img-button">
                    <img src="<?= Path::backendUrl() ?>image/img/button-4.png" class="img-button">
                    <img src="<?= Path::backendUrl() ?>image/img/button-3.png" class="img-button">
                </div>
            </div>
            <?php
            }
            ?>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $bangladreshDetail['contentBranchId']]) ?>"
                    target="_blank">Edit (<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>

        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <?php
            if (isset($webinar) && count($webinar) > 0) {
                $i = 0;
            ?>
            <div class="col-12 title-join">
                <?= $webinar['title'] ?>
            </div>
            <div class="col-12 title-topic mt-10">
                <p> <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png"> <?= $webinar['detail'] ?></p>
            </div>
            <?php
            }
            ?>
            <div class="accordion mt-20" id="accordionExample">
                <?php
                if (isset($webinarDetail) && count($webinarDetail) > 0) {
                    $i = 1;
                    foreach ($webinarDetail as $w) :
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="<?= $w['contentBranchDetailId'] ?>">
                        <button class="<?= $i == 1 ? 'accordion-button' : 'accordion-button collapsed' ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#a<?= $w['contentBranchDetailId'] ?>"
                            aria-expanded="true" aria-controls="<?= $w['contentBranchDetailId'] ?>">
                            <?= $w['title'] ?>
                        </button>
                    </h2>
                    <div id="a<?= $w['contentBranchDetailId'] ?>"
                        class="accordion-collapse collapse <?= $i == 1 ? 'show' : '' ?>"
                        aria-labelledby="<?= $w['contentBranchDetailId'] ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong><?= $w['detail'] ?></strong><br>
                            <?= $w['detail2'] ?>
                        </div>
                    </div>
                </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>

            <div class="col-12"><button type="button" class="btn btn-primary button-register mt-30">Register for
                    Webinar</button>
                <p class="title-sign-in"><?= $webinar['title'] ?><a href="#sign in" class="no-underline">Sign in</a></p>
            </div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1) { ?>
            <div class="col-12 text-end">
                <a class="btn btn-warning  bt-line"
                    href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $webinar['contentBranchId']]) ?>"
                    target="_blank">Edit (<?= $branchName ?>)</a>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
    <div class="col-12 pr12 background-site">
        <div class="row"><input type="hidden" id="total-servicesbangladesh" value="<?= count($professionalDetail) ?>">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
                <?php if (isset($professional) && count($professional) > 0) {
                ?>
                <div class="col-lg-12 title-Trending"> <img src="<?= Path::backendUrl() ?>image/Rectangle1.png"
                        class="image mr-1">
                    <?= $professional['title'] ?>
                </div>
                <?php
                }

                if (isset($professionalDetail) && count($professionalDetail) > 0) {
                    $i = 0;
                    foreach ($professionalDetail as $prode) : if ($i < 6) {

                    ?>
                <div class="col-lg-12 Company">
                    <li onclick="javascript:showBangladresh(<?= $i ?>)"><?= $prode['title'] ?></li>
                </div>
                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12 show-text-home">
                <?php if (isset($professionalDetail) && !empty($professionalDetail)) {
                    $i = 0;
                    foreach ($professionalDetail as $profes) :
                ?>
                <div class="col-12 text-legal pl-20" style="display: <?= $i == 0 ? '' : 'none' ?>"
                    id="bangladresh-detail-<?= $i ?>">
                    <?= $profes['detail'] ?>
                </div>
                <div class="col-12 Our pt-20 pl-20" style="display: <?= $i == 0 ? '' : 'none' ?>"
                    id="bangladresh-detail2-<?= $i ?>"> <?= $profes['detail2'] ?> <br>
                    <button type="button" class="btn btn-primary button-text5"><?= $profes['url'] ?></button>
                </div>
                <?php

                        $i++;
                    endforeach;
                }
                ?>
            </div>
            <div class="col-lg-4 col-12">
                <?php if (isset($professionalDetail) && count($professionalDetail) > 0) {
                    $i = 0;
                    foreach ($professionalDetail as $profes) :

                ?>
                <img src="<?= Path::backendUrl() . $profes['image'] ?>" class="img-zgif"
                    style="display: <?= $i == 0 ? '' : 'none' ?>" id="bangladresh-detail3-<?= $i ?>">
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>
        <?php
        if ($canEdit == 1 && $userInThisBranch == 1 && isset($professional['contentBranchId'])) { ?>
        <div class="col-12 text-end mt-3 mb-3">
            <a class="btn btn-warning bt-line"
                href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $professional['contentBranchId']]) ?>"
                target="_blank">Edit (<?= $branchName ?>)</a>
        </div>
        <?php
        }
        ?>

    </div>
    <div class="col-12">
        <div class="col-12 connect-experts mt-40">
            <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png" class="image mr-1">
            <?= isset($legal['title']) ? $legal['title'] : '' ?>
        </div>
        <div class="col-12 Get-free mt-30"><?= isset($legalDetail['title']) ? $legalDetail['title'] : '' ?></div>
        <div class="col-12 If-you mt-10"><?= isset($legalDetail['detail']) ? $legalDetail['detail'] : '' ?></div>
        <div class="col-12 mt-30 pr12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mt-50 pl-40 pr-40 form-input">
                    <div class="row">
                        <div class="col-7">
                            <p class="If-you2"><?= isset($legalDetail['detail2']) ? $legalDetail['detail2'] : '' ?></p>
                        </div>
                        <div class="col-5"><label for="formGroupExampleInput" class="form-label label-thin">&nbsp;
                                &nbsp;
                                &nbsp;
                                Select Country</label><select class="form-select mt-10" name="countryid"
                                aria-label="Default select example" id="countryid">
                                <?php
                                if (isset($country) && count($country) > 0) {
                                    foreach ($country as $x) :
                                ?>
                                <option value="<?= $x['countryId'] ?>"><?= $x['countryName'] ?></option>
                                <?php
                                    endforeach;
                                }
                                ?>
                                <?php
                                if (isset($dropdown) && count($dropdown) > 0) {
                                    foreach ($dropdown as $a) :
                                ?>
                                <option value="<?= $a["countryId"] ?>"><?= $a["countryName"] ?></option>
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
                                        <input class="form-check-input" type="radio" name="typeperson" id="legalEntity"
                                            value="1">
                                        <label class="form-check-label ml-10" for="legalEntity">Legal Entity</label>
                                    </div>
                                </div>
                                <div class="col-5 left-box-select">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="typeperson" id="individual"
                                            value="2" checked>
                                        <label class="form-check-label ml-10" for="individual">Individual</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 your-company" style="margin-top: 30px;"><label for="exampleInputCompany"
                            class="form-label label-thin">Your Company<span class="moon">*</span></label>
                        <input type="Company" class="form-control" name="company" id="company"
                            aria-describedby="company">
                    </div>
                    <div class="mb-3 your-company"><label for="exampleInputName" class="form-label label-thin">Your
                            Name<span class="moon">*</span></label><input type="Name" class="form-control" name="name"
                            id="name" aria-describedby="name"></div>
                    <div class="mb-3 your-company"><label for="exampleInputPosition"
                            class="form-label label-thin">Position<span class="moon">*</span></label><input
                            type="Position" class="form-control" name="position" id="position"
                            aria-describedby="position"></div>
                    <div class="mb-3 your-company"><label for="exampleInputEmail" class="form-label label-thin">Your
                            e-mail<span class="moon">*</span></label><input type="Email" class="form-control" id="email"
                            name="email" aria-describedby="email"></div>
                    <div class="mb-3 your-company">
                        <div class="row">
                            <div class="col-6 text-start"><label for="exampleInputEmail"
                                    class="form-label label-thin">Phone
                                    Number<span class="moon">*</span></label><input type="text" class="form-control"
                                    name="phonenumber" id="phonenumber" placeholder="+880" aria-label="Phone"></div>
                            <div class="col-6"><label for="exampleInputEmail" class="form-label label-thin">Your
                                    Business<span class="moon">*</span></label><select class="form-select"
                                    name="businesstype" id="businesstype" aria-label="Default select example">
                                    <option selected>Select business Type</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></div>
                        </div>
                    </div>
                </div>

                <!-- right side -->
                <div class="col-lg-6 col-md-6 col-12 form-Questions mt-50 pr-40">
                    <div class="mb-3"><label for="exampleInputQuestions" class="form-label label-thin">Questions &
                            Concern</label><input type="Questions" class="form-control" name="question" id="question"
                            aria-describedby="Questions"></div>
                    <div class="mb-3"><label for="exampleFormControlTextarea1" class="form-label label-thin">Details of
                            Inquiry</label><textarea class="form-control" name="detail" id="detail" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-9 text-start label-thin mt-4">ATTACHMENT (IF ANY) <i class="fa fa-paperclip"
                                aria-hidden="true"></i></div>
                        <a class="col-3 mt-4 text-end btn btn-primary button-get" href="javascript:newClient()">
                            <div class="text-center">
                                Get
                                Free
                                Appointment
                            </div>
                        </a>
                        <div class="col-4 text-start mt-4">
                            <div class="contact-social mb-2">Whatsapp</div><a href="" class="no-underline3">
                                <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i>inquarrytcf</p>
                            </a>
                        </div>
                        <div class="col-8 text-end mt-4">
                            <div class="contact-social mb-2">Email</div><a href="" class="no-underline3">
                                <p class="info-tokyo">f-info@tokyoconsultinggroup.com <i class="fa fa-envelope"
                                        aria-hidden="true"></i></p>
                            </a>
                        </div>
                        <div class="col-4 text-start mt-4">
                            <div class="contact-social mb-2">Skype</div><a href="" class="no-underline3">
                                <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i>inquarrytcf</p>
                            </a>
                        </div>
                        <div class="col-8 text-end mt-4">
                            <div class="contact-social mb-2">Phone</div><a href="" class="no-underline3">
                                <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($canEdit == 1 && $userInThisBranch == 1 && isset($legal["contentBranchId"])) { ?>
        <div class=" col-12 text-end mb-3">
            <a class="btn btn-warning bt-line"
                href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $legal['contentBranchId']]) ?>"
                target="_blank">Edit (<?= $branchName ?>)</a>
        </div>
        <?php
        }
        ?>
    </div>
    <?php if (isset($footer) && count($footer) > 0) {
        $i = 0;
        foreach ($footer as $h) :
    ?> <div class="col-12 pr12 blue pt-20 pb-10">
        <div class="row">
            <div class="col-1g-10 col-md-10 col-12 text-update">
                <p><?= $h['title'] ?></p>
                <p> <?= $h['detail'] ?></p>
            </div>
            <div class="col-1g-10 col-md-10 col-12 text-project">
                <p><?= $h['detail2'] ?></p>
            </div>
            <div class="col-lg-5 col-md-6 col-12 mt-10 input-group-form">
                <div class="input-group flex-nowrap"> <span class="input-group-text" id="addon-wrapping"><i
                            class="fa fa-envelope"></i></span> <input type="text" class="form-control input-your-email"
                        placeholder="Your Email address" aria-label="Your Email address with two button addons"> <button
                        class="btn btn-primary" type="button"><?= $h['detail3'] ?></button> </div> <br>
            </div>
        </div>
    </div>
    <div class="col-12 pr12">
        <div class="row">
            <div class="offset-lg-6 col-lg-6 col-12 text-center"> <img src="<?= Path::backendUrl() . $h['image'] ?>"
                    class="image-book"> </div>
        </div>
    </div>
    <?php $i++;
        endforeach;
    }
    ?>