<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'taxassessment';
?>

<div class="col-12">
    <img src="<?= Yii::$app->homeUrl ?>img/img-10.png" class="img-10">
</div>


<div class="col-12 pr12 pl-30">
    <div class="row">
        <div class="col-12">
            <?php
            if (isset($bannerhome) && count($bannerhome) > 0) {
                $i = 0;
                foreach ($bannerhome as $home) :
            ?>
                    <i class="fa fa-home taxassessment-home" aria-hidden="true"></i>
                    <a href="" class="no-underline2"> <?= $home['title'] ?></a>
                    <a href="" class="no-underline2"> / <?= $home['detail'] ?> </a>
                    <a href="" class="no-underline2">/ <?= $home['detail2'] ?></a>
            <?php
                endforeach;
            }
            ?>
        </div>
        <?php
        if (isset($pageassessment) && count($pageassessment) > 0) {
            $i = 0;
            foreach ($pageassessment  as  $pagassess) :
        ?>
                <div class=" col-7 text-Assessment-home">
                    <?= $pagassess['title'] ?>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

        <div class="col-lg-8 col-md-6 col-12">
            <?php
            if (isset($pageassessment) && count($pageassessment) > 0) {
                $i = 0;
                foreach ($pageassessment  as  $pagassess) :
            ?>
                    <div class="col-12 title-Accounts-Taxation">
                        <a href="" class="no-underline2"><?= $pagassess['detail'] ?></a> | <span class="title-mins-read"> <?= $pagassess['detail2'] ?></span>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="col-12 mt-20 pl-40">
                <button type="button" class="btn btn-outline-dark btn-outline-icon1"> <i class="fa fa-volume-up" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-outline-dark btn-outline-icon1"> <i class="fa fa-link" aria-hidden="true"> Copy Link</i></button>
                <button type="button" class="btn btn-outline-dark btn-outline-icon1"> <i class="fa fa-facebook" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-outline-dark btn-outline-icon1"> <i class="fa fa-twitter" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-outline-dark btn-outline-icon1"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></button>
            </div>
            <?php
            if (isset($detailtaxassessment) && count($detailtaxassessment) > 0) {
                $i = 0;
                foreach ($detailtaxassessment as  $dtx) :
            ?>
                    <div class="col-12 title-Background">
                        <?= $dtx['title'] ?>
                    </div>
                    <div class="col-10 Background-abbreviation">
                        <?= $dtx['detail'] ?>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>

            <?php
            if (isset($assessee) && count($assessee) > 0) {
                $i = 0;
                foreach ($assessee  as  $ses) :
            ?>
                    <div class="col-12 title-Background">
                        <?= $ses['title'] ?>
                    </div>
                    <div class="col-10 Background-abbreviation">
                        <li> <?= $ses['detail'] ?></li>
                        <li> <?= $ses['detail2'] ?></li>
                        <li> <?= $ses['detail3'] ?></li>
                        <li> <?= $ses['detail4'] ?></li>
                        <a href="" class="no-underline3"><span class="title-Assessee"> <?= $ses['detail5'] ?></span></a>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>

            <?php
            if (isset($duties) && count($duties) > 0) {
                $i = 0;
                foreach ($duties as  $duti) :
            ?>
                    <div class="col-12 title-Background">
                        <?= $duti['title'] ?>
                    </div>
                    <div class="col-10 Background-abbreviation">
                        <li> <?= $duti['detail'] ?></li>
                        <li> <?= $duti['detail2'] ?></li>
                        <li> <?= $duti['detail3'] ?></li>
                        <li> <?= $duti['detail4'] ?></li>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <?php
            if (isset($textresponsibility) && count($textresponsibility) > 0) {
                $i = 0;
                foreach ($textresponsibility as  $where) :
            ?>
                    <div class="col-12 title-Background">
                        <?= $where['title'] ?>
                    </div>
                    <div class="col-10 Background-abbreviation">
                        <li> <?= $where['detail'] ?></li>
                        <li> <?= $where['detail2'] ?></li>
                        <li> <?= $where['detail3'] ?></li>
                        <li> <?= $where['detail4'] ?></li>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>

            <?php
            if (isset($article) && count($article) > 0) {
                $i = 0;
                foreach ($article as $ar) :
            ?>
                    <div class="col-12 title-Background">
                        <?= $ar['title'] ?>
                    </div>
                    <div class="col-10 Background-abbreviation">
                        <p> <?= $ar['detail'] ?></p>
                        <p> <?= $ar['detail2'] ?></p>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <img src="<?= Yii::$app->homeUrl . $ar['image'] ?>" class="img-saito1">
                            </div>
                            <div class="col-5">
                                <p class="name-Kaorisaito"> <?= $ar['detail3'] ?></p>
                                <p class="name-international"> <?= $ar['detail4'] ?></p>
                            </div>
                            <div class="col-5 mt-40 button-cloud">
                                <button type="button" class="btn btn-primary"> <i class="fa fa-file-text-o" aria-hidden="true"></i> <?= $ar['detail5'] ?></button>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            }
            ?>
            <div class="col-12">
                <div class="row pl-10">
                    <?php
                    if (isset($buttonnext) && count($buttonnext) > 0) {
                        $i = 0;
                        foreach ($buttonnext  as  $next) :
                    ?>
                            <div class="col-6 Previous-left">
                                <a href="" class="no-underline6"> <i class="fa fa-caret-left" aria-hidden="true"></i> <?= $next['title'] ?> </a>
                                <div class="col-12 title-Advance">
                                    <?= $next['detail'] ?>
                                </div>

                            </div>
                            <div class="col-6 Previous-right">
                                <a href="" class="no-underline6"> <?= $next['detail2'] ?> <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <div class="col-12 title-right1">
                                    <?= $next['detail3'] ?>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endforeach;
                    }
                    ?>

                </div>
            </div>
            <div class="col-12">
                <?php
                if (isset($pageinformation) && count($pageinformation) > 0) {
                    $i = 0;
                    foreach ($pageinformation as  $claimer) :
                ?>

                        <div class="col-12 paragraph1">
                            <?= $claimer['title'] ?>
                        </div>
                        <div class="col-10 paragraph2">
                            <?= $claimer['detail'] ?>
                        </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 pl-40 pr-20">
            <div class="row">
                <?php
                if (isset($branchoverview) && count($branchoverview) > 0) {
                    $i = 0;
                    foreach ($branchoverview  as  $importoverview) :
                ?>
                        <div class="col-12 paragraph3">
                            <?= $importoverview['title'] ?>
                        </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>

                <?php
                if (isset($overview) && count($overview) > 0) {
                    $i = 0;

                    foreach ($overview as $over) :
                        if ($i < 4) {

                ?>
                            <div class="col-12 paragraph4">
                                <p> <i class="fa fa-square" aria-hidden="true"></i> <?= $over['title'] ?></p>
                            </div>

                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>

                <hr>

                <?php
                if (isset($branchoverview) && count($branchoverview) > 0) {
                    $i = 0;
                    foreach ($branchoverview  as  $importoverview) :
                ?>
                        <div class="col-12 paragraph-img">
                            <img src="<?= Yii::$app->homeUrl . $importoverview['image'] ?>" class="img-transportation1">
                        </div>
                        <div class="col-12 paragraph5">
                            <?= $importoverview['detail'] ?>
                        </div>
                        <div class="col-12 paragraph6">
                            <?= $importoverview['detail2'] ?>
                            <hr>
                        </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>
                <?php
                if (isset($namemohammed) && count($namemohammed) > 0) {
                    $i = 0;
                    foreach ($namemohammed  as $mohamma) :
                ?>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2">
                                    <img src="<?= Yii::$app->homeUrl ?>img/Round.png" class="img-Round">
                                </div>
                                <div class="col-6">
                                    <p class="name-Round"> <?= $mohamma['title'] ?></p>
                                    <p class="name-Round1"> <?= $mohamma['detail'] ?></p>
                                </div>
                            </div>
                        </div>

                <?php
                        $i++;
                    endforeach;
                }
                ?>


                <?php
                if (isset($workers) && count($workers) > 0) {
                    $i = 0;
                    foreach ($workers  as $wor) :
                ?>
                        <div class="col-12">
                            <img src="<?= Yii::$app->homeUrl . $wor['image'] ?>" class="img-blurred">
                        </div>
                        <div class="col-12 paragraph5">
                            <?= $wor['title'] ?>
                        </div>
                        <div class="col-12 paragraph6">
                            <?= $wor['detail'] ?>
                            <hr>
                        </div>
                <?php
                        $i++;
                    endforeach;
                }
                ?>



                <div class="col-12">
                    <div class="row">
                        <?php
                        if (isset($namequaziehsan) && count($namequaziehsan) > 0) {
                            $i = 0;
                            foreach ($namequaziehsan as $hossain) :
                        ?>
                                <div class="col-2">
                                    <img src="<?= Yii::$app->homeUrl . $hossain['image'] ?>" class="img-Round">
                                </div>
                                <div class="col-6">
                                    <p class="name-Round"> <?= $hossain['title'] ?></p>
                                    <p class="name-Round1"> <?= $hossain['detail'] ?></p>
                                </div>
                        <?php
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mt-50"></div>

<?php
if (isset($footer) && count($footer) > 0) {
    $i = 0;
    foreach ($footer as $h) :
?>

        <div class="col-12 pr12 blue pt-20 pb-10">
            <div class="row">
                <div class="col-1g-10 col-md-10 col-12 text-update">
                    <p><?= $h['title'] ?></p>
                    <p> <?= $h['detail'] ?></p>
                </div>
                <div class="col-1g-10 col-md-10 col-12 text-project">
                    <p><?= $h['detail2'] ?></p>
                </div>
                <div class="col-lg-5 col-md-6 col-12 mt-10 input-group-form">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control input-your-email" placeholder="Your Email address" aria-label="Your Email address with two button addons">
                        <button class="btn btn-primary" type="button"><?= $h['detail3'] ?></button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-12 pr12">
            <div class="row">
                <div class="offset-lg-6 col-lg-6 col-12 text-center">
                    <img src="<?= Yii::$app->homeUrl . $h['image'] ?>" class="image-book">
                </div>
            </div>
        </div>
<?php
        $i++;
    endforeach;
}
?>