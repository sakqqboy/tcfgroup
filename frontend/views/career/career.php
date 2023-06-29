<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;
use common\helpers\Path;
use common\models\ModelMaster;

$this->title = 'Career';
?>




<div class="">
    <?php
    if (isset($career) && !empty(($career)) > 0) {
        $i = 0;
        foreach ($career as $jobtcf) :
    ?>
            <div class="col-12">
                <img src="<?= Path::backendUrl() . $jobtcf['image'] ?>" class="image-job-postd">
            </div>
            <div>
                <?php
                    if ($admin == 1) { ?>
                    <div class=" col-12 text-end mt-1 mb-3">
                        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $jobtcf['contentId']]) ?>" target="_blank">Edit</a>
                    </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-10 text-shape">
                <?= $jobtcf['title'] ?> <br>
                <?= $jobtcf['detail'] ?> <br>
                <button type="button" class="btn btn-primary Explore-Job"><?= $jobtcf['detail2'] ?></button>
            </div>
    <?php

            $i++;
        endforeach;
    }
    ?>
</div>

<div class="col-12 pr12">
    <?php
    if (isset($future) && count($future) > 0) {
        $i = 0;
        foreach ($future as $the) :
    ?>
            <div class="col-12  text-future">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $the['title'] ?>
            </div>
            <div class="row">
                <div class="col-7">
                    <img src="<?= Path::backendUrl() . $the['image'] ?>" class="image-code">
                </div>
                <div class="col-5">
                    <div class="card card-title1">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="col-12">
                                    <h5 class="card-title-home"><?= $the['detail'] ?></h5>
                                </div>
                                <div class="col-12">
                                    <p class="title1"><?= $the['detail2'] ?></p>
                                </div>
                                <div class="col-12">
                                    <p class="title2"> <?= $the['detail3'] ?> </p>
                                </div>
                                <div class="col-12">
                                    <div class="title3">
                                        <a href="#"><?= $the['detail4'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
<?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $the['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
    ?>
</div>

<div class="col-12 pr12">

    <?php
    if (isset($learnmore) && count($learnmore) > 0) {
        $i = 0;
        foreach ($learnmore as $more) :
    ?>
            <div class="row">
                <div class="col-5">
                    <div class="card card-title2">
                        <div class="card-body">
                            <div class="col-12">
                                <h5 class="card-title-page"> <?= $more['title'] ?></h5>
                            </div>
                            <div class="col-12">
                                <p class="title4"><?= $more['detail'] ?></p>
                            </div>
                            <div class="col-12">
                                <p class="title5"> <?= $more['detail2'] ?> </p>
                            </div>
                            <div class="col-12">
                                <div class="title6">
                                    <a href="#"><?= $more['detail3'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <img src="<?= Path::backendUrl() . $more['image'] ?>" class="image-philosophy">
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
<?php
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $more['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
        }
    ?>
</div>

<div class="col-12">
    <?php
    if (isset($explore) && count($explore) > 0) {
        $i = 0;
        foreach ($explore as $ex) :

    ?>
            <div class="col-12 title-explore">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $ex['title'] ?>
            </div>

            <div class="col-12 pr12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 title-txt1">
                        <h5><?= $ex['detail'] ?></h5>
                        <p><?= $ex['detail2'] ?></p>
                        <button type="button" class="btn btn-primary button-apply"><?= $ex['detail3'] ?></button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <img src="<?= Path::backendUrl() . $ex['image'] ?>" class="image-picture-1">
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
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ex['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
            }
        ?>
    </div>

    <?php
    if (isset($apply) && count($apply) > 0) {
        $i = 0;
        foreach ($apply as $ap) :
    ?>
            <div class="col-12 pr12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="<?= Path::backendUrl() . $ap['image'] ?>" class="image-picture-2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 title-txt2">
                        <h5><?= $ap['title'] ?></h5>
                        <p> <?= $ap['detail'] ?></p>
                        <button type="button" class="btn btn-primary button-apply"><?= $ap['detail2'] ?></button>
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
        if ($admin == 1) { ?>
            <div class=" col-12 text-end mt-1 mb-3">
                <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ap['contentId']]) ?>" target="_blank">Edit</a>
            </div>
        <?php
            }
        ?>
    </div>

    <?php
    if (isset($professional) && count($professional) > 0) {
        $i = 0;
        foreach ($professional as $pr) :
    ?>
            <div class="col-12 pr12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 title-txt1">
                        <h5><?= $pr['title'] ?> </h5>
                        <p><?= $pr['detail'] ?></p>
                        <button type="button" class="btn btn-primary button-apply"><?= $pr['detail2'] ?></button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <img src="<?= Path::backendUrl() . $pr['image'] ?>" class="image-picture-3">
                    </div>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $pr['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($culture) && count($culture) > 0) {
            $i = 0;
            foreach ($culture as $cu) :
                if ($i < 2) {

        ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="col-12 name-explore">
                            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="img2 mr-1"> <?= $cu['title'] ?>
                        </div>
                        <div class="col-12  mt-10 box-name">
                            <p><?= $cu['detail'] ?></p>
                            <p class="title-end"><a href="#" class="no-underline"><?= $cu['detail2'] ?></a></p>
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
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $cu['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>

<div class="col-12 pr12">
    <div class="row">
        <?php
        if (isset($video)  && count($video) > 0) {
            $i = 0;
            foreach ($video as $vo) :
        ?>
                <div class="col-12">
                    <div class="text-center">
                        <a href="#" class="no-underline"><i class="fa fa-chevron-circle-left title-left" aria-hidden="true"></i></a> <img src="<?= Yii::$app->homeUrl . $vo['image'] ?>" class="image-TCF-GROUP"> <a href="#" class="no-underline"><i class="fa fa-chevron-circle-right title-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <span class="badge bg-primary life-play"> <a href="#" class="no-underline4"> <i class="fa fa-play-circle play-auto" aria-hidden="true"></i></a>
                            <?= $vo['detail'] ?>
                        </span>
                <?php
                $i++;
            endforeach;
        }
                ?>
                    </div>
                </div>
    </div>
</div>
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $vo['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>

<div class="col-12  mt-50 col-background">
    <?php
    if (isset($show) && count($show) > 0) {
        $i = 0;
        foreach ($show as $sh) :
    ?>
            <div class="col-12 Global-Business">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $sh['title'] ?>
            </div>
            <div class="col-12 text-TCG">
                <?= $sh['detail'] ?>
            </div>
            
    <?php
            $i++;
        endforeach;
    }
    ?>

    <div class="col-12">
        <div class="row col-12">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-6 country-index">
                        <?php
                        if (isset($discovercountry) && count($discovercountry) > 0) {
                            $i = 0;
                            foreach ($discovercountry as $di) :
                                if ($i < 13) {

                        ?>
                                    <p> <a href="<?= Yii::$app->homeUrl . $di['url'] ?>" class="no-underline1">
                                            <img src="<?= Path::backendUrl() . $di['image'] ?>" class="img-country">
                                            <?= $di['title'] ?></a>
                                    </p>



                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    
                    <div class="col-6 country-index">
                        <?php
                        if (isset($incountry) && count($incountry) > 0) {
                            $i = 0;
                            foreach ($incountry as $in) :
                                if ($i < 13) {

                        ?>

                                    <p><a href="<?= Yii::$app->homeUrl . $in['url'] ?>" class="no-underline1">
                                            <img src="<?= Path::backendUrl() . $in['image'] ?>" class="img-country"><?= $in['title'] ?></a>
                                    </p>

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
                <?php
                if (isset($show) && count($show) > 0) {
                    $i = 0;
                    foreach ($show as $sh) :
                ?>
                        <img src="<?= Path::backendUrl() . $sh['image'] ?>" class="image-gol1">
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="col-12 text-end mt-1 mb-3">
    <?php
        if ($admin == 1) { 
    ?>
        <span>
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $sh['contentId']]) ?>" target="_blank">Edit(ฺBG)</a>
        </span>
    <?php
        }
    ?>
    <?php
        if ($admin == 1) { 
    ?>
        <span>
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $di['contentId']]) ?>" target="_blank">Edit(Left)</a>
        </span>
    <?php
        }
    ?>
    <?php
        if ($admin == 1) { 
    ?>
        <span>
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $in['contentId']]) ?>" target="_blank">Edit(Right)</a>
        </span>
    <?php
        }
    ?>
</div>

<div class="col-12">
    <?php
    if (isset($show) && count($show) > 0) {
        $i = 0;
        foreach ($show as $sh) :
    ?>
            <div class="col-12 mt-50 title-open">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $sh['detail2'] ?>
            </div>

            <div class="col-12 pr12 mt-50 form-input">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="col-12">
                            <div class="input-group rounded from-input-search">
                                <span class="input-group-text border-0" id="search-addon">
                                    <a href="#search"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </span>
                                <input type="search" class="form-control rounded" placeholder="Search for jobs or keywords" aria-label="Search" aria-describedby="search-addon" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12 form-text">
                        <?= $sh['detail3'] ?>
                    </div>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $sh['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>


<div class="col-12 pr12 mt-20 form-dropdown">
    <div class="col-lg-4 col-md-6 col-12">
        <div class="row">
            <?php
            if (isset($badge) && count($badge) > 0) {
                $i = 0;
                foreach ($badge as $btc) :
                    if ($i < 3) {
            ?>
                        <div class="col-4">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $btc['title'] ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><?= $btc['detail'] ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= $btc['detail2'] ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= $btc['detail3'] ?></a></li>
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
</div>
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $btc['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>


<div class="col-12 pr12 mt-50 alert-all">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <?php
                if (isset($card) && count($card) > 0) {
                    $i = 0;
                    foreach ($card as $cd) :
                        if ($i < 4) {

                ?>
                            <div class="col-lg-3 col-md-5 col-12">
                                <div class="alert alert-info">
                                    <span class="badge bg-info"> <?= $cd['title'] ?></span> <span class="black"><?= $cd['detail'] ?></span>
                                    <p class="black-1 mt-4"><?= $cd['detail2'] ?></p>
                                    <p><?= $cd['detail3'] ?></p>
                                    <p><img src="<?= Path::backendUrl() ?>image/check-in.png" class="image-check-in">
                                        <?= $cd['detail4'] ?></p>
                                    <p class=""><?= $cd['detail5'] ?></p>
                                    <div class="row">
                                        <div class="col-6 button-title-see">
                                            <button type="button" class="btn btn-info button-detail"><?= $cd['detail6'] ?></button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-primary button-apply-detail"><?= $cd['detail7'] ?></button>
                                        </div>
                                    </div>
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
    </div>
</div>
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $cd['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>

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
<div>
    <?php
        if ($admin == 1) { 
    ?>
        <div class=" col-12 text-end mt-1 mb-3">
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ft['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
        }
    ?>
</div>