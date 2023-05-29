<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'newsletter';
?>

<div class="col-12">
    <?php
    if (isset($newsletter) && count($newsletter) > 0) {
        $i = 0;
        foreach ($newsletter as $new) :
    ?>
            <div class="col-12">
                <img src="<?= Yii::$app->homeUrl . $new['image']  ?>" class="img-1">
            </div>
            <div class="col-12 sletter-home">
                <div class="col-12 pl-40 sletter-text-Effective">
                    <p><?= $new['title'] ?></p>
                </div>
                <div class="col-12 pl-40 sletter-text-Resolving">
                    <?= $new['detail'] ?>
                </div>
                <div class="col-6 pl-40  sletter-text-corporate">
                    <?= $new['detail2'] ?><a href="" class="no-underline1"><span class="read-more1"> <?= $new['detail7'] ?></span></a>
                </div>
                <div class="col-12 pr12 btn-newsletter-signup">
                    <div class="row">
                        <div class="col-5 mt-30">
                            <button type="button" class="btn btn-primary button-newsletter-explore"><i class="fa fa-cloud-download" aria-hidden="true"></i> <?= $new['detail3'] ?></button>
                            <button type="button" class="btn btn-primary button-newsletter-right"> <?= $new['detail4'] ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            <p class="title-our-newsletter"> <a href="#sing-up"><span class="sign-up"> <?= $new['detail5'] ?></span></a> <?= $new['detail6'] ?></p>
                        </div>
                        <div class="col-10 sletter-icon">
                            <a href="" class="no-underline"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endforeach;
    }
    ?>

</div>

<div class="col-12 pr12 mt-20">
    <?php
    if (isset($services) && count($services) > 0) {
        $i = 0;
        foreach ($services as $r) :
    ?>
            <div class="col-12 title-Trending">
                <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png"> <?= $r['detail2'] ?>
            </div>
    <?php
        endforeach;
    }
    ?>
    <div class="row mt-50 procress">
        <?php
        if (isset($topic) && count($topic) > 0) {
            $i = 0;
            foreach ($topic as $tp) :
                if ($i < 6) {


        ?>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" id="cotent2-siteindex-<?= $i ?>" onmouseover="javascript:showSiteindex2(<?= $i ?>)">
                        <div class="card-body">
                            <div class="col-12 body-copy1"></div>
                            <p class="home1"><?= $tp['title'] ?></p>
                            <p class="home2"><?= $tp['detail'] ?></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 card mt-10" style="display:none;" id="content2-siteindex2-<?= $i ?>" onmouseleave="javascript:showSiteindex1(<?= $i ?>)">
                        <div class="card-body">
                            <div class="col-12 body-copy"></div>
                            <p class="home1-copy"><?= $tp['title'] ?></p>
                            <p class="home2-copy"><?= $tp['detail'] ?></p>
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


<div class="col-12  pr12 mt-50">
    <?php
    if (isset($import) && count($import) > 0) {
        $i = 0;
        foreach ($import as $port) :
    ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="<?= Yii::$app->homeUrl . $port['image'] ?>" style="width: 100%;">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <p class="title-import mt-10"><?= $port['title'] ?></p> <br>
                    <p class="title-zero"><?= $port['detail'] ?></p> <br>
                    <p class="circle-icon"><a href="#read more" class="no-underline"> <?= $port['detail2'] ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></p></a>
                </div>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>

<div class="col-12 pr12">
    <?php
    if (isset($olderposts) && count($olderposts) > 0) {
        $i = 0;
        foreach ($olderposts as $ol) :
    ?>
            <div class="col-12 title-older">
                <p><?= $ol['title'] ?></p>
            </div>
    <?php
            $i++;
        endforeach;
    }
    ?>

    <div class="col-12">
        <div class="row">
            <?php
            if (isset($olderposts) && count($olderposts) > 0) {
                $i = 0;
                foreach ($olderposts as $ol) :
            ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="<?= Yii::$app->homeUrl . $ol['image'] ?>" class="img-hunter">
                        <p class="title-Human"><?= $ol['detail'] ?></p>
                        <p class="title-Labor"><?= $ol['detail2'] ?></p>
                        <p class="title-import1"><?= $ol['detail3'] ?><a href="" class="no-underline"><span class="read-more"> <?= $ol['detail4'] ?></span></p></a>
                    </div>
            <?php
                    $i++;
                endforeach;
            }
            ?>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="row">
                    <div class="col-6 text-end">
                        <?php
                        if (isset($asset) && count($asset) > 0) {
                            $i = 0;
                            foreach ($asset as $set) :
                                if ($i < 3) {

                        ?>
                                    <div class="col-12">
                                        <p class="title-Human1 mt-30"> <?= $set['title'] ?></p>
                                        <p class="title-IAS1"> <?= $set['detail'] ?></p>
                                        <p class="title-carbon1"><?= $set['detail2'] ?> </p>
                                    </div>

                        <?php
                                }
                                $i++;
                            endforeach;
                        }
                        ?>
                    </div>
                    <div class="col-6 text-end">
                        <?php
                        if (isset($asset) && count($asset) > 0) {
                            $i = 0;
                            foreach ($asset as $set) :
                                if ($i < 3) {

                        ?>
                                    <p><img src="<?= Yii::$app->homeUrl . $set['image'] ?>" class="img-daoudi"></p> <br>
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
    </div>
</div>

<div class="col-12 pr12 mt-50 links-taxas">
    <div class="row pr-20">
        <?php
        if (isset($taxassessment1) && count($taxassessment1) > 0) {
            $i = 0;
            foreach ($taxassessment1  as  $tax) :
                if ($i < 4) {

        ?>
                    <div class="col-3">
                        <div class="col-12">
                            <a href="<?= Yii::$app->homeUrl . $tax['url'] ?>"> <img src="<?= Yii::$app->homeUrl . $tax['image'] ?>" class="img-2"></a>
                        </div>
                        <p class="title-Human4"> <?= $tax['title'] ?></p>
                        <p class="title-1"> <?= $tax['detail'] ?></p>
                        <p class="title-2"><?= $tax['detail2'] ?></p>
                    </div>

        <?php
                }
                $i++;
            endforeach;
        }
        ?>
    </div>
</div>

<div class="col-12 pr12 mt-50 links-taxas">
    <div class="row pr-20">
        <?php
        if (isset($taxassessment2) && count($taxassessment2) > 0) {
            $i = 0;
            foreach ($taxassessment2  as  $ment) :
                if ($i < 4) {

        ?>
                    <div class="col-3">
                        <div class="col-12">
                            <a href="<?= Yii::$app->homeUrl . $ment['url'] ?>"> <img src="<?= Yii::$app->homeUrl . $ment['image'] ?>" class="img-2"></a>
                        </div>
                        <p class="title-Human4"> <?= $ment['title'] ?></p>
                        <p class="title-1"> <?= $ment['detail'] ?></p>
                        <p class="title-2"><?= $ment['detail2'] ?></p>
                    </div>

        <?php
                }
                $i++;
            endforeach;
        }
        ?>
        <div class="col-12 text-center mt-50">
            <?php
            if (isset($olderposts) && count($olderposts) > 0) {
                $i = 0;
                foreach ($olderposts as $ol) :
            ?>
                    <button type="button" class="btn btn-primary"> <?= $ol['detail5'] ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
            <?php

                    $i++;
                endforeach;
            }
            ?>
        </div>
    </div>
</div>


<?php
if (isset($footerbangladresh) && count($footerbangladresh) > 0) {
    $i = 0;
    foreach ($footerbangladresh as $footerbangla) :
?>
        <div class="col-12 pr12 blue pt-20 pb-10 mt-50">
            <div class="row">
                <div class="col-1g-10 col-md-10 col-12 text-update">
                    <p><?= $footerbangla['title'] ?></p>
                    <p> <?= $footerbangla['detail'] ?></p>
                </div>
                <div class="col-1g-10 col-md-10 col-12 text-project">
                    <p><?= $footerbangla['detail2'] ?></p>
                </div>
                <div class="col-lg-5 col-md-6 col-12 mt-10 input-group-form">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control input-your-email" placeholder="Your Email address" aria-label="Your Email address with two button addons">
                        <button class="btn btn-primary" type="button"><?= $footerbangla['detail3'] ?></button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-12 pr12">
            <div class="row">
                <div class="offset-lg-6 col-lg-6 col-12 text-center">
                    <img src="<?= Yii::$app->homeUrl . $footerbangla['image'] ?>" class="img-book">
                </div>
            </div>
        </div>
<?php

        $i++;
    endforeach;
}
?>