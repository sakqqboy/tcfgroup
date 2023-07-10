<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'contact';
?>

<div class="col-12  home-contact2">
    <?php
    if (isset($bannerresource) && count($bannerresource) > 0) {
        $i = 0;
        foreach ($bannerresource  as $br) :
    ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() ?>image/img/Resources.png" class="img-Resources">
            </div>
            <div class="col-12 page-resource">
                <?= $br['title'] ?>
            </div>
            <div class="col-12 detail-resource">
                <?= $br['detail'] ?>
            </div>
        <?php
            $i++;
        endforeach;
    }
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($resource) && !empty($resource)) {
        ?>
        <div class=" col-12 text-end mt-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $resource['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
        </div>
    <?php
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
            foreach ($national  as $ni) :
                if ($i < 4) {

        ?>
                    <div class="col-lg-3 col-md-6 col-12 mt-10 item-dropdown">
                        <div class="btn-group">
                            <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= Path::backendUrl() . $ni['image'] ?>" class="img-icon"> <?= $ni['title'] ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><?= $ni['detail'] ?></a></li>
                                <li><a class="dropdown-item" href="#"><?= $ni['detail2'] ?></a></li>
                                <li><a class="dropdown-item" href="#"><?= $ni['detail3'] ?></a></li>
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
<div>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($tio) && !empty($tio)) {
    ?>
        <div class=" col-12 text-end mt-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $tio['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
        </div>
    <?php
    }
    ?>
</div>

<table class="table table-striped mt-50">
    <thead class="table1">
        <tr>
            <?php
            if (isset($description) && count($description) > 0) {
                $i = 0;
                foreach ($description as $dc) :
            ?>
                    <th><?= $dc['title'] ?></th>
                    <th><?= $dc['detail'] ?></th>
                    <th><?= $dc['detail2'] ?></th>
                    <th><?= $dc['detail3'] ?></th>
                    <th><?= $dc['detail4'] ?></th>
                    <th><?= $dc['detail5'] ?></th>
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
        foreach ($tabledetail  as  $td) :
            if ($i < 20) {

    ?>
                <tbody class="table2">
                    <tr>
                        <th scope="row" style="color:#0078C8;"><?= $td['title'] ?></th>
                        <td><?= $td['detail'] ?></td>
                        <td><?= $td['detail2'] ?></td>
                        <td><?= $td['detail3'] ?></td>
                        <td><?= $td['detail4'] ?></td>
                        <td class="fot-sm"><button type="button" class="btn btn-primary td-download"><i class="fa fa-cloud-download" aria-hidden="true"></i> <?= $td['detail5'] ?></button></td>
                    </tr>
                </tbody>
    <?php
            }
            $i++;
        endforeach;
    }
    ?>

</table>
<div class="col-12 text-end mt-3">
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($des) && !empty($des)) {
    ?>
        <span class=" col-12 text-end">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $des['contentBranchId']]) ?>" target="_blank">Edit (TP)(<?= $branchName ?>)</a>
        </span>
    <?php
    }
    ?>
    <?php
    if ($canEdit == 1 && $userInThisBranch == 1 && isset($blede) && !empty($blede)) {
    ?>
        <span class=" col-12 text-end">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $blede['contentBranchId']]) ?>" target="_blank">Edit (D)(<?= $branchName ?>)</a>
        </span>
    <?php
    }
    ?>
</div>

<div class="col-12 mt-50 text-center">
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    <span class="of-13"> Page &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp; of &nbsp;&nbsp;13</span>
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
</div>

<div class="col-12 mt-30">
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <div class="col-12 connect-experts mt-40">
                <img src="<?= Path::backendUrl() ?>image/img/Rectangle.png" class="image mr-1"> <?= $legal['title'] ?>
            </div>
            <div class="col-12 Get-free mt-30">
                <?= $legalDetail['title'] ?>
            </div>
            <div class="col-12 If-you mt-10">
                <?= $legalDetail['detail'] ?>
            </div>
            <div class="col-12 mt-30 pr12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mt-50 pl-40 pr-40 form-input">
                        <div class="row">
                            <div class="col-7">
                                <p class="If-you2"><?= $legalDetail['detail2'] ?></p>
                            </div>
                            <div class="col-5">
                                <label for="formGroupExampleInput" class="form-label label-thin" id="countryid">
                                    &nbsp;&nbsp;&nbsp;Select Country</label>
                                <select class="form-select mt-10" aria-label="Default select example">
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
                                ATTACHMENT (IF ANY) <i class="fa fa-paperclip" aria-hidden="true"></i>
                            </div>
                            <div class="col-6 mt-4 text-end">
                                <a type="button" class="btn btn-primary button-get" href="javascript:newClient()">Get Free Appointment</a>
                            </div>
                            <div class="col-4 text-start mt-4">
                                <div class="contact-social mb-2">Whatsapp</div>
                                <a href="" class="no-underline3">
                                    <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf
                                    </p>
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
                                    <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php
            if ($canEdit == 1 && $userInThisBranch == 1 && isset($legalDetail) && !empty($legalDetail)) {
            ?>
                <div class=" col-12 text-end">
                    <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $legalDetail['contentBranchId']]) ?>" target="_blank">Edit (<?= $branchName ?>)</a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>