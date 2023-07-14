<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>


<div class="col-12 pr12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 data-table-form">
            <div class="accordion mt-20" id="accordionExample">
                <?php
                if (isset($freedetail) && count($freedetail) > 0) {
                    $i = 1;
                    foreach ($freedetail as $free) :
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="<?= $free['contentBranchDetailId'] ?>">
                        <button class="<?= $i == 1 ? 'accordion-button' : 'accordion-button collapsed' ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#a<?= $free['contentBranchDetailId'] ?>"
                            aria-expanded="true" aria-controls="<?= $free['contentBranchDetailId'] ?>">
                            <?= $free['title'] ?>
                        </button>
                    </h2>
                    <div id="a<?= $free['contentBranchDetailId'] ?>"
                        class="accordion-collapse collapse <?= $i == 1 ? 'show' : '' ?>"
                        aria-labelledby="<?= $free['contentBranchDetailId'] ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong><?= $free['detail'] ?></strong><br>
                            <?= $free['detail2'] ?>
                        </div>
                    </div>
                </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
                <div>
                    <?php
                    if ($canEdit == 1 && $userInThisBranch == 1 && isset($free["contentBranchId"])) {
                    ?>
                    <div class="col-12 text-end mt-3">
                        <a class="btn btn-warning bt-line"
                            href="<?= Path::backendUrl() . 'content/default/content-branch-detail/' . ModelMaster::encodeParams(["contentBranchId" => $free['contentBranchId']]) ?>"
                            target="_blank">Edit (<?= $branchName ?>)</a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-20 form-contact-webinar">
            <div class="alert alert-primary" role="alert">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 bg-white  form-bg-media">
                                <a href="#" class="no-underline-form">
                                    <i class="fa fa-google-plus-square form-gooogle" aria-hidden="true"> </i> Signup
                                    with google
                                </a>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="col-4 bg-white  form-bg-media">
                                <a href="#" class="no-underline-form">
                                    <i class="fa fa-linkedin-square form-linkedin" aria-hidden="true"></i> Signup with
                                    LinkedIn
                                </a>
                            </div>
                        </div>

                        <div class="col-12 text-center account-signin">
                            - Or signup with your email -
                        </div>

                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Full name</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"
                                        aria-hidden="true"> </i></span>
                                <input type="text" class="form-control" placeholder="Email" aria-label="email"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-10 mb-4">
                            <label class="form-contact-name">Password</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="password" aria-label="Password"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"><a href="#"><i class="fa fa-eye-slash"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                        <div class="mb-3 form-check mt-20">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> I agreed to the Terms &
                                Conditions</label>
                        </div>
                        <div class="col-7 mt-10">
                            <button type="submit" class="btn btn-primary"> Register for Webinar</button>
                            <p class="account-signin">Already have account? <a href="" class="no-underline1"><span
                                        class="sign-in"> Sign in</span></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>