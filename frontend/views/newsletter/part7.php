<?php

use common\helpers\Path;
use common\models\ModelMaster;

?>

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
                <input type="text" class="form-control input-your-email" placeholder="Your Email address"
                    aria-label="Your Email address with two button addons">
                <button class="btn btn-primary" type="button"><?= $footerbangla['detail3'] ?></button>
            </div>
            <br>
        </div>
    </div>
</div>
<div class="col-12 pr12">
    <div class="row">
        <div class="offset-lg-6 col-lg-6 col-12 text-center">
            <img src="<?= Path::backendUrl() . $footerbangla['image'] ?>" class="img-book">
        </div>
    </div>
</div>
<?php

        $i++;
    endforeach;
}
?>