<?php

use common\helpers\Path;
use common\models\ModelMaster;
?>

<div class="col-12  title-employees mt-50">
    <?php
    if (isset($global) && count($global) > 0) {
        $i = 0;
        foreach ($global as $meetting) :
    ?>
            <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image-Rectangle1"> <?= $meetting['title'] ?>
    <?php
            $i++;
        endforeach;
    }
    ?>
</div>
<div class="col-12 pr12 tcf-type">
    <div class="row">
        <?php
        if (isset($global) && count($global) > 0) {
            $i = 0;
            foreach ($global as $meetting) :
        ?>
                <div class="col-md-3 col-5 Global-TCF">
                    <?= $meetting['detail'] ?>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>
        <div class="col-md-3 col-5">
            <select class="form-select" aria-label="Default select example">
                <?php
                if (isset($insider) && count($insider) > 0) {
                    $i = 0;
                    foreach ($insider as $incountry) :
                        if ($i < 26) {
                ?>
                            <option selected><?= $incountry['title'] ?></option>
                <?php
                        }
                        $i++;
                    endforeach;
                }
                ?>
            </select>
        </div>
    </div>
</div>
<div class="col-12">
    <?php
    if (isset($global) && count($global) > 0) {
        $i = 0;
        foreach ($global as $meetting) :
    ?>
            <img src="<?= Path::backendUrl() . $meetting['image'] ?>" class="image-ceo">
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
            <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $meetting['contentId']]) ?>" target="_blank">Edit</a>
        </div>
    <?php
    }
    ?>
</div>