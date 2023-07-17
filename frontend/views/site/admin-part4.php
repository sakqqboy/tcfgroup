<?php
    use common\helpers\Path;
    use common\models\ModelMaster;
?>

<div class="col-12">
    <img src="<?= Path::backendUrl() ?>image/Yokhohama.png" class="image-Yokhohamaa">
    <div class="row">
        <?php
        if (isset($business) && count($business) > 0) {
            $i = 0;
            foreach ($business as $bn) :
        ?>
                <div class="col-12">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="text-japan">
                            <p> <?= $bn['title'] ?></p>
                            <p><?= $bn['detail'] ?></p>
                        </div>
                        <div class="text-Unlock">
                            <p><?= $bn['detail2'] ?></p>
                            <button type="button" class="btn btn-primary button-contact"> <?= $bn['detail3'] ?></button>
                            <p><img src="<?= Path::backendUrl() . $bn['image'] ?>" class="image-graph"></p>
                        </div>
                    </div>
                </div>
        <?php
                $i++;
            endforeach;
        }
        ?>

    </div>
</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $d['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>