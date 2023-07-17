<?php
    use common\helpers\Path;
    use common\models\ModelMaster;
?>

<div class="col-12">
    <?php
    if (isset($about) && count($about) > 0) {
        $i = 0;
        foreach ($about as $ab) :
    ?>
            <img src="<?= Path::backendUrl() . $ab['image'] ?>" style="width:100%">
            <div class="text4">
                <img src="<?= Path::backendUrl() ?>image/Rectangle1.png" class="image mr-1"> <?= $ab['title'] ?>
            </div>
            <div class="col-lg-8 col-md-6 col-12  text-Yasunari">
                <p><?= $ab['detail'] ?></p>
                <p><?= $ab['detail2'] ?></p>
                <p class="text-end"><?= $ab['detail3'] ?></p>
            </div>

    <?php
            $i++;
        endforeach;
    }
    ?>

</div>
<?php
if ($admin == 1) { ?>
    <div class=" col-12 text-end edit-content">
        <a class="btn btn-warning bt-line" href="<?= Path::backendUrl() . 'content/default/content-detail/' . ModelMaster::encodeParams(["contentId" => $f['contentId']]) ?>" target="_blank">Edit</a>
    </div>
<?php
}
?>