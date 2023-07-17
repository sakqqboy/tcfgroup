<?php

use common\helpers\Path;
use common\models\ModelMaster;
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
<div>
    <?php
    if ($admin == 1) {
    ?>
    <div class=" col-12 text-end mt-1 mb-3">
        <a class="btn btn-warning bt-line"
            href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $ft['contentId']]) ?>"
            target="_blank">Edit</a>
    </div>
    <?php
    }
    ?>
</div>